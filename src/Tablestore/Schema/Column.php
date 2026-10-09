<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Schema;

use Dew\Acs\Tablestore\Messages\DefinedColumnSchema;
use Dew\Acs\Tablestore\Messages\PrimaryKeySchema;

final readonly class Column implements Schema
{
    /**
     * Create a schema instance.
     */
    public function __construct(
        public string $name,
        public int $type
    ) {
        //
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function toSchema(): PrimaryKeySchema|DefinedColumnSchema
    {
        return (new DefinedColumnSchema())
            ->setName($this->name)
            ->setType($this->type);
    }
}
