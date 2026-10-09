<?php

declare(strict_types=1);

namespace Dew\Acs;

class ConfigChecker
{
    /**
     * @param  array<string, mixed>  $config
     * @throws \InvalidArgumentException
     * @phpstan-assert array{
     *   credentials: array{
     *     key: string,
     *     secret: string,
     *     token?: string
     *   }
     * } $config
     */
    public function ensureCredentialsExist($config): void
    {
        if (! isset($config['credentials'])) {
            throw new \InvalidArgumentException('Missing credentials.');
        }

        if (! is_array($config['credentials'])) {
            throw new \InvalidArgumentException('The credentials must be an array.');
        }

        $key = $config['credentials']['key'] ?? null;
        $secret = $config['credentials']['secret'] ?? null;
        $token = $config['credentials']['token'] ?? null;

        if ($key === null) {
            throw new \InvalidArgumentException('Missing Access Key ID.');
        }

        if (! is_string($key)) {
            throw new \InvalidArgumentException('The Access Key ID must be a string.');
        }

        if ($secret === null) {
            throw new \InvalidArgumentException('Missing Access Key secret.');
        }

        if (! is_string($secret)) {
            throw new \InvalidArgumentException('The Access Key secret must be a string.');
        }

        if ($secret !== null && ! is_string($secret)) {
            throw new \InvalidArgumentException('The token must be a string.');
        }
    }

    /**
     * @param  array<string, mixed>  $config
     * @throws \InvalidArgumentException
     * @phpstan-assert array{region: string} $config
     */
    public function ensureRegionExists(array $config): void
    {
        if (! isset($config['region'])) {
            throw new \InvalidArgumentException('Missing region.');
        }

        if (! is_string($config['region'])) {
            throw new \InvalidArgumentException('The region must be a string.');
        }
    }
}
