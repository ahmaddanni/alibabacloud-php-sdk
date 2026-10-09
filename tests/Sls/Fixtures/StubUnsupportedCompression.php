<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls\Fixtures;

use Dew\Acs\Sls\Compression;

final class StubUnsupportedCompression implements Compression
{
    #[\Override]
    public static function supports(): bool
    {
        return false;
    }

    #[\Override]
    public static function threshold(): int
    {
        return 0;
    }

    #[\Override]
    public function encode(string $data, ?int $level = null): string
    {
        return $data;
    }

    #[\Override]
    public function decode(string $data, ?int $maxLength = null): string
    {
        return $data;
    }

    #[\Override]
    public static function format(): string
    {
        return 'stub';
    }
}
