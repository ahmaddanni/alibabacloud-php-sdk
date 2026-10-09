<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen;

use Dew\Acs\DataEncoder;
use Dew\Acs\MnsOpen\Results\MnsResult;
use Dew\Acs\Plugins\SignRequest;
use Dew\Acs\Response;
use Dew\Acs\Result;
use Dew\Acs\XmlEncoder;
use GuzzleHttp\Psr7;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * @phpstan-type TConfig array{
 *   credentials: array{
 *     key: string,
 *     secret: string
 *   },
 *   endpoint: string,
 *   http_client?: \Psr\Http\Client\ClientInterface
 * }
 * @phpstan-type TSendMessage array{
 *   QueueName: string,
 *   Message: array{
 *     MessageBody: string,
 *     DelaySeconds?: int
 *   }
 * }
 * @phpstan-type TBatchSendMessage array{
 *   QueueName: string,
 *   Messages: array{
 *     Message: array{
 *       MessageBody: string,
 *       DelaySeconds?: int
 *     }[]
 *   }
 * }
 * @phpstan-type TReceiveMessage array{QueueName: string, waitseconds?: int}
 * @phpstan-type TBatchReceiveMessage array{
 *   QueueName: string,
 *   numOfMessages: int,
 *   waitseconds?: int
 * }
 * @phpstan-type TDeleteMessage array{QueueName: string, ReceiptHandle: string}
 * @phpstan-type TBatchDeleteMessage array{
 *   QueueName: string,
 *   ReceiptHandles: array{
 *     ReceiptHandle: string[]
 *   }
 * }
 * @phpstan-type TPeekMessage array{QueueName: string}
 * @phpstan-type TBatchPeekMessage array{QueueName: string, numOfMessages: int}
 * @phpstan-type TChangeMessageVisibility array{
 *   QueueName: string,
 *   ReceiptHandle: string,
 *   VisibilityTimeout: int
 * }
 * @phpstan-type TRequestOptions array{
 *   method: string,
 *   queue: string,
 *   query?: array<string, mixed>,
 *   body?: array<mixed>,
 *   cast?: class-string<\Dew\Acs\MnsOpen\Results\MnsResult>
 * }
 *
 * @method \Dew\Acs\MnsOpen\Results\SendMessageResult sendMessage(TSendMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\BatchSendMessageResult batchSendMessage(TBatchSendMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\ReceiveMessageResult receiveMessage(TReceiveMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\BatchReceiveMessageResult batchReceiveMessage(TBatchReceiveMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\MnsResult deleteMessage(TDeleteMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\MnsResult batchDeleteMessage(TBatchDeleteMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\PeekMessageResult peekMessage(TPeekMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\BatchPeekMessageResult batchPeekMessage(TBatchPeekMessage $arguments)
 * @method \Dew\Acs\MnsOpen\Results\ChangeMessageVisibilityResult changeMessageVisibility(TChangeMessageVisibility $arguments)
 */
final readonly class QueueClient
{
    /**
     * The HTTP request factory.
     */
    private RequestFactoryInterface $requestFactory;

    /**
     * The stream factory.
     */
    private StreamFactoryInterface $streamFactory;

    /**
     * The HTTP client.
     */
    private ClientInterface $client;

    /**
     * The XML encoder.
     */
    private DataEncoder $encoder;

    /**
     * Create a new queue client instance.
     *
     * @param  TConfig  $config
     */
    public function __construct(
        private array $config
    ) {
        $this->requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $this->streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $this->client = $config['http_client'] ?? Psr18ClientDiscovery::find();
        $this->encoder = new XmlEncoder();
    }

    /**
     * Send a message to queue.
     *
     * @param  TSendMessage  $arguments
     */
    public function sendMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'POST',
            'queue' => $arguments['QueueName'],
            'body' => ['Message' => $arguments['Message']],
            'cast' => Results\SendMessageResult::class,
        ]);
    }

    /**
     * Send multiple messages to queue.
     *
     * @param  TBatchSendMessage  $arguments
     */
    public function batchSendMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'POST',
            'queue' => $arguments['QueueName'],
            'body' => ['Messages' => $arguments['Messages']],
            'cast' => Results\BatchSendMessageResult::class,
        ]);
    }

    /**
     * Get a message from queue.
     *
     * @param  TReceiveMessage  $arguments
     */
    public function receiveMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'GET',
            'queue' => $arguments['QueueName'],
            'query' => ['waitseconds' => $arguments['waitseconds'] ?? null],
            'cast' => Results\ReceiveMessageResult::class,
        ]);
    }

    /**
     * Get multiple messages from queue.
     *
     * @param  TBatchReceiveMessage  $arguments
     */
    public function batchReceiveMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'GET',
            'queue' => $arguments['QueueName'],
            'query' => [
                'numOfMessages' => $arguments['numOfMessages'],
                'waitseconds' => $arguments['waitseconds'] ?? null,
            ],
            'cast' => Results\BatchReceiveMessageResult::class,
        ]);
    }

    /**
     * Delete a message from queue.
     *
     * @param  TDeleteMessage  $arguments
     */
    public function deleteMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'DELETE',
            'queue' => $arguments['QueueName'],
            'query' => ['ReceiptHandle' => $arguments['ReceiptHandle']],
        ]);
    }

    /**
     * Delete multiple messages from queue.
     *
     * @param  TBatchDeleteMessage  $arguments
     */
    public function batchDeleteMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'DELETE',
            'queue' => $arguments['QueueName'],
            'body' => ['ReceiptHandles' => $arguments['ReceiptHandles']],
        ]);
    }

    /**
     * Peek a message from queue.
     *
     * @param  TPeekMessage  $arguments
     */
    public function peekMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'GET',
            'queue' => $arguments['QueueName'],
            'query' => ['peekonly' => 'true'],
            'cast' => Results\PeekMessageResult::class,
        ]);
    }

    /**
     * Peek multiple messages from queue.
     *
     * @param  TBatchPeekMessage  $arguments
     */
    public function batchPeekMessageAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'GET',
            'queue' => $arguments['QueueName'],
            'query' => [
                'peekonly' => 'true',
                'numOfMessages' => $arguments['numOfMessages'],
            ],
            'cast' => Results\BatchPeekMessageResult::class,
        ]);
    }

    /**
     * Update message next available time.
     *
     * @param  TChangeMessageVisibility  $arguments
     */
    public function changeMessageVisibilityAsync(array $arguments): Promise
    {
        return $this->send([
            'method' => 'PUT',
            'queue' => $arguments['QueueName'],
            'query' => [
                'receiptHandle' => $arguments['ReceiptHandle'],
                'visibilityTimeout' => $arguments['VisibilityTimeout'],
            ],
            'cast' => Results\ChangeMessageVisibilityResult::class,
        ]);
    }

    /**
     * Execute an API action asynchronously.
     *
     * @param  array<int, mixed>  $arguments
     */
    private function executeAsync(string $action, array $arguments = []): Promise
    {
        return $this->{$action.'Async'}(...$arguments);
    }

    /**
     * Execute an API action.
     *
     * @param  array<int, mixed>  $arguments
     */
    private function execute(string $action, array $arguments = []): mixed
    {
        return $this->executeAsync($action, $arguments)->wait();
    }

    /**
     * Send an HTTP request asynchronously.
     *
     * @param  TRequestOptions  $options
     */
    private function send(array $options): Promise
    {
        $request = $this->requestFactory->createRequest(
            $options['method'], $this->endpoint($options['queue'])
        );

        if (isset($options['query'])) {
            $query = array_filter($options['query'], fn (mixed $value): bool => $value !== null);

            $request = $request->withUri(
                $request->getUri()->withQuery(Psr7\Query::build($query, encoding: false))
            );
        }

        if (isset($options['body'])) {
            $request = $request
                ->withHeader('Content-Type', 'text/xml')
                ->withBody($this->streamFactory->createStream($this->encoder->encode($options['body'])));
        }

        return $this
            ->handleResponse($this->client()->sendAsyncRequest($request))
            ->then($this->castInto($options['cast'] ?? Results\MnsResult::class));
    }

    /**
     * The queue endpoint.
     */
    private function endpoint(string $queue): string
    {
        return sprintf('%s/queues/%s/messages',
            $this->config['endpoint'], $queue
        );
    }

    /**
     * Create a new client.
     */
    private function client(): PluginClient
    {
        return new PluginClient($this->client, [
            SignRequest::withSignature(new MnsSignature(), $this->config),
        ]);
    }

    /**
     * Decode the XML document.
     */
    private function handleResponse(Promise $promise): Promise
    {
        return (new FulfilledPromise($promise))
            ->then(function (Promise $promise): Result {
                /** @var \Psr\Http\Message\ResponseInterface */
                $response = $promise->wait();
                $response = new Response($response);

                $result = (new Result($this->encoder->decode($response->body())))
                    ->setResponse($response->getPsrResponse());

                if ($response->isError()) {
                    throw QueueException::makeFromResult($result);
                }

                return $result;
            });
    }

    /**
     * Cast the result.
     *
     * @param  class-string<\Dew\Acs\MnsOpen\Results\MnsResult>  $resultClass
     * @return \Closure(\Dew\Acs\Result<array<mixed>>): \Dew\Acs\MnsOpen\Results\MnsResult
     */
    private function castInto(string $resultClass): callable
    {
        return fn (Result $result): MnsResult => new $resultClass($result);
    }

    /**
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments = []): mixed
    {
        if (method_exists($this, $method.'Async')) {
            return $this->execute($method, $arguments);
        }

        throw new \RuntimeException(sprintf('Call to undefined method %s::%s()', self::class, $method));
    }
}
