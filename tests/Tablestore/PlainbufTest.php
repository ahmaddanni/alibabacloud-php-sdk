<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Plainbuf;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Plainbuf::class)]
final class PlainbufTest extends TestCase
{
    public function test_decode_decodes_plainbuffer(): void
    {
        $encoder = Plainbuf::encoder();
        $this->assertSame([], Plainbuf::decode($encoder->getBuffer()));
    }
}
