<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

final readonly class ApiData
{
    /**
     * @param  array<string, string>  $headers
     */
    public function __construct(
        public ?string $host,
        public string $scheme,
        public string $method,
        public string $path,
        public array $headers,
        public string $query,
        public string $body
    ) {
        //
    }
}
