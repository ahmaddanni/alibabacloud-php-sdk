<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Dew\Acs\Tablestore\Crc;
use Dew\Acs\Tablestore\PlainBufferReader;
use Dew\Acs\Tablestore\PlainBufferWriter;

trait IsIntegerCell
{
    /**
     * Create an integer cell instance.
     */
    public function __construct(
        protected string $name,
        protected int $value
    ) {
        //
    }

    /**
     * The value of the cell.
     */
    #[\Override]
    public function value(): int
    {
        return $this->value;
    }

    /**
     * The cell type.
     */
    #[\Override]
    public function type(): ValueType
    {
        return ValueType::INTEGER;
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
        [$typeSize, $dataSize] = [1, 8];

        return $typeSize + $dataSize;
    }

    /**
     * Get value from the formatted value in buffer.
     */
    #[\Override]
    public static function fromFormattedValue(PlainBufferReader $buffer): int
    {
        return $buffer->readLittleEndian64();
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

        // value_data: 8 bytes
        $buffer->writeLittleEndian64($this->value());
    }

    /**
     * Calculate the checksum of the value.
     */
    #[\Override]
    public function getValueChecksumBy(Crc $crc, int $checksum): int
    {
        return $crc->int64($this->value, $checksum);
    }
}
