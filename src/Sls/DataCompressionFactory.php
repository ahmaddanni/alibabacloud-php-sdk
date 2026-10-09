<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

final class DataCompressionFactory implements CompressionFactory
{
    #[\Override]
    public function make(string $format): Compression
    {
        $compression = DataCompression::tryFrom($format)?->toFqcn();

        if ($compression === null) {
            throw new \InvalidArgumentException(
                "Unsupported data compression $format."
            );
        }

        return new $compression();
    }
}
