<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

interface ApiDataBuilder
{
    /**
     * @param  array<string, mixed>  $arguments
     */
    public function build(array $arguments): ApiData;
}
