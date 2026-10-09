<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Oss;

use Dew\Acs\Oss\V4Signature;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(V4Signature::class)]
final class V4SignatureTest extends TestCase
{
    public function test_date_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertNotEmpty($request->getHeaderLine('x-oss-date'));
    }

    public function test_content_sha256_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame('UNSIGNED-PAYLOAD', $request->getHeaderLine('x-oss-content-sha256'));
    }

    public function test_sign_request_version(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertStringStartsWith('OSS4-HMAC-SHA256', $request->getHeaderLine('Authorization'));
    }

    public function test_sign_request_additional_headers(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertStringContainsString(',AdditionalHeaders=', $request->getHeaderLine('Authorization'));
    }

    /**
     * @param  array<string, string>  $headers
     * @param  string[]  $expected
     */
    #[TestWith([['content-md5' => ''], []])]
    #[TestWith([['content-type' => 'application/xml'], []])]
    #[TestWith([['x-oss-date' => '2024-01-01T00:00:00Z'], []])]
    #[TestWith([['x-foo' => 'bar'], ['x-foo']])]
    public function test_additional_headers(array $headers, array $expected): void
    {
        $request = new Request('GET', '/', $headers, '');
        $signer = new V4Signature();
        $this->assertSame($expected, $signer->buildAdditionalHeaders($request));
    }

    /**
     * @param  array<string, mixed>  $arguments
     */
    #[TestWith([[], '/'])]
    #[TestWith([['bucket' => 'mybucket'], '/mybucket/'])]
    #[TestWith([['bucket' => 'mybucket', 'key' => 'hello.txt'], '/mybucket/hello.txt'])]
    #[TestWith([['key' => 'hello.txt'], '/'])]
    public function test_canonical_uri(array $arguments, string $expected): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $signer->setArguments($arguments);
        $this->assertSame($expected, $signer->buildCanonicalUri($request));
    }

    /**
     * @return array<string, mixed>
     */
    private function makeConfig(): array
    {
        return [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ];
    }
}
