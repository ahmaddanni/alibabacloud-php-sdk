<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\V1Signature;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(V1Signature::class)]
final class V1SignatureTest extends TestCase
{
    public function test_sign_request(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V1Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertStringStartsWith('LOG ', $request->getHeaderLine('Authorization'));
    }

    public function test_signaturemethod_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V1Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame('hmac-sha1', $request->getHeaderLine('x-log-signaturemethod'));
    }

    public function test_apiversion_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V1Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame('0.6.0', $request->getHeaderLine('x-log-apiversion'));
    }

    public function test_date_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V1Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertNotEmpty($request->getHeaderLine('Date'));
    }

    public function test_content_md5_header(): void
    {
        $request = new Request('GET', '/', [], 'abc');
        $signer = new V1Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame(strtoupper(hash('md5', 'abc')), $request->getHeaderLine('content-md5'));
    }

    public function test_content_md5_header_empty_body(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V1Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertEmpty($request->getHeaderLine('content-md5'));
    }

    /**
     * @param  array<string, string>  $headers
     */
    #[TestWith([['x-acs-foo' => 'bar'], 'x-acs-foo:bar'])]
    #[TestWith([['x-log-foo' => 'bar'], 'x-log-foo:bar'])]
    #[TestWith([['x-foo' => 'bar'], ''])]
    #[TestWith([['host' => 'example.com'], ''])]
    #[TestWith([['content-type' => 'application/json'], ''])]
    #[TestWith([['content-md5' => 'md5'], ''])]
    #[TestWith([[], ''])]
    #[TestWith([['x-log-foo' => 'bar', 'x-acs-foo' => 'bar'], "x-acs-foo:bar\nx-log-foo:bar"])]
    public function test_get_acs_headers(array $headers, string $expected): void
    {
        $request = new Request('GET', '/', $headers, '');
        $signer = new V1Signature();
        $this->assertSame($expected, $signer->getAcsHeaders($request));
    }

    #[TestWith(['/', ''])]
    #[TestWith(['/?foo', 'foo='])]
    #[TestWith(['/?foo=bar', 'foo=bar'])]
    #[TestWith(['/?FoO=BaR', 'FoO=BaR'])]
    #[TestWith(['/?Fo*=B@R', 'Fo*=B@R'])]
    public function test_get_sorted_query(string $uri, string $expected): void
    {
        $request = new Request('GET', $uri, [], '');
        $signer = new V1Signature();
        $this->assertSame($expected, $signer->getSortedQuery($request));
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
        ];
    }
}
