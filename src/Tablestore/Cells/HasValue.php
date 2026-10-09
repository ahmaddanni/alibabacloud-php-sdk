<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Dew\Acs\Tablestore\Crc;
use Dew\Acs\Tablestore\PlainBufferReader;
use Dew\Acs\Tablestore\PlainBufferWriter;

interface HasValue
{
    /**
     * The value of the cell.
     */
    public function value(): mixed;

    /**
     * The cell type.
     */
    public function type(): ValueType;

    /**
     * The allocated size in byte for the value in buffer.
     *
     * formatted_value = value_type value_len value_data
     * value_type = int8
     * value_len = int32
     */
    public function valueSize(): int;

    /**
     * Get value from the formatted value in buffer.
     */
    public static function fromFormattedValue(PlainBufferReader $buffer): mixed;

    /**
     * Build formatted value to buffer.
     *
     * formatted_value = value_type value_len value_data
     * value_type = int8
     * value_len = int32
     */
    public function toFormattedValue(PlainBufferWriter $buffer): void;

    /**
     * Calculate the checksum of the value.
     */
    public function getValueChecksumBy(Crc $crc, int $checksum): int;
}
