<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

interface CompressionFactory
{
    public function make(string $format): Compression;
}
