<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

/**
 * @phpstan-import-type TApi from \Dew\Acs\OpenApi\Api
 * @phpstan-import-type TInfo from \Dew\Acs\OpenApi\Info
 * @phpstan-type TEndpoint array{regionId: string, endpoint: string}
 * @phpstan-type TApiDocs array{
 *   directories: mixed[][],
 *   info: TInfo,
 *   apis: TApi[],
 *   components: array<string, mixed[]>,
 *   endpoints: TEndpoint[]
 * }
 *
 * @see https://api.aliyun.com/openmeta/struct/ApiDocs
 */
final readonly class ApiDocs
{
    /**
     * @param  TApi[]  $apis
     * @param  mixed[][]  $components
     * @param  TEndpoint[]  $endpoints
     */
    public function __construct(
        public Info $info,
        public array $components,
        public array $apis,
        public array $endpoints
    ) {
        //
    }

    /**
     * @param  TApiDocs  $docs
     */
    public static function make(array $docs): static
    {
        return new static(
            info: Info::make($docs['info']),
            components: $docs['components'],
            apis: $docs['apis'],
            endpoints: $docs['endpoints']
        );
    }

    public function getNamespace(): string
    {
        $namespace = ucwords($this->info->product, '-');

        return str_replace('-', '', $namespace);
    }

    public function getApi(string $name): Api
    {
        $definition = $this->apis[$name]
            ?? throw new \InvalidArgumentException("Could not find $name API.");

        return Api::make($definition)->setName($name);
    }

    public function getEndpoint(string $regionId): string
    {
        foreach ($this->endpoints as $endpoint) {
            if ($endpoint['regionId'] === $regionId) {
                return trim($endpoint['endpoint']);
            }
        }

        throw new \InvalidArgumentException("Could not find the endpoint for region $regionId.");
    }
}
