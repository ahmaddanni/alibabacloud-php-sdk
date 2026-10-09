<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

/**
 * @phpstan-type TSchema array{
 *   name?: string,
 *   title?: string,
 *   description?: string,
 *   ref?: string,
 *   type?: string,
 *   format?: string,
 *   deprecated?: bool,
 *   required?: bool,
 *   default?: string,
 *   minimum?: string,
 *   exclusiveMinimum?: bool,
 *   maximum?: string,
 *   exclusiveMaximum?: bool,
 *   minLength?: int,
 *   maxLength?: int,
 *   enum?: mixed[],
 *   pattern?: string,
 *   properties?: array<string, mixed[]>,
 *   additionalProperties?: array<string, mixed>,
 *   items?: array<string, mixed>,
 *   minItems?: int,
 *   maxItems?: int,
 *   example?: mixed
 * }
 *
 * @see https://api.aliyun.com/openmeta/struct/Schema
 */
final readonly class Schema
{
    /**
     * @param  array<int, mixed>  $enum
     * @param  array<string, Schema>  $properties
     */
    public function __construct(
        public ?string $name,
        public ?string $title,
        public ?string $description,
        public ?string $ref,
        public ?string $type,
        public ?string $format,
        public ?bool $deprecated,
        public ?bool $required,
        public ?string $default,
        public ?string $minimum,
        public ?bool $exclusiveMinimum,
        public ?string $maximum,
        public ?bool $exclusiveMaximum,
        public ?int $minLength,
        public ?int $maxLength,
        public ?array $enum,
        public ?string $pattern,
        public ?array $properties,
        public ?Schema $additionalProperties,
        public ?Schema $items,
        public ?int $minItems,
        public ?int $maxItems,
        public mixed $example
    ) {
        //
    }

    /**
     * @param  TSchema  $schema
     */
    public static function make(array $schema): static
    {
        return new static(
            name: $schema['name'] ?? null,
            title: $schema['title'] ?? null,
            description: $schema['title'] ?? null,
            ref: $schema['$ref'] ?? null,
            type: $schema['type'] ?? null,
            format: $schema['format'] ?? null,
            deprecated: $schema['deprecated'] ?? null,
            required: $schema['required'] ?? null,
            default: $schema['default'] ?? null,
            minimum: $schema['minimum'] ?? null,
            exclusiveMinimum: $schema['exclusiveMinimum'] ?? null,
            maximum: $schema['maximum'] ?? null,
            exclusiveMaximum: $schema['exclusiveMaximum'] ?? null,
            minLength: $schema['minLength'] ?? null,
            maxLength: $schema['maxLength'] ?? null,
            enum: $schema['enum'] ?? null,
            pattern: $schema['pattern'] ?? null,
            properties: isset($schema['properties'])
                ? array_map(
                    fn (array $schema): Schema => Schema::make($schema),
                    $schema['properties']
                )
                : null,
            additionalProperties: isset($schema['additionalProperties'])
                ? static::make($schema['additionalProperties'])
                : null,
            items: isset($schema['items']) && is_array($schema['items'])
                ? static::make($schema['items'])
                : null,
            maxItems: $schema['maxItems'] ?? null,
            minItems: $schema['minItems'] ?? null,
            example: $schema['example'] ?? null
        );
    }
}
