<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\ConfigChecker as BaseChecker;

class ConfigChecker extends BaseChecker
{
    /**
     * @param  array<string, mixed>  $config
     * @throws \InvalidArgumentException
     * @phpstan-assert array{instance: string} $config
     */
    public function ensureInstanceNameExists(array $config): void
    {
        if (! isset($config['instance'])) {
            throw new \InvalidArgumentException('Missing instance name.');
        }

        if (! is_string($config['instance'])) {
            throw new \InvalidArgumentException('The instance name must be a string.');
        }
    }
}
