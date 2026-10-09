<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\BatchGetRowRequest;
use Dew\Acs\Tablestore\Messages\BatchGetRowResponse;
use Dew\Acs\Tablestore\Messages\BatchWriteRowRequest;
use Dew\Acs\Tablestore\Messages\BatchWriteRowResponse;
use Dew\Acs\Tablestore\Messages\DeleteRowRequest;
use Dew\Acs\Tablestore\Messages\DeleteRowResponse;
use Dew\Acs\Tablestore\Messages\Filter;
use Dew\Acs\Tablestore\Messages\GetRowRequest;
use Dew\Acs\Tablestore\Messages\GetRowResponse;
use Dew\Acs\Tablestore\Messages\PutRowRequest;
use Dew\Acs\Tablestore\Messages\PutRowResponse;
use Dew\Acs\Tablestore\Messages\RowInBatchWriteRowRequest;
use Dew\Acs\Tablestore\Messages\TableInBatchGetRowRequest;
use Dew\Acs\Tablestore\Messages\TableInBatchWriteRowRequest;
use Dew\Acs\Tablestore\Messages\TimeRange;
use Dew\Acs\Tablestore\Messages\UpdateRowRequest;
use Dew\Acs\Tablestore\Messages\UpdateRowResponse;
use Google\Protobuf\Internal\Message;

/**
 * @phpstan-type TMergedBuilder array{
 *   pks: string[],
 *   selects: string[],
 *   time: ?\Dew\Acs\Tablestore\Messages\TimeRange,
 *   versions: ?positive-int,
 *   filter: ?\Dew\Acs\Tablestore\Messages\Filter,
 *   start: ?string,
 *   stop: ?string
 * }
 */
final class BasicHandler implements DataHandler
{
    use HandlesDataOperation;

