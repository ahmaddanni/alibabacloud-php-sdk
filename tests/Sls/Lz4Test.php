<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\Lz4;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\RequiresPhpExtension;
use PHPUnit\Framework\TestCase;

#[CoversClass(Lz4::class)]
#[RequiresPhpExtension('lz4')]
final class Lz4Test extends TestCase
{
    public function test_encode_and_decode(): void
    {
        $lz4 = new Lz4();
        $data = str_repeat('a', $len = 64);
        $encoded = $lz4->encode($data);
        $this->assertTrue(strlen($encoded) < $len);
        $this->assertTrue($encoded !== $data);
        $decoded = $lz4->decode($encoded, $len);
        $this->assertTrue($decoded === $data);
    }

    public function test_decode_without_original_data_size(): void
    {
        $lz4 = new Lz4();
        $data = str_repeat('a', 64);
        $this->assertSame($data, $lz4->decode($lz4->encode($data)));
    }
}
