<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

interface Compression
{
    /**
     * Determine if the runtime supports the compression algorithm.
     */
    public static function supports(): bool;

    /**
     * The data size threshold in bytes determines if compression is beneficial.
     */
    public static function threshold(): int;

    /**
     * Create a compressed string with the given compression level.
     *
     * @throws \Dew\Acs\Sls\CompressionException
     */
    public function encode(string $data, ?int $level = null): string;

    /**
     * Decode a compressed string.
     *
     * @throws \Dew\Acs\Sls\CompressionException
     */
    public function decode(string $data, ?int $maxLength = null): string;

    /**
     * The name of the compression algorithm.
     */
    public static function format(): string;
}
