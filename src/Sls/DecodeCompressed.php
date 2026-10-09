<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;

final readonly class DecodeCompressed implements Plugin
{
    public function __construct(
        private CompressionFactory $compressionFactory,
        private StreamFactoryInterface $streamFactory
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
        return $next($request)->then(
            function (ResponseInterface $response): ResponseInterface {
                if (! $response->hasHeader('x-log-compresstype')) {
                    return $response;
                }

                $compression = $this->compressionFactory->make(
                    $response->getHeaderLine('x-log-compresstype')
                );

                if (! $compression::supports()) {
                    throw new \RuntimeException(
                        "Missing runtime support for {$compression::format()} data compression."
                    );
                }

                $decoded = $compression->decode(
                    (string) $response->getBody(),
                    (int) $response->getHeaderLine('x-log-bodyrawsize')
                );

                return $response->withBody(
                    $this->streamFactory->createStream($decoded)
                );
            }
        );
    }
}
