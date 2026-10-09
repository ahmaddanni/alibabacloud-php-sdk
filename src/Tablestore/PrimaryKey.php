<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Cells\BinaryPrimaryKey;
use Dew\Acs\Tablestore\Cells\Cell;
use Dew\Acs\Tablestore\Cells\IntegerPrimaryKey;
use Dew\Acs\Tablestore\Cells\StringPrimaryKey;
use Dew\Acs\Tablestore\Cells\ValueType;

final class PrimaryKey
{
    /**
     * Create an integer primary key.
     */
    public static function integer(string $key, int $value): IntegerPrimaryKey
    {
        return new IntegerPrimaryKey($key, $value);
    }

    /**
     * Create a string primary key.
     */
    public static function string(string $key, string $value): StringPrimaryKey
    {
        return new StringPrimaryKey($key, $value);
    }

    /**
     * Create a binary primary key.
     */
    public static function binary(string $key, string $value): BinaryPrimaryKey
    {
        return new BinaryPrimaryKey($key, $value);
    }

    /**
     * Create a primary key based on the type of the given value.
     */
    public static function createFromValue(string $name, mixed $value): Cell
    {
        return match (gettype($value)) {
            'integer' => static::integer($name, $value),
            'string' => static::string($name, $value),
            default => throw new \InvalidArgumentException(sprintf(
                'Could not build a primary key from the [%s] type.', gettype($value)
            )),
        };
    }

    /**
     * Get the primary key class by the given type.
     *
     * @return class-string<\Dew\Acs\Tablestore\Cells\Cell&\Dew\Acs\Tablestore\Cells\HasValue>
     */
    public static function classFromType(ValueType|int $type): string
    {
        $type = $type instanceof ValueType ? $type : ValueType::from($type);

        return match ($type) {
            ValueType::INTEGER => IntegerPrimaryKey::class,
            ValueType::STRING => StringPrimaryKey::class,
            ValueType::BLOB => BinaryPrimaryKey::class,
            default => throw new \InvalidArgumentException(sprintf(
                'Unexpected primary key type [%s] given.',
                $type->value
            )),
        };
    }
}
