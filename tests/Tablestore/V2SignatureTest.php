<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\V2Signature;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(V2Signature::class)]
final class V2SignatureTest extends TestCase
{
    public function test_sign_request(): void
    {
        $request = new Request('POST', '/Test');
        $signer = new V2Signature();
        $request = $signer->signRequest($request, [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
        ]);
        $this->assertNotEmpty($request->getHeaderLine('x-ots-signature'));
    }

    /**
     * @param  array<string, string>  $headers
     */
    #[TestWith(['', ['x-foo' => 'bar']])]
    #[TestWith(['', ['x-acs-foo' => 'bar']])]
    #[TestWith(["x-ots-foo:bar\n", ['x-ots-foo' => 'bar']])]
    #[TestWith(["x-ots-abc:one\nx-ots-def:two\n", ['x-ots-abc' => 'one', 'x-ots-def' => 'two']])]
    #[TestWith(["x-ots-def:two\nx-ots-abc:one\n", ['x-ots-def' => 'two', 'x-ots-abc' => 'one']])]
    public function test_get_canonical_headers(string $expected, array $headers): void
    {
        $request = new Request('POST', '/Test', $headers);
        $signer = new V2Signature();
        $this->assertSame($expected, $signer->getCanonicalHeaders($request));
    }
}
