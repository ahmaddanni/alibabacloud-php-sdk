<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\CompressionFactory;
use Dew\Acs\Sls\DecodeCompressed;
use Dew\Acs\Tests\Sls\Fixtures\StubSupportedCompression;
use Dew\Acs\Tests\Sls\Fixtures\StubUnsupportedCompression;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery as m;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Request;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

#[CoversClass(DecodeCompressed::class)]
final class DecodeCompressedTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public function test_compressed_contents_can_be_decoded(): void
    {
        $mockedFactory = m::mock(CompressionFactory::class);
        $mockedFactory->shouldReceive('make')->with('foo')->once()->andReturn(new StubSupportedCompression());
        $request = new Request('GET', 'https://example.com', []);
        $response = new Response(200, ['x-log-compresstype' => 'foo', 'x-log-bodyrawsize' => 256]);
        $plugin = new DecodeCompressed($mockedFactory, new Psr17Factory());
        /** @var \Psr\Http\Message\ResponseInterface */
        $decoded = $plugin->handleRequest(
            $request,
            fn (RequestInterface $request): Promise => new FulfilledPromise($response),
            fn (RequestInterface $request): Promise => new FulfilledPromise($response)
        )->wait();
        $this->assertSame('', (string) $decoded->getBody());
    }

    public function test_unsupported_compression(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Missing runtime support for stub data compression.');
        $mockedFactory = m::mock(CompressionFactory::class);
        $mockedFactory->shouldReceive('make')->with('foo')->once()->andReturn(new StubUnsupportedCompression());
        $request = new Request('GET', 'https://example.com', []);
        $response = new Response(200, ['x-log-compresstype' => 'foo', 'x-log-bodyrawsize' => 256]);
        $plugin = new DecodeCompressed($mockedFactory, new Psr17Factory());
        $plugin->handleRequest(
            $request,
            fn (RequestInterface $request): Promise => new FulfilledPromise($response),
            fn (RequestInterface $request): Promise => new FulfilledPromise($response)
        )->wait();
    }

    public function test_missing_compress_type_header(): void
    {
        $mockedFactory = m::mock(CompressionFactory::class);
        $request = new Request('GET', 'https://example.com', []);
        $response = new Response();
        $plugin = new DecodeCompressed($mockedFactory, new Psr17Factory());
        $plugin->handleRequest(
            $request,
            fn (RequestInterface $request): Promise => new FulfilledPromise($response),
            fn (RequestInterface $request): Promise => new FulfilledPromise($response)
        )->wait();
        $mockedFactory->shouldNotHaveReceived('make');
    }
}
