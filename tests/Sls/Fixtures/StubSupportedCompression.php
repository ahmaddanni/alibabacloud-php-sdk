<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls\Fixtures;

use Dew\Acs\Sls\Compression;

final class StubSupportedCompression implements Compression
{
    #[\Override]
    public static function supports(): bool
    {
        return true;
    }

    #[\Override]
    public static function threshold(): int
    {
        return 0;
    }

    #[\Override]
    public function encode(string $data, ?int $level = null): string
    {
        return substr($data, 0, -1);
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
