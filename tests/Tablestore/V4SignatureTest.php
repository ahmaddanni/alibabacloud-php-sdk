<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\V4Signature;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(V4Signature::class)]
final class V4SignatureTest extends TestCase
{
    public function test_sign_request_sign_region_header(): void
    {
        $request = new Request('POST', '/Test');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ]);
        $this->assertSame('cn-somewhere', $request->getHeaderLine('x-ots-signregion'));
    }

    public function test_sign_request_sign_date_header(): void
    {
        $now = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));
        $request = new Request('POST', '/Test');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ]);
        $this->assertSame($now->format('Ymd'), $request->getHeaderLine('x-ots-signdate'));
    }

    public function test_sign_request_signature_header(): void
    {
        $request = new Request('POST', '/Test');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ]);
        $this->assertNotEmpty($request->getHeaderLine('x-ots-signaturev4'));
    }

    public function test_get_signing_key(): void
    {
        $datetime = new \DateTimeImmutable('2024-01-01', new \DateTimeZone('UTC'));
        $signer = new V4Signature();
        $key = $signer->getSigngingKey([
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ], $datetime);
        $expected = hash_hmac('sha256', '20240101', 'aliyun_v4mysecret', binary: true);
        $expected = hash_hmac('sha256', 'cn-somewhere', $expected, binary: true);
        $expected = hash_hmac('sha256', 'ots', $expected, binary: true);
        $expected = hash_hmac('sha256', 'aliyun_v4_request', $expected, binary: true);
        $this->assertSame(base64_encode($expected), $key);
    }

    /**
     * @param  array<string, string>  $headers
     */
    #[TestWith(['', ['x-foo' => 'bar']])]
    #[TestWith(['', ['x-acs-foo' => 'bar']])]
    #[TestWith(["x-ots-foo:bar", ['x-ots-foo' => 'bar']])]
    #[TestWith(["x-ots-abc:one\nx-ots-def:two", ['x-ots-abc' => 'one', 'x-ots-def' => 'two']])]
    #[TestWith(["x-ots-abc:one\nx-ots-def:two", ['x-ots-def' => 'two', 'x-ots-abc' => 'one']])]
    public function test_get_canonical_headers(string $expected, array $headers): void
    {
        $request = new Request('POST', '/Test', $headers);
        $signer = new V4Signature();
        $this->assertSame($expected, $signer->getCanonicalHeaders($request));
    }
}
