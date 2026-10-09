<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

trait HandlesNegation
{
    /**
     * Determine if the condition should be opposite.
     */
    protected bool $negative = false;

    /**
     * Specify the opposite of the statement.
     */
    public function not(bool $negative = true): self
    {
        $this->negative = $negative;

        return $this;
    }

    /**
     * Determine if the condition should be opposite.
     */
    public function isNegative(): bool
    {
        return $this->negative;
    }
}