    /**
     * Create a new basic data handler instance.
     */
    public function __construct(
        private InteractsWithTablestore $tablestore
    ) {
        //
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function getRow(Builder $builder): GetRowResponse
    {
        $request = new GetRowRequest();
        $request->setTableName($builder->getTable());
        $request->setPrimaryKey($builder->getBuffer());
        $request->setColumnsToGet($builder->selects);

        if (is_int($builder->maxVersions) || ! $builder->version instanceof TimeRange) {
            $request->setMaxVersions($builder->maxVersions ?? 1);
        }

        if (is_string($builder->selectStart)) {
            $request->setStartColumn($builder->selectStart);
        }

        if (is_string($builder->selectStop)) {
            $request->setEndColumn($builder->selectStop);
        }

        if ($builder->version instanceof TimeRange) {
            $request->setTimeRange($builder->version);
        }

        if ($this->shouldBuildFilter($builder)) {
            $request->setFilter($this->buildFilter($builder)->serializeToString());
        }

        $response = new GetRowResponse();
        $response->mergeFromString($this->send('/GetRow', $request));

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function putRow(Builder $builder): PutRowResponse
    {
        $request = new PutRowRequest();
        $request->setTableName($builder->getTable());
        $request->setRow($builder->getBuffer());
        $request->setCondition($this->toCondition($builder));
        $request->setReturnContent($this->toReturnContent($builder));

        $response = new PutRowResponse();
        $response->mergeFromString($this->send('/PutRow', $request));

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function updateRow(Builder $builder): UpdateRowResponse
    {
        $request = new UpdateRowRequest();
        $request->setTableName($builder->getTable());
        $request->setRowChange($builder->getBuffer());
        $request->setCondition($this->toCondition($builder));
        $request->setReturnContent($this->toReturnContent($builder));

        $response = new UpdateRowResponse();
        $response->mergeFromString($this->send('/UpdateRow', $request));

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function deleteRow(Builder $builder): DeleteRowResponse
    {
        $request = new DeleteRowRequest();
        $request->setTableName($builder->getTable());
        $request->setPrimaryKey($builder->getBuffer());
        $request->setCondition($this->toCondition($builder));
        $request->setReturnContent($this->toReturnContent($builder));

        $response = new DeleteRowResponse();
        $response->mergeFromString($this->send('/DeleteRow', $request));

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function batchGetRow(BatchBag $bag): BatchGetRowResponse
    {
        $request = new BatchGetRowRequest();
        $request->setTables($this->toReadTables($bag));

        $response = new BatchGetRowResponse();
        $response->mergeFromString($this->send('/BatchGetRow', $request));

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function batchWriteRow(BatchBag $bag): BatchWriteRowResponse
    {
        $request = new BatchWriteRowRequest();
        $request->setTables($this->toWriteTables($bag));

        $response = new BatchWriteRowResponse();
        $response->mergeFromString($this->send('/BatchWriteRow', $request));

        return $response;
    }

    /**
     * Handle the batch bag.
     */
    public function batch(BatchBag $bag): BatchGetRowResponse|BatchWriteRowResponse
    {
        return $this->isReadBatch($bag)
            ? $this->batchGetRow($bag)
            : $this->batchWriteRow($bag);
    }

    /**
     * Determine if the bag belongs to the read operation.
     */
    public function isReadBatch(BatchBag $bag): bool
    {
        foreach ($bag->getTables() as $builders) {
            return $builders[0]->isRead();
        }

        throw new HandlerException('Requires something in a batch.');
    }

    /**
     * Build tables for the read operation.
     *
     * @return \Dew\Acs\Tablestore\Messages\TableInBatchGetRowRequest[]
     */
    public function toReadTables(BatchBag $bag): array
    {
        $tables = [];

        foreach ($bag->getTables() as $table => $builders) {
            $tables[] = $this->toBatchGetRowRequest($table, $builders);
        }

        return $tables;
    }

    /**
     * @param  \Dew\Acs\Tablestore\BatchBuilder[]  $builders
     */
    public function toBatchGetRowRequest(string $table, array $builders): TableInBatchGetRowRequest
    {
        $data = $this->mergeBuildersForReading($builders);

        $request = (new TableInBatchGetRowRequest())
            ->setTableName($table)
            ->setPrimaryKey($data['pks'])
            ->setColumnsToGet($data['selects']);

        if ($data['time'] instanceof TimeRange) {
            $request->setTimeRange($data['time']);
        }

        if (is_int($data['versions'])) {
            $request->setMaxVersions($data['versions']);
        }

        if ($data['filter'] instanceof Filter) {
            $request->setFilter($data['filter']->serializeToString());
        }

        if (is_string($data['start'])) {
            $request->setStartColumn($data['start']);
        }

        if (is_string($data['stop'])) {
            $request->setEndColumn($data['stop']);
        }

        return $request;
    }

    /**
     * @param  \Dew\Acs\Tablestore\BatchBuilder[]  $builders
     * @return TMergedBuilder
     * @throws \Dew\Acs\Tablestore\HandlerException
     */
    private function mergeBuildersForReading(array $builders): array
    {
        $initial = [
            'pks' => [],
            'selects' => [],
            'time' => null,
            'versions' => null,
            'filter' => null,
            'start' => null,
            'stop' => null,
        ];

        $builder = array_reduce($builders, function (array $carry, BatchBuilder $builder): array {
            if ($builder->isWrite()) {
                throw new HandlerException(
                    'Could not mix read and write operations in a batch.'
                );
            }

            if ($builder->getBuffer() !== '') {
                // pks: combine the buffer in each builder.
                $carry['pks'][] = $builder->getBuffer();
            }

            // selects: combine the selected columns in each builder.
            $carry['selects'] = [...$carry['selects'], ...$builder->selects];

            // time: with the last occurrence of the time range.
            $carry['time'] = $builder->version ?? $carry['time'];

            // versions: resolve the maximum value version from builders.
            $carry['versions'] = is_int($builder->maxVersions)
                ? max($carry['versions'] ?? 0, $builder->maxVersions)
                : $carry['versions'];

            // filter: with the last occurrence of the row filter.
            $carry['filter'] = $this->shouldBuildFilter($builder)
                ? $this->buildFilter($builder)
                : $carry['filter'];

            // column selection range: start, stop
            // with the last occurrence of the selection.
            $carry['start'] = $builder->selectStart ?? $carry['start'];
            $carry['stop'] = $builder->selectStop ?? $carry['stop'];

            return $carry;
        }, $initial);

        if ($builder['pks'] === []) {
            throw new HandlerException(
                'Primary keys are required to retrieve rows from a table.'
            );
        }

        // Requires at least one of the time range or max versions.
        if ($builder['time'] === null && $builder['versions'] === null) {
            $builder['versions'] = 1;
        }

        /** @var TMergedBuilder */
        return $builder;
    }

    /**
     * Build tables for the write operation.
     *
     * @return \Dew\Acs\Tablestore\Messages\TableInBatchWriteRowRequest[]
     */
    public function toWriteTables(BatchBag $bag): array
    {
        $tables = [];

        foreach ($bag->getTables() as $table => $builders) {
            $rows = array_map(
                fn (BatchBuilder $builder): RowInBatchWriteRowRequest => $this->toWriteRequest($builder),
                $builders
            );

            $tables[] = (new TableInBatchWriteRowRequest())
                ->setTableName($table)
                ->setRows($rows);
        }

        return $tables;
    }

    /**
     * Represent the builder as a batch write request.
     */
    private function toWriteRequest(BatchBuilder $builder): RowInBatchWriteRowRequest
    {
        if ($builder->getBuffer() === '') {
            throw new HandlerException('The statement is incomplete.');
        }

        if ($builder->isRead()) {
            throw new HandlerException(
                'Could not mix read and write operations in a batch.'
            );
        }

        if ($builder->operation === null) {
            throw new HandlerException('The statement is incomplete.');
        }

        return (new RowInBatchWriteRowRequest())
            ->setType($builder->operation)
            ->setRowChange($builder->getBuffer())
            ->setCondition($this->toCondition($builder))
            ->setReturnContent($this->toReturnContent($builder));
    }

    /**
     * @throws \Dew\Acs\Tablestore\InstanceException
     */
    private function send(string $uri, Message $message): string
    {
        return $this->tablestore->send($uri, $message);
    }
}
