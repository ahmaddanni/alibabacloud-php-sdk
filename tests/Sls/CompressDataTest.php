<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\CompressData;
use Dew\Acs\Sls\Compression;
use Dew\Acs\Tests\Sls\Fixtures\StubSupportedCompression;
use Http\Discovery\Psr17Factory;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Mockery as m;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

#[CoversClass(CompressData::class)]
final class CompressDataTest extends TestCase
{
    public function test_data_compression(): void
    {
        $plugin = new CompressData(new Psr17Factory(), new StubSupportedCompression());
        $request = new Request('POST', '/', [], 'abcxyz');
        /** @var \Psr\Http\Message\RequestInterface */
        $request = $plugin->handleRequest(
            $request,
            fn (RequestInterface $request): Promise => new FulfilledPromise($request),
            fn (RequestInterface $request): Promise => new FulfilledPromise($request),
        )->wait();
        $this->assertSame('6', $request->getHeaderLine('x-log-bodyrawsize'));
        $this->assertSame('stub', $request->getHeaderLine('x-log-compresstype'));
        $this->assertSame('abcxy', (string) $request->getBody());
    }

    #[TestWith(['abcd'])]
    #[TestWith(['abc'])]
    public function test_drops_compressed_data_if_larger_than_the_original(string $compressed): void
    {
        $mock = m::mock(Compression::class);
        $mock->shouldReceive('encode')->once()->andReturn($compressed);
        $plugin = new CompressData(new Psr17Factory(), $mock);
        $request = new Request('POST', '/', [], 'abc');
        /** @var \Psr\Http\Message\RequestInterface */
        $request = $plugin->handleRequest(
            $request,
            fn (RequestInterface $request): Promise => new FulfilledPromise($request),
            fn (RequestInterface $request): Promise => new FulfilledPromise($request),
        )->wait();
        $this->assertFalse($request->hasHeader('x-log-compress-type'));
    }
}
