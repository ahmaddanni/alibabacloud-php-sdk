<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

/**
 * @phpstan-type TSecurityRequirement string[]
 * @phpstan-type TErrorCode array{errorCode: string, errorMessage: string}
 * @phpstan-type TApi array{
 *   title?: string,
 *   summary?: string,
 *   description?: string,
 *   path?: string,
 *   schemes: string[],
 *   methods: string[],
 *   security: array<string, TSecurityRequirement>[],
 *   deprecated: bool,
 *   staticInfo?: array<string, mixed>,
 *   operationType?: string,
 *   consumes?: string[],
 *   produces?: string[],
 *   tags?: string[],
 *   parameters: mixed[][],
 *   responses: array<string, mixed[]>,
 *   errorCodes?: array<string, TErrorCode[]>
 * }
 *
 * @see https://api.aliyun.com/openmeta/struct/api
 */
final class Api
{
    private ?string $name = null;

    /**
     * @param  string[]  $methods
     * @param  string[]  $schemes
     * @param  array<string, TSecurityRequirement>[]  $security
     * @param  string[]|null  $consumes
     * @param  string[]|null  $produces
     * @param  \Dew\Acs\OpenApi\Parameter[]  $parameters
     * @param  \Dew\Acs\OpenApi\Response[]  $responses
     */
    public function __construct(
        public readonly ?string $path,
        public readonly array $methods,
        public readonly array $schemes,
        public readonly array $security,
        public readonly bool $deprecated,
        public readonly ?array $consumes,
        public readonly ?array $produces,
        public readonly array $parameters,
        public readonly array $responses
    ) {
        //
    }

    /**
     * @param  TApi  $api
     */
    public static function make(array $api): static
    {
        return new Api(
            path: $api['path'] ?? null,
            methods: $api['methods'],
            schemes: $api['schemes'],
            security: $api['security'],
            deprecated: $api['deprecated'] ?? false,
            consumes: $api['consumes'] ?? null,
            produces: $api['produces'] ?? null,
            parameters: array_map(
                fn (array $parameter): Parameter => Parameter::make($parameter),
                $api['parameters']
            ),
            responses: array_map(
                fn (array $response): Response => Response::make($response),
                $api['responses'] ?? []
            ),
        );
    }

    public function getParameter(string $name): Parameter
    {
        $parameter = $this->parameters[$name] ?? null;

        if ($parameter === null) {
            throw new \InvalidArgumentException("The API does not have $name parameter.");
        }

        return $parameter;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
