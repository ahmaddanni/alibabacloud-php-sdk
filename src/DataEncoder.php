<?php

declare(strict_types=1);

namespace Dew\Acs;

interface DataEncoder
{
    /**
     * @param  mixed[]  $data
     */
    public function encode(array $data): string;

    /**
     * @return mixed[]
     */
    public function decode(string $data): array;
}
