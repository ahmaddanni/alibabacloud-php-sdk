<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\Cells\Attribute as AttributeContract;
use Dew\Acs\Tablestore\Cells\Cell;
use Dew\Acs\Tablestore\Cells\HasValue;
use Dew\Acs\Tablestore\Cells\PrimaryKey as PrimaryKeyContract;
use Dew\Acs\Tablestore\PlainBufferDecoder;
use Dew\Acs\Tablestore\PlainBufferEncoder;
use Dew\Acs\Tablestore\PlainBufferException;
use Dew\Acs\Tablestore\PlainBufferReader;
use Dew\Acs\Tablestore\PlainBufferWriter;
use Dew\Acs\Tablestore\PrimaryKey;
use Dew\Acs\Tests\Tablestore\Fixtures\StubCrc;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(PlainBufferEncoder::class)]
#[CoversClass(PlainBufferWriter::class)]
final class PlainBufferEncoderDecoderTest extends TestCase
{
    public function test_header_tag(): void
    {
        $this->expectException(PlainBufferException::class);
        $this->expectExceptionMessage('It does not appear to be a PlainBuffer.');
        $buffer = (new PlainBufferWriter())->writeLittleEndian32(0);
        $decoder = new PlainBufferDecoder(new PlainBufferReader($buffer->getBuffer()), new StubCrc());
        $decoder->toArray();
    }

    #[DataProvider('provide_primary_keys')]
    public function test_encode_and_decode_primary_key(Cell&HasValue $pk): void
    {
        $encoder = new PlainBufferEncoder(new PlainBufferWriter(), new StubCrc());
        $encoder->writeHeader()->addPk([$pk]);
        $decoder = new PlainBufferDecoder(new PlainBufferReader($encoder->getBuffer()), new StubCrc());
        $result = $decoder->toArray();
        $this->assertCount(1, $result);
        $this->assertArrayHasKey($pk->name(), $result);
        $this->assertInstanceOf($pk::class, $result[$pk->name()]);
        $this->assertInstanceOf(Cell::class, $result[$pk->name()]);
        $this->assertInstanceOf(HasValue::class, $result[$pk->name()]);
        $this->assertInstanceOf(PrimaryKeyContract::class, $result[$pk->name()]);
        $this->assertSame($pk->name(), $result[$pk->name()]->name());
        $this->assertSame($pk->value(), $result[$pk->name()]->value());
        $this->assertSame($pk->type(), $result[$pk->name()]->type());
    }

    #[DataProvider('provide_attributes')]
    public function test_encode_and_decode_attribute(Cell&HasValue $attribute): void
    {
        $encoder = new PlainBufferEncoder(new PlainBufferWriter(), new StubCrc());
        $encoder->writeHeader()->addAttr([$attribute]);
        $decoder = new PlainBufferDecoder(new PlainBufferReader($encoder->getBuffer()), new StubCrc());
        $result = $decoder->toArray();
        $this->assertCount(1, $result);
        $this->assertArrayHasKey($attribute->name(), $result);
        $this->assertCount(1, $result[$attribute->name()]);
        $this->assertInstanceOf($attribute::class, $result[$attribute->name()][0]);
        $this->assertInstanceOf(Cell::class, $result[$attribute->name()][0]);
        $this->assertInstanceOf(HasValue::class, $result[$attribute->name()][0]);
        $this->assertInstanceOf(AttributeContract::class, $result[$attribute->name()][0]);
        $this->assertSame($attribute->name(), $result[$attribute->name()][0]->name());
        $this->assertSame($attribute->value(), $result[$attribute->name()][0]->value());
        $this->assertSame($attribute->type(), $result[$attribute->name()][0]->type());
    }

    public function test_add_row(): void
    {
        $encoder = new PlainBufferEncoder(new PlainBufferWriter(), new StubCrc());
        $encoder->writeHeader()->addRow([
            PrimaryKey::string('key', 'foo'),
            Attribute::string('value', 'bar'),
        ]);
        $decoder = new PlainBufferDecoder(new PlainBufferReader($encoder->getBuffer()), new StubCrc());
        $result = $decoder->toArray();
        $this->assertArrayHasKey('key', $result);
        $this->assertInstanceOf(PrimaryKeyContract::class, $result['key']);
        $this->assertArrayHasKey('value', $result);
        $this->assertInstanceOf(AttributeContract::class, $result['value'][0]);
    }

    public function test_attribute_with_timestamp(): void
    {
        $encoder = new PlainBufferEncoder(new PlainBufferWriter(), new StubCrc());
        $encoder->writeHeader()->addAttr([Attribute::string('value', 'foo')->setTimestamp(1000)]);
        $decoder = new PlainBufferDecoder(new PlainBufferReader($encoder->getBuffer()), new StubCrc());
        $result = $decoder->toArray();
        $this->assertCount(1, $result);
        $this->assertArrayHasKey('value', $result);
        $this->assertCount(1, $result['value']);
        $this->assertSame(1000, $result['value'][0]->getTimestamp());
    }

    public function test_dump(): void
    {
        $this->expectOutputString('     0 : 75 00 00 00                                     [u...]'.PHP_EOL);
        $encoder = new PlainBufferEncoder(new PlainBufferWriter(), new StubCrc());
        $encoder->writeHeader();
        $encoder->dump();
    }

    /**
     * @return \Generator<string, \Dew\Acs\Tablestore\Cells\Cell[]>
     */
    public static function provide_primary_keys(): \Generator
    {
        yield 'integer' => [PrimaryKey::integer('key', 10)];
        yield 'string' => [PrimaryKey::string('key', 'foo')];
        yield 'binary' => [PrimaryKey::binary('key', 'foo')];
    }

    /**
     * @return \Generator<string, \Dew\Acs\Tablestore\Cells\Cell[]>
     */
    public static function provide_attributes(): \Generator
    {
        yield 'integer' => [Attribute::integer('value', 10)];
        yield 'double' => [Attribute::double('value', 3.14)];
        yield 'boolean' => [Attribute::boolean('boolean', true)];
        yield 'string' => [Attribute::string('value', 'foo')];
        yield 'binary' => [Attribute::binary('value', 'foo')];
    }
}
