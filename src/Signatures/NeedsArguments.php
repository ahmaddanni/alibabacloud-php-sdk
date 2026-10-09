<?php

declare(strict_types=1);

namespace Dew\Acs\Signatures;

interface NeedsArguments
{
    /**
     * @param  array<string, mixed>  $arguments
     */
    public function setArguments(array $arguments): void;
}
