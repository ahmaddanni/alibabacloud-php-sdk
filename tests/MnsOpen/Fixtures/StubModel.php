<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\MnsOpen\Fixtures;

final readonly class StubModel
{
    public function __construct(
        public string $value
    ) {
        //
    }

    /**
     * @param  array{value: string}  $data
     */
    public static function make(array $data): static
    {
        return new static($data['value']);
    }
}
