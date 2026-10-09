<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Signatures;

use Dew\Acs\Signatures\V4Signature;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(V4Signature::class)]
final class V4SignatureTest extends TestCase
{
    public function test_sign_request(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $request = $signer->signRequest($request, [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ]);
        $authorization = $request->getHeaderLine('Authorization');
        $this->assertStringStartsWith('TEST4-HMAC-SHA256', $authorization);
        $this->assertStringNotContainsString(',AdditionalHeaders=', $authorization);
    }

    public function test_sign_request_additional_headers(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $signer->includeAdditionalHeaders();
        $request = $signer->signRequest($request, [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ]);
        $this->assertStringContainsString(',AdditionalHeaders=', $request->getHeaderLine('Authorization'));
    }

    #[TestWith(['/?abc&def', 'abc&def'])]
    #[TestWith(['/?def&abc', 'abc&def'])]
    #[TestWith(['/?abc=1&def=2', 'abc=1&def=2'])]
    #[TestWith(['/?abc=2&def=1', 'abc=2&def=1'])]
    #[TestWith(['/?def=2&abc=1', 'abc=1&def=2'])]
    #[TestWith(['/?def=1&abc=2', 'abc=2&def=1'])]
    public function test_build_canonical_query_string_key_sorted(string $uri, string $expected): void
    {
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $request = new Request('GET', $uri, [], '');
        $this->assertSame($expected, $signer->buildCanonicalQueryString($request));
    }

    #[TestWith(['/?a-bc', 'a-bc'])]
    #[TestWith(['/?a_bc', 'a_bc'])]
    #[TestWith(['/?a~bc', 'a~bc'])]
    #[TestWith(['/?*abc', '%2Aabc'])]
    #[TestWith(['/?abc=d-ef', 'abc=d-ef'])]
    #[TestWith(['/?abc=d_ef', 'abc=d_ef'])]
    #[TestWith(['/?abc=d.ef', 'abc=d.ef'])]
    #[TestWith(['/?abc=d~ef', 'abc=d~ef'])]
    #[TestWith(['/?abc=*def', 'abc=%2Adef'])]
    public function test_build_canonical_query_string_encoding(string $uri, string $expected): void
    {
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $request = new Request('GET', $uri, [], '');
        $this->assertSame($expected, $signer->buildCanonicalQueryString($request));
    }

    public function test_build_canonical_query_string_sort_after_encoding(): void
    {
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $request = new Request('GET', '/?2=50&@=64', [], '');
        $this->assertSame('%40=64&2=50', $signer->buildCanonicalQueryString($request));
    }

    public function test_build_canonical_headers(): void
    {
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $request = new Request('GET', '/', [
            'x-foo' => 'bar',
            'x-LoWeRcAsE' => 'true',
            'x-abc' => 'def',
            'x-trim' => ' a long text ',
        ], '');
        $this->assertSame(<<<'EOD'
        x-abc:def
        x-foo:bar
        x-lowercase:true
        x-trim:a long text

        EOD, $signer->buildCanonicalHeaders($request));
    }

    /**
     * @param  array<int, string>  $signed
     * @param  string[]  $expected
     */
    #[TestWith([[], ['x-bar', 'x-baz', 'x-foo']])]
    #[TestWith([['content-type'], ['x-bar', 'x-baz', 'x-foo']])]
    #[TestWith([['x-foo'], ['x-bar', 'x-baz']])]
    #[TestWith([['x-FoO'], ['x-bar', 'x-baz']])]
    #[TestWith([['x-Foo'], ['x-bar', 'x-baz']])]
    #[TestWith([['x-ba*'], ['x-foo']])]
    public function test_build_additional_headers(array $signed, array $expected): void
    {
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $signer->signHeaders($signed);
        $request = new Request('GET', '/', ['x-FoO' => 'one', 'x-bar' => 'two', 'x-baz' => 'three'], '');
        $this->assertSame($expected, $signer->buildAdditionalHeaders($request));
    }

    /**
     * @param  array<int, string>  $signed
     * @param  string[]  $expected
     */
    #[TestWith([['x-foo'], ['x-foo']])]
    #[TestWith([['x-FoO'], ['x-foo']])]
    #[TestWith([['x-Foo'], ['x-foo']])]
    #[TestWith([['x-ba*'], ['x-bar', 'x-baz']])]
    #[TestWith([[], []])]
    #[TestWith([['content-type'], []])]
    public function test_build_signed_headers(array $signed, array $expected): void
    {
        $signer = new V4Signature('TEST4-HMAC-SHA256', 'test');
        $signer->signHeaders($signed);
        $request = new Request('GET', '/', ['x-FoO' => 'one', 'x-bar' => 'two', 'x-baz' => 'three'], '');
        $this->assertSame($expected, $signer->buildSignedHeaders($request));
    }
}
