<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

interface Crc
{
    /**
     * Calculate the checksum of the given string.
     */
    public function string(string $value, int $checksum): int;

    /**
     * Calculate the checksum of the given ASCII code point.
     */
    public function char(int $value, int $checksum): int;

    /**
     * Calculate the checksum of the given integer value in 4 bytes.
     */
    public function int32(int $value, int $checksum): int;

    /**
     * Calculate the checksum of the given integer value in 8 bytes.
     */
    public function int64(int $value, int $checksum): int;

    /**
     * Calculate the checksum of the given double value.
     */
    public function double(float $double, int $checksum): int;
}
