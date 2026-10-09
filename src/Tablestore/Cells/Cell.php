<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

use Dew\Acs\Tablestore\Crc;

abstract class Cell
{
    /**
     * The name of the cell.
     */
    protected string $name;

    /**
     * The name of the cell.
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Calculate the checksum of the cell.
     */
    public function getChecksumBy(Crc $crc): int
    {
        $checksum = $crc->string($this->name(), 0);

        if (! $this->shouldChecksumValue()) {
            return $checksum;
        }

        $checksum = $crc->char($this->type()->value, $checksum);

        return $this->getValueChecksumBy($crc, $checksum);
    }

    /**
     * Determine if the cell value should be included in checksum.
     *
     * @phpstan-assert-if-true \Dew\Acs\Tablestore\Cells\HasValue $this
     */
    protected function shouldChecksumValue(): bool
    {
        return $this instanceof HasValue;
    }
}
