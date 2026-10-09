<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\MnsOpen;

use Dew\Acs\MnsOpen\MnsSignature;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(MnsSignature::class)]
final class MnsSignatureTest extends TestCase
{
    public function test_sign_request(): void
    {
        $signature = new MnsSignature();
        $request = new Request('GET', 'https://example.com');
        $request = $signature->signRequest($request, ['credentials' => ['key' => 'foo', 'secret' => 'bar']]);
        $this->assertSame(gmdate(\DateTimeInterface::RFC7231), $request->getHeaderLine('date'));
        $this->assertSame('2015-06-06', $request->getHeaderLine('x-mns-version'));
        $this->assertStringStartsWith('MNS foo:', $request->getHeaderLine('Authorization'));
    }

    public function test_canonicalized_headers_headers_are_sorted(): void
    {
        $signature = new MnsSignature();
        $request = new Request('GET', 'https://example.com', ['x-mns-foo' => '1', 'x-mns-bar' => '2']);
        $result = $signature->canonicalizedHeaders($request);
        $this->assertSame(<<<'EOF'
        x-mns-bar:2
        x-mns-foo:1
        EOF, $result);
    }

    public function test_canonicalized_headers_change_cases_before_sorting(): void
    {
        $signature = new MnsSignature();
        $request = new Request('GET', 'https://example.com', ['x-mns-Foo' => '1', 'x-mns-bar' => '2']);
        $result = $signature->canonicalizedHeaders($request);
        $this->assertSame(<<<'EOF'
        x-mns-bar:2
        x-mns-foo:1
        EOF, $result);
    }

    public function test_canonicalized_headers_only_include_mns_headers(): void
    {
        $signature = new MnsSignature();
        $request = new Request('GET', 'https://example.com', ['x-foo' => 'bar']);
        $result = $signature->canonicalizedHeaders($request);
        $this->assertSame(<<<'EOF'
        EOF, $result);
    }

    public function test_is_mns_header_determines_if_mns_custom_header(): void
    {
        $signature = new MnsSignature();
        $this->assertTrue($signature->isMnsHeader('x-mns-'));
        $this->assertFalse($signature->isMnsHeader('x-mns'));
        $this->assertFalse($signature->isMnsHeader('x-mns_'));
        $this->assertFalse($signature->isMnsHeader('x-acs'));
        $this->assertFalse($signature->isMnsHeader('x-foo'));
    }
}
