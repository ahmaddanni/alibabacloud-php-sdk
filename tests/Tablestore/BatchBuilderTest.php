<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\BatchBuilder;
use Dew\Acs\Tablestore\Crc8;
use Dew\Acs\Tablestore\Messages\OperationType;
use Dew\Acs\Tablestore\PlainBufferEncoder;
use Dew\Acs\Tablestore\PlainBufferWriter;
use Dew\Acs\Tablestore\PrimaryKey;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(BatchBuilder::class)]
final class BatchBuilderTest extends TestCase
{
    public function test_get(): void
    {
        $key = PrimaryKey::string('key', 'foo');
        $builder = (new BatchBuilder())->setTable('testing');
        $builder->whereKey($key)->get();
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());
        $buffer->writeHeader()->addRow([$key]);
        $this->assertNull($builder->operation);
        $this->assertSame($buffer->getBuffer(), $builder->getBuffer());
        $this->assertTrue($builder->isRead());
    }

    public function test_get_ignores_attriutes(): void
    {
        $key = PrimaryKey::string('key', 'foo');
        $attr = Attribute::string('attr', 'bar');
        $builder = (new BatchBuilder())->setTable('testing');
        $builder->whereKey($key)->whereColumn($attr)->get();
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());
        $buffer->writeHeader()->addRow([$key]);
        $this->assertNull($builder->operation);
        $this->assertSame($buffer->getBuffer(), $builder->getBuffer());
    }

    public function test_insert(): void
    {
        $key = PrimaryKey::string('key', 'foo');
        $attr = Attribute::string('attr', 'bar');
        $builder = (new BatchBuilder())->setTable('testing');
        $builder->insert([$key, $attr]);
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());
        $buffer->writeHeader()->addRow([$key, $attr]);
        $this->assertSame(OperationType::PUT, $builder->operation);
        $this->assertSame($buffer->getBuffer(), $builder->getBuffer());
        $this->assertTrue($builder->isWrite());
    }

    public function test_update(): void
    {
        $key = PrimaryKey::string('key', 'foo');
        $attr = Attribute::string('attr', 'bar');
        $builder = (new BatchBuilder())->setTable('testing');
        $builder->whereKey($key)->update([$attr]);
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());
        $buffer->writeHeader()->addRow([$key, $attr]);
        $this->assertSame(OperationType::UPDATE, $builder->operation);
        $this->assertSame($buffer->getBuffer(), $builder->getBuffer());
        $this->assertTrue($builder->isWrite());
    }

    public function test_delete(): void
    {
        $key = PrimaryKey::string('key', 'foo');
        $builder = (new BatchBuilder())->setTable('testing');
        $builder->whereKey($key)->delete();
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());
        $buffer->writeHeader()->deleteRow([$key]);
        $this->assertSame(OperationType::DELETE, $builder->operation);
        $this->assertSame($buffer->getBuffer(), $builder->getBuffer());
        $this->assertTrue($builder->isWrite());
    }

    public function test_delete_ignores_attributes(): void
    {
        $key = PrimaryKey::string('key', 'foo');
        $attr = Attribute::string('attr', 'bar');
        $builder = (new BatchBuilder())->setTable('testing');
        $builder->whereKey($key)->whereColumn($attr)->delete();
        $buffer = new PlainBufferEncoder(new PlainBufferWriter(), new Crc8());
        $buffer->writeHeader()->deleteRow([$key]);
        $this->assertSame(OperationType::DELETE, $builder->operation);
        $this->assertSame($buffer->getBuffer(), $builder->getBuffer());
    }
}
