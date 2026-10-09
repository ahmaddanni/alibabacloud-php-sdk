<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Cells\BinaryAttribute;
use Dew\Acs\Tablestore\Cells\BooleanAttribute;
use Dew\Acs\Tablestore\Cells\Cell;
use Dew\Acs\Tablestore\Cells\DeleteAttribute;
use Dew\Acs\Tablestore\Cells\DoubleAttribute;
use Dew\Acs\Tablestore\Cells\IntegerAttribute;
use Dew\Acs\Tablestore\Cells\StringAttribute;
use Dew\Acs\Tablestore\Cells\ValueType;

final class Attribute
{
    /**
     * Create an integer attribute.
     */
    public static function integer(string $name, int $value): IntegerAttribute
    {
        return new IntegerAttribute($name, $value);
    }

    /**
     * Create an integer attribute with incrementing value.
     */
    public static function increment(string $name, int $increment = 1): IntegerAttribute
    {
        return static::integer($name, $increment)->increment();
    }

    /**
     * Create an integer attribute with decrementing value.
     */
    public static function decrement(string $name, int $decrement = 1): IntegerAttribute
    {
        return static::integer($name, -$decrement)->increment();
    }

    /**
     * Create a double attribute.
     */
    public static function double(string $name, float $value): DoubleAttribute
    {
        return new DoubleAttribute($name, $value);
    }

    /**
     * Create a boolean attribute.
     */
    public static function boolean(string $name, bool $value): BooleanAttribute
    {
        return new BooleanAttribute($name, $value);
    }

    /**
     * Create a string attribute.
     */
    public static function string(string $name, string $value): StringAttribute
    {
        return new StringAttribute($name, $value);
    }

    /**
     * Create a binary attribute.
     */
    public static function binary(string $name, string $value): BinaryAttribute
    {
        return new BinaryAttribute($name, $value);
    }

    /**
     * Delete an attribute.
     */
    public static function delete(string $name, \DateTimeInterface|int|null $timestamp = null): DeleteAttribute
    {
        $attribute = new DeleteAttribute($name);

        return $timestamp === null
            ? $attribute->all()
            : $attribute->version($timestamp);
    }

    /**
     * Create an attribute based on the type of the given value.
     */
    public static function createFromValue(string $name, mixed $value): Cell
    {
        return match (gettype($value)) {
            'boolean' => static::boolean($name, $value),
            'double' => static::double($name, $value),
            'integer' => static::integer($name, $value),
            'string' => static::string($name, $value),
            default => throw new \InvalidArgumentException(sprintf(
                'Could not build an attribute from the [%s] type.', gettype($value)
            )),
        };
    }

    /**
     * Get the attribute class by the given type.
     *
     * @return class-string<\Dew\Acs\Tablestore\Cells\Cell&\Dew\Acs\Tablestore\Cells\HasValue>
     */
    public static function classFromType(ValueType|int $type): string
    {
        $type = $type instanceof ValueType ? $type : ValueType::from($type);

        return match ($type) {
            ValueType::INTEGER => IntegerAttribute::class,
            ValueType::DOUBLE => DoubleAttribute::class,
            ValueType::BOOLEAN => BooleanAttribute::class,
            ValueType::STRING => StringAttribute::class,
            ValueType::BLOB => BinaryAttribute::class,
            default => throw new \InvalidArgumentException(sprintf(
                'Unexpected attribute type [%s] given.', $type->value
            )),
        };
    }
}
