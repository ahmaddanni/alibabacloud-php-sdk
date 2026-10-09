<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\Tablestore\TablestoreInstance
 * @phpstan-import-type TNormalizedConfig from \Dew\Acs\Tablestore\TablestoreInstance
 */
final class Config
{
    /**
     * @param  TConfig  $config
     * @return TNormalizedConfig
     */
    public static function normalize(array $config): array
    {
        return static::normalizeEndpoint($config);
    }

    /**
     * @param  TConfig  $config
     * @return TConfig&array{
     *   region: string,
     *   instance: string,
     *   endpoint: string
     * }
     */
    public static function normalizeEndpoint(array $config): array
    {
        $endpoint = $config['endpoint'] ?? null;
        $instance = $config['instance'] ?? null;
        $region = $config['region'] ?? null;

        if (is_string($endpoint)) {
            $endpoint = static::ensureEndpointHasScheme($endpoint);
            $config['endpoint'] = $endpoint;
        }

        switch (true) {
            case is_string($endpoint) && is_string($instance) && is_string($region):
                // @phpstan-ignore return.type
                return $config;
            case is_string($endpoint):
                $host = parse_url($endpoint, PHP_URL_HOST);

                if (! is_string($host)) {
                    throw new \InvalidArgumentException('The endpoint is not a valid URL.');
                }

                $components = explode('.', $host);

                // The components exploded from the conventional endpoint
                // should include at least instance name, region ID,
                // product code, domain, and TLD.
                if (count($components) < 5) {
                    throw new \InvalidArgumentException('The endpoint is not conventional.');
                }

                $config['instance'] = $instance ?? $components[0];
                $config['region'] = $region ?? $components[1];
                break;
            case is_string($instance) && is_string($region):
                $config['endpoint'] = static::dualStackEndpoint($instance, $region);
                break;
            default:
                throw new \InvalidArgumentException(
                    'Specify at least the endpoint or region and instance in the config.'
                );
        }

        // @phpstan-ignore return.type
        return $config;
    }

    public static function ensureEndpointHasScheme(string $endpoint): string
    {
        $scheme = parse_url($endpoint, PHP_URL_SCHEME);

        if (is_string($scheme)) {
            return $endpoint;
        }

        return 'https://'.$endpoint;
    }

    public static function dualStackEndpoint(string $instance, string $region): string
    {
        return sprintf('https://%s.%s.tablestore.aliyuncs.com',
            $instance, $region
        );
    }
}
