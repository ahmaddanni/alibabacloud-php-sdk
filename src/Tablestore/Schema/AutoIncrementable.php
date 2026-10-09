<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Schema;

use Dew\Acs\Tablestore\Messages\DefinedColumnSchema;
use Dew\Acs\Tablestore\Messages\PrimaryKeyOption;
use Dew\Acs\Tablestore\Messages\PrimaryKeySchema;

/**
 * @mixin \Dew\Acs\Tablestore\Schema\Keyable
 */
final class AutoIncrementable implements Schema
{
    /**
     * Determine if the column is auto-incrementing.
     */
    public bool $autoIncrementing = false;

    /**
     * Create a schema instance.
     */
    public function __construct(
        public readonly Keyable $schema
    ) {
        //
    }

    /**
     * Configure the column as auto-incrementing.
     */
    public function autoIncrement(bool $increment = true): self
    {
        $this->autoIncrementing = $increment;

        if ($increment) {
            $this->schema->primary();
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function toSchema(): PrimaryKeySchema|DefinedColumnSchema
    {
        $schema = $this->schema->toSchema();

        if ($this->autoIncrementing && $schema instanceof PrimaryKeySchema) {
            $schema->setOption(PrimaryKeyOption::AUTO_INCREMENT);
        }

        return $schema;
    }

    /**
     * Redirect the calling to the underlying schema.
     *
     * @param  array<int, mixed>  $arguments
     */
    public function __call(string $method, array $arguments = []): mixed
    {
        return $this->schema->{$method}(...$arguments);
    }
}
