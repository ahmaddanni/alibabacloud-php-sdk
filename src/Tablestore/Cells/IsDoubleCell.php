<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Dew\Acs\Tablestore\Crc;
use Dew\Acs\Tablestore\PlainBufferReader;
use Dew\Acs\Tablestore\PlainBufferWriter;

trait IsDoubleCell
{
    /**
     * Create a double cell instance.
     */
    public function __construct(
        protected string $name,
        protected float $value
    ) {
        //
    }

    /**
     * The value of the cell.
     */
    public function value(): float
    {
        return $this->value;
    }

    /**
     * The cell type.
     */
    public function type(): ValueType
    {
        return ValueType::DOUBLE;
    }

    /**
     * The allocated size in byte for the value in buffer.
     *
     * formatted_value = value_type value_len value_data
     * value_type = int8
     * value_len = int32
     */
    public function valueSize(): int
    {
        [$typeSize, $dataSize] = [1, 8];

        return $typeSize + $dataSize;
    }

    /**
     * Get value from the formatted value in buffer.
     */
    public static function fromFormattedValue(PlainBufferReader $buffer): float
    {
        return $buffer->readDouble();
    }

    /**
     * Build formatted value to buffer.
     *
     * formatted_value = value_type value_len value_data
     * value_type = int8
     * value_len = int32
     */
    public function toFormattedValue(PlainBufferWriter $buffer): void
    {
        // value_type: 1 byte
        $buffer->writeChar($this->type()->value);

        // value_data: 8 bytes
        $buffer->writeDouble($this->value());
    }

    /**
     * Calculate the checksum of the value.
     */
    public function getValueChecksumBy(Crc $crc, int $checksum): int
    {
        return $crc->double($this->value(), $checksum);
    }
}
