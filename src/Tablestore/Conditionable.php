<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

trait Conditionable
{
    /**
     * Execute callback when the condition is true.
     *
     * @param  callable(): mixed  $callback
     */
    protected function when(bool $condition, callable $callback): self
    {
        if ($condition) {
            $callback();
        }

        return $this;
    }
}
