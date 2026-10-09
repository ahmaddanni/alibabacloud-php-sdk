<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

final class Deflate implements Compression
{
    /**
     * @var int
     */
    public const DEFAULT_COMPRESSION_LEVEL = 6;

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public static function supports(): bool
    {
        return extension_loaded('zlib');
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public static function threshold(): int
    {
        return 256;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function encode(string $data, ?int $level = null): string
    {
        $level = is_int($level) ? $level : self::DEFAULT_COMPRESSION_LEVEL;
        $encoded = gzcompress($data, $level);

        if ($encoded === false) {
            throw new CompressionException('Could not encode the data.');
        }

        return $encoded;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function decode(string $data, ?int $maxLength = null): string
    {
        $decoded = gzuncompress($data, $maxLength ?? 0);

        if ($decoded === false) {
            throw new CompressionException('Could not decode the data.');
        }

        return $decoded;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public static function format(): string
    {
        return 'deflate';
    }
}
