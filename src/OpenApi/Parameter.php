<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

/**
 * @see https://api.aliyun.com/openmeta/struct/Parameter
 */
final readonly class Parameter
{
    public function __construct(
        public string $name,
        public ParameterLocation $in,
        public ?string $description,
        public ?bool $required,
        public ?bool $allowEmptyValue,
        public ?bool $deprecated,
        public ?string $style,
        public Schema $schema
    ) {
        //
    }

    /**
     * @param  mixed[]  $parameter
     */
    public static function make(array $parameter): static
    {
        $name = $parameter['name'] ?? null;

        if ($name === null) {
            throw new \InvalidArgumentException('Missing parameter name.');
        }

        if (! is_string($name)) {
            throw new \InvalidArgumentException('The parameter name must be a string.');
        }

        $location = $parameter['in'] ?? null;

        if ($location === null) {
            throw new \InvalidArgumentException('Missing parameter location.');
        }

        return new static(
            name: $name,
            in: ParameterLocation::from($location),
            description: $parameter['description'] ?? null,
            required: $parameter['required'] ?? null,
            allowEmptyValue: $parameter['allowEmptyValue'] ?? null,
            deprecated: $parameter['deprecated'] ?? null,
            style: $parameter['style'] ?? null,
            schema: Schema::make($parameter['schema'])
        );
    }
}
