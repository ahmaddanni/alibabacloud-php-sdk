<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\BatchGetRowResponse;
use Dew\Acs\Tablestore\Messages\BatchWriteRowResponse;

trait ManagesDataOperation
{
    /**
     * Create a new builder against the given table.
     */
    public function table(string $table): Builder
    {
        return (new Builder())
            ->setTable($table)
            ->setHandler(new BasicHandler($this));
    }

    /**
     * Read or write multiple rows of data.
     *
     * @param  callable(\Dew\Acs\Tablestore\BatchBag): void  $callback
     */
    public function batch(callable $callback): BatchGetRowResponse|BatchWriteRowResponse
    {
        $callback($bag = new BatchBag());

        return (new BasicHandler($this))->batch($bag);
    }
}
