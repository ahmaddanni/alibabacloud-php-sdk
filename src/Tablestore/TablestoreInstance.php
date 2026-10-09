<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Plugins\ConfigureUserAgent;
use Dew\Acs\Response;
use Dew\Acs\Tablestore\Messages\Error;
use Google\Protobuf\Internal\Message;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * @phpstan-import-type TCredentials from \Dew\Acs\AcsClient
 * @phpstan-type TConfig array{
 *   credentials: TCredentials,
 *   region?: string,
 *   instance?: string,
 *   endpoint?: string,
 *   http_client?: \Psr\Http\Client\ClientInterface
 * }
 * @phpstan-type TNormalizedConfig TConfig&array{
 *   region: string,
 *   instance: string,
 *   endpoint: string,
 * }
 */
final class TablestoreInstance implements InteractsWithTablestore
{
    use ManagesTable;
    use ManagesDataOperation;

    /**
     * The normalized config.
     *
     * @var TNormalizedConfig
     */
    private array $config;

    private ClientInterface $httpClient;

    private RequestFactoryInterface $requestFactory;

    private StreamFactoryInterface $streamFactory;

    /**
     * @param  TConfig  $config
     */
    public function __construct(array $config)
    {
        $this->config = Config::normalize($config);
        $this->httpClient = $config['http_client'] ?? Psr18ClientDiscovery::find();
        $this->requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = Psr17FactoryDiscovery::findStreamFactory();
    }

    /**
     * @throws \Dew\Acs\Tablestore\InstanceException
     */
    #[\Override]
    public function send(string $uri, Message $message): string
    {
        $request = $this->requestFactory
            ->createRequest('POST', $this->withEndpoint($uri))
            ->withBody($this->streamFactory->createStream($message->serializeToString()));

        $response = $this->makeClient()
            ->sendAsyncRequest($request)
            ->wait();

        if (! $response instanceof ResponseInterface) {
            throw new \RuntimeException('Could not retrieve the HTTP response.');
        }

        return $this->handleResponse($response);
    }

    /**
     * @throws \Dew\Acs\Tablestore\InstanceException
     */
    private function handleResponse(ResponseInterface $response): string
    {
        $response = new Response($response);

        if ($response->isError()) {
            $this->handleErrorResponse($response);
        }

        return $response->body();
    }

    /**
     * @throws \Dew\Acs\Tablestore\InstanceException
     */
    private function handleErrorResponse(Response $response): never
    {
        $error = new Error();
        $error->mergeFromString($response->body());

        throw (new InstanceException($error->getMessage(), $error->getCode()))
            ->setResponse($response->getPsrResponse())
            ->setError($error);
    }

    private function makeClient(): PluginClient
    {
        return new PluginClient($this->httpClient, [
            new ConfigureUserAgent(),
            new SignRequest($this->config),
        ]);
    }

    private function withEndpoint(string $uri): string
    {
        return sprintf('%s/%s',
            rtrim($this->config['endpoint'], '/'),
            ltrim($uri, '/')
        );
    }
}
