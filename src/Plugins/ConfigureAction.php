<?php

declare(strict_types=1);

namespace Dew\Acs\Plugins;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDataBuilder;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\OpenApi\ROAStyleBuilder;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

final readonly class ConfigureAction implements Plugin
{
    /**
     * @param  array<string, mixed>  $arguments
     */
    public function __construct(
        private ApiDocs $docs,
        private Api $api,
        private StreamFactoryInterface $streamFactory,
        private array $arguments
    ) {
        //
    }

    /**
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $next
     * @param  callable(\Psr\Http\Message\RequestInterface): \Http\Promise\Promise  $first
     */
    #[\Override]
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $data = $this->makeParameterBuilder()->build($this->arguments);

        if ($data->headers !== []) {
            foreach ($data->headers as $name => $value) {
                $request = $request->withHeader($name, $value);
            }
        }

        $request = $request
            ->withMethod($data->method)
            ->withUri($request->getUri()
                ->withHost($data->host === null
                    ? $request->getUri()->getHost()
                    : $data->host.'.'.$request->getUri()->getHost()
                )
                ->withScheme($data->scheme)
                ->withPath($data->path)
                ->withQuery($data->query))
            ->withBody($this->streamFactory->createStream($data->body));

        return $next($request);
    }

    private function makeParameterBuilder(): ApiDataBuilder
    {
        $product = $this->docs->getNamespace();
        $style = $this->docs->info->style;

        /** @var class-string<\Dew\Acs\OpenApi\ApiDataBuilder>[] */
        $candidates = [
            "Dew\\Acs\\$product\\{$style}StyleBuilder",
            "Dew\\Acs\\OpenApi\\{$style}StyleBuilder",
        ];

        foreach ($candidates as $class) {
            if (class_exists($class)) {
                return new $class($this->docs, $this->api);
            }
        }

        return new ROAStyleBuilder($this->docs, $this->api);
    }
}
