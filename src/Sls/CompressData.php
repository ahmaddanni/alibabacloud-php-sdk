<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

final readonly class CompressData implements Plugin
{
    public function __construct(
        private StreamFactoryInterface $factory,
        private ?Compression $compression = null
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
        $size = $request->getBody()->getSize() ?? 0;

        $compression = $this->compressor($size);

        $encoded = $compression->encode((string) $request->getBody());

        // Let's discard the compressed data if it's larger than the
        // original, as sending it would waste computing resources
        // and network bandwidth.
        if (strlen($encoded) >= $size) {
            return $next($request);
        }

        return $next($request
            ->withHeader('x-log-bodyrawsize', (string) $size)
            ->withHeader('x-log-compresstype', $compression->format())
            ->withBody($this->factory->createStream($encoded)));
    }

    private function compressor(int $size = PHP_INT_MAX): Compression
    {
        return $this->compression ?? $this->discoverCompressor($size);
    }

    private function discoverCompressor(int $size = PHP_INT_MAX): Compression
    {
        return match (true) {
            Lz4::supports() && $size > Lz4::threshold() => new Lz4(),
            Zstd::supports() && $size > Zstd::threshold() => new Zstd(),
            Deflate::supports() && $size > Deflate::threshold() => new Deflate(),
            default => new Raw(),
        };
    }
}
