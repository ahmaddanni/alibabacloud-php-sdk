<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Dew\Acs\Tablestore\Crc;
use Dew\Acs\Tablestore\PlainBufferReader;
use Dew\Acs\Tablestore\PlainBufferWriter;

trait IsStringCell
{
    /**
     * Create a string cell instance.
     */
    public function __construct(
        protected string $name,
        protected string $value
    ) {
        //
    }

    /**
     * The value of the cell.
     */
    #[\Override]
    public function value(): string
    {
        return $this->value;
    }

    /**
     * The cell type.
     */
    #[\Override]
    public function type(): ValueType
    {
        return ValueType::STRING;
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
        [$typeSize, $lenSize, $dataSize] = [1, 4, strlen($this->value)];

        return $typeSize + $lenSize + $dataSize;
    }

    /**
     * Get value from the formatted value in buffer.
     */
    #[\Override]
    public static function fromFormattedValue(PlainBufferReader $buffer): string
    {
        return $buffer->read(              // 2: read value by the size
            $buffer->readLittleEndian32()  // 1: read the value size
        );
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

        // value_len: 4 bytes
        $buffer->writeLittleEndian32(strlen($this->value));

        // value_data
        $buffer->write($this->value);
    }

    /**
     * Calculate the checksum of the value.
     */
    #[\Override]
    public function getValueChecksumBy(Crc $crc, int $checksum): int
    {
        $checksum = $crc->int32(strlen($this->value), $checksum);

        return $crc->string($this->value, $checksum);
    }
}
