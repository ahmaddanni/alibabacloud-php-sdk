<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\CreateTableResponse;
use Dew\Acs\Tablestore\Messages\DeleteTableResponse;
use Dew\Acs\Tablestore\Messages\DescribeTableResponse;
use Dew\Acs\Tablestore\Messages\ListTableResponse;
use Dew\Acs\Tablestore\Messages\UpdateTableResponse;
use Dew\Acs\Tablestore\Schema\Blueprint;
use Dew\Acs\Tablestore\Schema\SchemaHandler;

trait ManagesTable
{
    /**
     * Create a new table.
     *
     * @param  callable(\Dew\Acs\Tablestore\Schema\Blueprint): void  $callback
     */
    public function createTable(string $table, callable $callback): CreateTableResponse
    {
        $blueprint = (new Blueprint())
            ->reserveRead(0)
            ->reserveWrite(0)
            ->forever()
            ->maxVersions(1);

        $callback($blueprint);

        return (new SchemaHandler($this))->createTable($table, $blueprint);
    }

    /**
     * List all tables.
     */
    public function listTable(): ListTableResponse
    {
        return (new SchemaHandler($this))->listTable();
    }

    /**
     * Get the table information.
     */
    public function describeTable(string $table): DescribeTableResponse
    {
        return (new SchemaHandler($this))->describeTable($table);
    }

    /**
     * Update an existing table.
     *
     * @param  callable(\Dew\Acs\Tablestore\Schema\Blueprint): void  $callback
     */
    public function updateTable(string $table, callable $callback): UpdateTableResponse
    {
        $callback($blueprint = new Blueprint());

        return (new SchemaHandler($this))->updateTable($table, $blueprint);
    }

    /**
     * Delete an existing table.
     */
    public function deleteTable(string $table): DeleteTableResponse
    {
        return (new SchemaHandler($this))->deleteTable($table);
    }
}
