<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Dew\Acs\Tablestore\Crc;
use Dew\Acs\Tablestore\PlainBufferReader;
use Dew\Acs\Tablestore\PlainBufferWriter;

trait IsBooleanCell
{
    /**
     * Create a boolean cell.
     */
    public function __construct(
        protected string $name,
        protected bool $value
    ) {
        //
    }

    /**
     * The value of the cell.
     */
    #[\Override]
    public function value(): bool
    {
        return $this->value;
    }

    /**
     * The cell type.
     */
    #[\Override]
    public function type(): ValueType
    {
        return ValueType::BOOLEAN;
    }

    /**
     * The allocated size in byte for the value in buffer.
     *
     * formatted_value = value_type value_len value_data
     * value_type = int8
     * value_len = int32
     */
    #[\Override]
    public function valueSize(): int
    {
        [$typeSize, $dataSize] = [1, 1];

        return $typeSize + $dataSize;
    }

    /**
     * Get value from the formatted value in buffer.
     */
    #[\Override]
    public static function fromFormattedValue(PlainBufferReader $buffer): bool
    {
        return (bool) $buffer->readChar();
    }

    /**
     * Build formatted value to buffer.
     *
     * formatted_value = value_type value_len value_data
     * value_type = int8
     * value_len = int32
     */
    #[\Override]
    public function toFormattedValue(PlainBufferWriter $buffer): void
    {
        // value_type: 1 byte
        $buffer->writeChar($this->type()->value);

        // value_data: 1 byte
        $buffer->writeChar((int) $this->value());
    }

    /**
     * Calculate the checksum of the value.
     */
    #[\Override]
    public function getValueChecksumBy(Crc $crc, int $checksum): int
    {
        return $crc->char((int) $this->value(), $checksum);
    }
}
