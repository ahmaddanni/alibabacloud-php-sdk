<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\Attribute;
use Dew\Acs\Tablestore\Cells\BooleanAttribute;
use Dew\Acs\Tablestore\Cells\DeleteAttribute;
use Dew\Acs\Tablestore\Cells\DoubleAttribute;
use Dew\Acs\Tablestore\Cells\IntegerAttribute;
use Dew\Acs\Tablestore\Cells\Operation;
use Dew\Acs\Tablestore\Cells\StringAttribute;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(Attribute::class)]
final class AttributeTest extends TestCase
{
    public function test_increment(): void
    {
        $attribute = Attribute::increment('value');
        $this->assertSame(1, $attribute->value());
        $this->assertSame(Operation::INCREMENT, $attribute->getOperation());
        $attribute = Attribute::increment('value', 5);
        $this->assertSame(5, $attribute->value());
    }

    public function test_decrement(): void
    {
        $attribute = Attribute::decrement('value');
        $this->assertSame(-1, $attribute->value());
        $this->assertSame(Operation::INCREMENT, $attribute->getOperation());
        $attribute = Attribute::decrement('value', 5);
        $this->assertSame(-5, $attribute->value());
    }

    public function test_delete_attribute(): void
    {
        $attribute = Attribute::delete('value');
        $this->assertInstanceOf(DeleteAttribute::class, $attribute);
        $this->assertSame(Operation::DELETE_ALL_VERSIONS, $attribute->getOperation());
        $this->assertNull($attribute->getTimestamp());
    }

    public function test_delete_attribute_specified_version(): void
    {
        $attribute = Attribute::delete('value', 1000);
        $this->assertInstanceOf(DeleteAttribute::class, $attribute);
        $this->assertSame(Operation::DELETE_ONE_VERSION, $attribute->getOperation());
        $this->assertSame(1000, $attribute->getTimestamp());
    }

    /**
     * @param  class-string<\Dew\Acs\Tablestore\Cells\Attribute>  $expected
     */
    #[TestWith([10, IntegerAttribute::class], 'integer')]
    #[TestWith([3.14, DoubleAttribute::class], 'double')]
    #[TestWith([true, BooleanAttribute::class], 'boolean')]
    #[TestWith(['foo', StringAttribute::class], 'string')]
    public function test_create_from_value(mixed $value, string $expected): void
    {
        $attribute = Attribute::createFromValue('value', $value);
        $this->assertInstanceOf($expected, $attribute);
    }

    public function test_create_from_value_unsupported(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not build an attribute from the [NULL] type.');
        Attribute::createFromValue('value', null);
    }
}
