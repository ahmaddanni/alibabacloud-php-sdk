<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Signatures;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;
use Dew\Acs\Signatures\V3Signature;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(V3Signature::class)]
final class V3SignatureTest extends TestCase
{
    public function test_action_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame('Test', $request->getHeaderLine('x-acs-action'));
    }

    public function test_version_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame('2024-01-01', $request->getHeaderLine('x-acs-version'));
    }

    public function test_nonce_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertNotEmpty($request->getHeaderLine('x-acs-signature-nonce'));
    }

    public function test_date_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertNotEmpty($request->getHeaderLine('x-acs-date'));
    }

    #[TestWith([''])]
    #[TestWith(['abc'])]
    public function test_content_sha256_header(string $body): void
    {
        $request = new Request('GET', '/', [], $body);
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame(hash('sha256', $body), $request->getHeaderLine('x-acs-content-sha256'));
    }

    public function test_security_token(): void
    {
        $config = array_merge_recursive($this->makeConfig(), ['credentials' => ['token' => 'mytoken']]);
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $request = new Request('GET', '/', [], '');
        $request = $signer->signRequest($request, $config);
        $this->assertSame('mykey', $request->getHeaderLine('x-acs-accesskey-id'));
        $this->assertSame('mytoken', $request->getHeaderLine('x-acs-security-token'));
    }

    public function test_sign_request(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertStringStartsWith('ACS3-HMAC-SHA256', $request->getHeaderLine('Authorization'));
        $this->assertArrayNotHasKey('x-acs-accesskey-id', $request->getHeaders());
    }

    /**
     * @param  array<string, string>  $headers
     * @param  array<string, string>  $expected
     */
    #[TestWith([['x-foo' => ''], ['x-foo']])]
    #[TestWith([['x-foo' => '', 'x-bar' => ''], ['x-bar', 'x-foo']])]
    #[TestWith([['X-FOO' => '', 'X-BAR' => ''], ['x-bar', 'x-foo']])]
    #[TestWith([['x-FoO' => '', 'x-baR' => ''], ['x-bar', 'x-foo']])]
    #[TestWith([[], []])]
    public function test_signed_headers(array $headers, array $expected): void
    {
        $request = new Request('GET', '/', $headers, '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $this->assertSame($expected, $signer->getSignedHeaders($request));
    }

    /**
     * @param  array<string, string>  $headers
     */
    #[TestWith([['x-foo' => '1', 'x-bar' => '2'], "x-bar:2\nx-foo:1\n"])]
    #[TestWith([['X-FOO' => '1', 'X-BAR' => '2'], "x-bar:2\nx-foo:1\n"])]
    #[TestWith([['x-FoO' => '1', 'x-bAr' => '2'], "x-bar:2\nx-foo:1\n"])]
    #[TestWith([[], ''])]
    public function test_canonical_headers(array $headers, string $expected): void
    {
        $request = new Request('GET', '/', $headers, '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $this->assertSame($expected, $signer->getCanonicalHeaders($request));
    }

    #[TestWith(['/', ''])]
    #[TestWith(['/?', ''])]
    #[TestWith(['/?foo', 'foo='])]
    #[TestWith(['/?foo=bar', 'foo=bar'])]
    #[TestWith(['/?f:o=b;r', 'f%3Ao=b%3Br'])]
    #[TestWith(['/?foo&bar', 'bar=&foo='])]
    #[TestWith(['/?foo=1&bar=2', 'bar=2&foo=1'])]
    #[TestWith(['/?foo=1&|ar=2', 'foo=1&%7Car=2'])]
    public function test_canonical_query_string(string $query, string $expected): void
    {
        $request = new Request('GET', $query, [], '');
        $signer = new V3Signature();
        $signer->setApiContext($this->makeApiDocs(), $this->makeApi());
        $this->assertSame($expected, $signer->getCanonicalQueryString($request));
    }

    private function makeApiDocs(): ApiDocs
    {
        return ApiDocs::make([
            'info' => [
                'style' => 'RPC',
                'version' => '2024-01-01',
                'product' => 'test',
            ],
            'directories' => [],
            'apis' => [],
            'components' => [],
            'endpoints' => [],
        ]);
    }

    private function makeApi(): Api
    {
        return Api::make([
            'methods' => ['get'],
            'schemes' => ['https'],
            'security' => [['AK' => []]],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [],
        ])->setName('Test');
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
