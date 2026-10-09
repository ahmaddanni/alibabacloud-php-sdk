<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

/**
 * @phpstan-type TInfo array{
 *   style: string,
 *   product: string,
 *   version: string
 * }
 */
final readonly class Info
{
    public function __construct(
        public string $style,
        public string $version,
        public string $product
    ) {
        //
    }

    /**
     * @param  TInfo  $info
     */
    public static function make(array $info): static
    {
        return new static(
            style: $info['style'],
            version: $info['version'],
            product: $info['product']
        );
    }
}
