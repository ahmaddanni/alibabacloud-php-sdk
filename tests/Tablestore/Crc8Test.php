<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Crc8;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Crc8::class)]
final class Crc8Test extends TestCase
{
    public function test_memorization_table_size(): void
    {
        $this->assertCount(256, Crc8::TABLE);
    }

    #[DataProvider('provide_crc8_ccitt')]
    public function test_memorization_table(int $x, int $expected): void
    {
        $this->assertSame($expected, Crc8::TABLE[$x]);
    }

    public function test_checksum_char(): void
    {
        $crc = new Crc8();

        // The algorithm behind the hood performs exclusive OR against the two
        // inputs. The result is the offset of the memoization table. If we
        // pass 0 as one of the values, the result is the other argument.
        $this->assertSame(Crc8::TABLE[0], $crc->char(0, 0));
        $this->assertSame(Crc8::TABLE[1], $crc->char(1, 0));
        $this->assertSame(Crc8::TABLE[2], $crc->char(2, 0));

        // For example, we break it down with two arguments, 1 and 7 ...
        //
        //   1(10)  =  0000 0001 (2)
        //   7(10)  =  0000 0111 (2)
        // ----------------------------
        //   XOR    =  0000 0110 (2)
        //          =          6 (10)
        //
        // The XOR calculation result is 6 and is offset number of the memoization
        // table. We make an expectation here that the result is the same as we
        // expected. To prevent overflowing, mask `0xFF` is appled to offset.
        $this->assertSame(Crc8::TABLE[6], $crc->char(1, 7));
    }

    public function test_checksum_string(): void
    {
        $crc = new Crc8();
        // ASCII table
        // ...
        // a: 97
        // b: 98
        // c: 99
        // ...
        $checksum = $crc->char(97, 0);
        $checksum = $crc->char(98, $checksum);
        $checksum = $crc->char(99, $checksum);
        $this->assertSame($checksum, $crc->string('abc', 0));
    }

    public function test_checksum_int32(): void
    {
        $crc = new Crc8();
        $value = 0b1001_0011_1100_0101_1010_1111_0000_0101;
        $checksum = $crc->char(0b0000_0101, 0);
        $checksum = $crc->char(0b1010_1111, $checksum);
        $checksum = $crc->char(0b1100_0101, $checksum);
        $checksum = $crc->char(0b1001_0011, $checksum);
        $this->assertSame($checksum, $crc->int32($value, 0));
    }

    public function test_checksum_int64(): void
    {
        $crc = new Crc8();
        $value = 0b0011_1100_1001_0110_1111_0000_0101_1010_1010_0101_0000_1111_0110_1001_1100_0011;
        $checksum = $crc->int32(0b1010_0101_0000_1111_0110_1001_1100_0011, 0);         // low
        $checksum = $crc->int32(0b0011_1100_1001_0110_1111_0000_0101_1010, $checksum); // high
        $this->assertSame($checksum, $crc->int64($value, 0));
    }

    public function test_checksum_double(): void
    {
        $crc = new Crc8();
        $value = 3.14;
        $checksum = $crc->string(pack('d', $value), 0);
        $this->assertSame($checksum, $crc->double($value, 0));
    }

    /**
     * @return \Generator<string, array{0: int, 1: int}>
     */
    public static function provide_crc8_ccitt(): \Generator
    {
        for ($i = 0; $i < 256; $i++) {
            yield 'x = '.$i => [$i, static::crc8($i)];
        }
    }

    private static function crc8(int $uint8): int
    {
        // The polynomial x^8 + x^2 + x + 1 in binary representation.
        // Let's simply substitute x = 10 and evaluate ...
        //
        //   10^8 + 10^2 + 10 + 1
        // = 1_0000_0000 + 100 + 10 + 1
        // = 1_0000_0111
        //   ~~~~~~~~~~~
        //   Overflow cause of value stored in unsigned integer with 8 bit.
        //
        // The final value of the polynomial after stripping the overflowed digit
        // becomes 0000_0111 which is a decimal number 111 and we could see it
        // in binary form that the value is 7. So how about set it in hex :)
        $polynomial = 0x07;

        // The mask represents a value of 128.
        $mask = 0x80;

        for ($i = 0; $i < 8; $i++) {
            $uint8 = ($uint8 << 1) ^ ($uint8 & $mask ? $polynomial : 0);
        }

        return $uint8 & 0xFF;
    }
}
