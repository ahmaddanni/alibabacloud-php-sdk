<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

final class BatchBag
{
    /**
     * The table name and associated builders.
     *
     * @var array<string, \Dew\Acs\Tablestore\BatchBuilder[]>
     */
    private array $tables = [];

    /**
     * Create a new builder for the given table.
     */
    public function table(string $table): BatchBuilder
    {
        return $this->tables[$table][] = (new BatchBuilder())->setTable($table);
    }

    /**
     * Get the table name and associated builders.
     *
     * @return array<string, \Dew\Acs\Tablestore\BatchBuilder[]>
     */
    public function getTables(): array
    {
        return $this->tables;
    }
}
