<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Schema;

use Dew\Acs\Tablestore\InteractsWithTablestore;
use Dew\Acs\Tablestore\Messages\CreateTableRequest;
use Dew\Acs\Tablestore\Messages\CreateTableResponse;
use Dew\Acs\Tablestore\Messages\DefinedColumnSchema;
use Dew\Acs\Tablestore\Messages\DeleteTableRequest;
use Dew\Acs\Tablestore\Messages\DeleteTableResponse;
use Dew\Acs\Tablestore\Messages\DescribeTableRequest;
use Dew\Acs\Tablestore\Messages\DescribeTableResponse;
use Dew\Acs\Tablestore\Messages\ListTableRequest;
use Dew\Acs\Tablestore\Messages\ListTableResponse;
use Dew\Acs\Tablestore\Messages\PrimaryKeySchema;
use Dew\Acs\Tablestore\Messages\ReservedThroughput;
use Dew\Acs\Tablestore\Messages\SSESpecification;
use Dew\Acs\Tablestore\Messages\TableMeta;
use Dew\Acs\Tablestore\Messages\TableOptions;
use Dew\Acs\Tablestore\Messages\UpdateTableRequest;
use Dew\Acs\Tablestore\Messages\UpdateTableResponse;

/**
 * @see https://help.aliyun.com/zh/tablestore/developer-reference/data-table-operations-api/
 */
final readonly class SchemaHandler
{
    public function __construct(
        public InteractsWithTablestore $tablestore
    ) {
        //
    }

    /**
     * Create a new table.
     */
    public function createTable(string $name, Blueprint $table): CreateTableResponse
    {
        $request = new CreateTableRequest();
        $request->setTableMeta($this->toTableMeta($table)->setTableName($name));

        if ($table->throughput instanceof ReservedThroughput) {
            $request->setReservedThroughput($table->throughput);
        }

        if ($table->options instanceof TableOptions) {
            $request->setTableOptions($table->options);
        }

        if ($table->encryption instanceof SSESpecification) {
            $request->setSseSpec($table->encryption);
        }

        $response = new CreateTableResponse();
        $response->mergeFromString(
            $this->tablestore->send('/CreateTable', $request)
        );

        return $response;
    }

    /**
     * List all tables.
     */
    public function listTable(): ListTableResponse
    {
        $response = new ListTableResponse();
        $response->mergeFromString(
            $this->tablestore->send('/ListTable', new ListTableRequest())
        );

        return $response;
    }

    /**
     * Get the table information.
     */
    public function describeTable(string $table): DescribeTableResponse
    {
        $request = (new DescribeTableRequest())->setTableName($table);

        $response = new DescribeTableResponse();
        $response->mergeFromString(
            $this->tablestore->send('/DescribeTable', $request)
        );

        return $response;
    }

    /**
     * Update an existing table.
     */
    public function updateTable(string $name, Blueprint $table): UpdateTableResponse
    {
        $request = (new UpdateTableRequest())->setTableName($name);

        if ($table->throughput instanceof ReservedThroughput) {
            $request->setReservedThroughput($table->throughput);
        }

        if ($table->options instanceof TableOptions) {
            $request->setTableOptions($table->options);
        }

        $response = new UpdateTableResponse();
        $response->mergeFromString(
            $this->tablestore->send('/UpdateTable', $request)
        );

        return $response;
    }

    /**
     * Delete an existing table.
     */
    public function deleteTable(string $table): DeleteTableResponse
    {
        $request = (new DeleteTableRequest())->setTableName($table);

        $response = new DeleteTableResponse();
        $response->mergeFromString(
            $this->tablestore->send('/DeleteTable', $request)
        );

        return $response;
    }

    /**
     * Build a table meta Protobuf message from the blueprint.
     */
    private function toTableMeta(Blueprint $table): TableMeta
    {
        [$pks, $cols] = [[], []];

        foreach ($table->columns as $column) {
            $schema = $column->toSchema();

            match ($schema::class) {
                PrimaryKeySchema::class => $pks[] = $schema,
                DefinedColumnSchema::class => $cols[] = $schema,
                default => throw new \InvalidArgumentException(sprintf(
                    'Unexpected schema type [%s] is given.', $schema::class
                )),
            };
        }

        return (new TableMeta())
            ->setPrimaryKey($pks)
            ->setDefinedColumn($cols);
    }
}
