<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Oss;

use Dew\Acs\Oss\V4SignatureOnUrl;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\AcsClient
 */
#[CoversClass(V4SignatureOnUrl::class)]
final class V4SignatureOnUrlTest extends TestCase
{
    public function test_sign_request(): void
    {
        $request = new Request('GET', 'https://example.com');
        $signer = new V4SignatureOnUrl();
        $signer->setArguments(['bucket' => 'test', 'key' => 'hello.jpg', 'expires' => 900]);
        $request = $signer->signRequest($request, $this->makeConfig());
        $uri = (string) $request->getUri();
        $this->assertStringStartsWith('https://example.com', $uri);
        $this->assertStringContainsString('x-oss-signature-version=OSS4-HMAC-SHA256', $uri);
        $this->assertStringContainsString('x-oss-credential=mykey', $uri);
        $this->assertStringContainsString('x-oss-date=', $uri);
        $this->assertStringContainsString('x-oss-expires=900', $uri);
        $this->assertStringContainsString('x-oss-additional-headers=host', $uri);
        $this->assertStringContainsString('x-oss-signature=', $uri);
        $this->assertStringNotContainsString('x-oss-security-token=', $uri);
    }

    public function test_sign_request_expires(): void
    {
        $request = new Request('GET', 'https://example.com');
        $signer = new V4SignatureOnUrl();
        $signer->setArguments(['bucket' => 'test', 'key' => 'hello.jpg', 'expires' => 600]);
        $request = $signer->signRequest($request, $this->makeConfig());
        $uri = (string) $request->getUri();
        $this->assertStringContainsString('x-oss-expires=600', $uri);
    }

    public function test_sign_request_token(): void
    {
        $request = new Request('GET', 'https://example.com');
        $signer = new V4SignatureOnUrl();
        $signer->setArguments(['bucket' => 'test', 'key' => 'hello.jpg', 'expires' => 900]);
        $request = $signer->signRequest($request, $this->makeConfig([
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
                'token' => 'mytoken',
            ],
        ]));
        $uri = (string) $request->getUri();
        $this->assertStringContainsString('x-oss-security-token=mytoken', $uri);
    }

    #[TestWith(['https://example.com?foo', 'foo'])]
    #[TestWith(['https://example.com?foo=', 'foo'])]
    #[TestWith(['https://example.com?foo=bar', 'foo=bar'])]
    public function test_sign_request_existing_query(string $uri, string $expected): void
    {
        $request = new Request('GET', $uri);
        $signer = new V4SignatureOnUrl();
        $signer->setArguments(['bucket' => 'test', 'key' => 'hello.jpg', 'expires' => 900]);
        $request = $signer->signRequest($request, $this->makeConfig());
        $uri = (string) $request->getUri();
        $this->assertStringContainsString($expected, $uri);
    }

    /**
     * @param  array<string, mixed>  $config
     * @return array<string, mixed>
     */
    private function makeConfig(array $config = []): array
    {
        return [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            ...$config,
        ];
    }
}
