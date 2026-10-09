<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Signatures\NullSignature;
use Dew\Acs\Tablestore\SignRequest;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\Tablestore\TablestoreInstance
 */
#[CoversClass(SignRequest::class)]
final class SignRequestTest extends TestCase
{
    public function test_access_key_id_header(): void
    {
        $request = $this->signRequest(new Request('POST', '/Test'));
        $this->assertSame('mykey', $request->getHeaderLine('x-ots-accesskeyid'));
    }

    public function test_api_version_header(): void
    {
        $request = $this->signRequest(new Request('POST', '/Test'));
        $this->assertSame('2015-12-31', $request->getHeaderLine('x-ots-apiversion'));
    }

    public function test_content_md5_header(): void
    {
        $request = $this->signRequest(new Request('POST', '/Test'));
        $this->assertNotEmpty($request->getHeaderLine('x-ots-contentmd5'));
    }

    public function test_date_header(): void
    {
        $request = $this->signRequest(new Request('POST', '/Test'));
        $this->assertNotEmpty($request->getHeaderLine('x-ots-date'));
    }

    public function test_token_header(): void
    {
        $request = $this->signRequest(new Request('POST', '/Test'));
        $this->assertEmpty($request->getHeaderLine('x-ots-ststoken'));
        $request = $this->signRequest(
            new Request('POST', '/Test'),
            ['credentials' => ['key' => 'mykey', 'secret' => 'mysecret', 'token' => 'mytoken']
        ]);
        $this->assertSame('mytoken', $request->getHeaderLine('x-ots-ststoken'));
    }

    /**
     * @param  TConfig|array<string, mixed>  $config
     */
    private function signRequest(RequestInterface $request, array $config = []): RequestInterface
    {
        /** @var TConfig */
        $config = [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'instance' => 'myinstance',
            'endpoint' => 'myinstance.cn-somewhere.aliyuncs.com',
            ...$config
        ];

        $plugin = new SignRequest($config, new NullSignature());

        /** @var \Psr\Http\Message\RequestInterface */
        return $plugin->handleRequest(
            $request,
            fn (RequestInterface $request): Promise => new FulfilledPromise($request),
            fn (RequestInterface $request): Promise => new FulfilledPromise($request),
        )->wait();
    }
}
