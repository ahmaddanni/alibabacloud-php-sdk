<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

/**
 * @phpstan-import-type TSchema from \Dew\Acs\OpenApi\Schema
 * @phpstan-type TResponse array{
 *   description?: string,
 *   headers?: array<string, mixed>,
 *   schema?: TSchema
 * }
 *
 * @see https://api.aliyun.com/openmeta/struct/Response
 */
final readonly class Response
{
    /**
     * @param  array<string, mixed>  $headers
     */
    public function __construct(
        public ?string $description,
        public ?array $headers,
        public ?Schema $schema
    ) {
        //
    }

    /**
     * @param  TResponse  $response
     */
    public static function make(array $response): static
    {
        return new static(
            description: $response['description'] ?? null,
            headers: $response['headers'] ?? null,
            schema: isset($response['schema']) ? Schema::make($response['schema']) : null
        );
    }
}
