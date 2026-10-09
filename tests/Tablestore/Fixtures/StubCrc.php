<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore\Fixtures;

use Dew\Acs\Tablestore\Crc;

final class StubCrc implements Crc
{
    #[\Override]
    public function string(string $value, int $checksum): int
    {
        return 0;
    }

    #[\Override]
    public function char(int $value, int $checksum): int
    {
        return 0;
    }

    #[\Override]
    public function int32(int $value, int $checksum): int
    {
        return 0;
    }

    #[\Override]
    public function int64(int $value, int $checksum): int
    {
        return 0;
    }

    #[\Override]
    public function double(float $double, int $checksum): int
    {
        return 0;
    }
}
