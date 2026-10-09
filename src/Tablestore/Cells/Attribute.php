<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

interface Attribute
{
    /**
     * Get the operation applied to the cell.
     */
    public function getOperation(): ?Operation;

    /**
     * Set the timestamp of the cell.
     */
    public function setTimestamp(\DateTimeInterface|int $timestamp): self;

    /**
     * Get the timestamp of the cell.
     */
    public function getTimestamp(): ?int;
}
