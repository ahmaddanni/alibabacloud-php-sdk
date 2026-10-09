<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Schema;

use Dew\Acs\Tablestore\Messages\DefinedColumnSchema;
use Dew\Acs\Tablestore\Messages\PrimaryKeySchema;

final class Keyable implements Schema
{
    /**
     * Determine if the column is a primary key.
     */
    public bool $isPrimary = false;

    /**
     * Create a schema instance.
     */
    public function __construct(
        public readonly Column $column,
        public readonly int $type
    ) {
        //
    }

    /**
     * Configure the column as a primary key.
     */
    public function primary(bool $primary = true): self
    {
        $this->isPrimary = $primary;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function toSchema(): PrimaryKeySchema|DefinedColumnSchema
    {
        if ($this->isPrimary) {
            return (new PrimaryKeySchema())
                ->setName($this->column->name)
                ->setType($this->type);
        }

        return $this->column->toSchema();
    }
}
