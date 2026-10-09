<?php

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\PlainBufferException;
use Dew\Acs\Tablestore\PlainBufferReader;
use Dew\Acs\Tablestore\PlainBufferWriter;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(PlainBufferReader::class)]
#[CoversClass(PlainBufferWriter::class)]
final class PlainBufferTest extends TestCase
{
    public function test_read_and_write_int32(): void
    {
        $writer = new PlainBufferWriter();
        $writer->writeLittleEndian32(10);
        $reader = new PlainBufferReader($writer->getBuffer());
        $this->assertSame(10, $reader->readLittleEndian32());
        $this->assertSame(pack('V', 10), $reader->getBuffer());
    }

    public function test_read_and_write_int64(): void
    {
        $value = PHP_INT_MAX;
        $writer = new PlainBufferWriter();
        $writer->writeLittleEndian64($value);
        $reader = new PlainBufferReader($writer->getBuffer());
        $this->assertSame($value, $reader->readLittleEndian64());
        $buffer = '';
        $buffer .= pack('V', $value & 0xFFFFFFFF);         // low
        $buffer .= pack('V', ($value >> 32) & 0xFFFFFFFF); // high
        $this->assertSame($buffer, $reader->getBuffer());
    }

    public function test_read_and_write_double(): void
    {
        $writer = new PlainBufferWriter();
        $writer->writeDouble(3.14);
        $reader = new PlainBufferReader($writer->getBuffer());
        $this->assertSame(3.14, $reader->readDouble());
        $this->assertSame(pack('d', 3.14), $reader->getBuffer());
    }

    public function test_read_and_write_char(): void
    {
        $writer = new PlainBufferWriter();
        $writer->writeChar($a = 97);
        $reader = new PlainBufferReader($writer->getBuffer());
        $this->assertSame($a, $reader->readChar());
        $this->assertSame('a', $reader->getBuffer());
    }

    public function test_read_and_write(): void
    {
        $writer = new PlainBufferWriter();
        $writer->write('abc');
        $reader = new PlainBufferReader($writer->getBuffer());
        $this->assertSame('abc', $reader->read(3));
    }

    public function test_size(): void
    {
        $writer = new PlainBufferWriter();
        $writer->write('abc');
        $reader = new PlainBufferReader($writer->getBuffer());
        $this->assertSame(3, $writer->size());
        $this->assertSame(3, $reader->size());
    }

    public function test_get_buffer(): void
    {
        $writer = new PlainBufferWriter();
        $writer->write('abc');
        $reader = new PlainBufferReader($writer->getBuffer());
        $this->assertSame('abc', $reader->getBuffer());
    }

    public function test_reader_eof(): void
    {
        $reader = new PlainBufferReader('abc');
        $reader->read(1);
        $this->assertFalse($reader->eof());
        $reader->read(1);
        $this->assertFalse($reader->eof());
        $reader->read(1);
        $this->assertTrue($reader->eof());
    }

    public function test_reader_buffer_overflow(): void
    {
        $reader = new PlainBufferReader('abc');
        $reader->read(3);
        $this->expectException(PlainBufferException::class);
        $this->expectExceptionMessage('Buffer overflow.');
        $reader->read(1);
    }
}
