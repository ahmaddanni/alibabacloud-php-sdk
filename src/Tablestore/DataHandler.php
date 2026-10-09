<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore;

use Dew\Acs\Tablestore\Messages\BatchGetRowResponse;
use Dew\Acs\Tablestore\Messages\BatchWriteRowResponse;
use Dew\Acs\Tablestore\Messages\DeleteRowResponse;
use Dew\Acs\Tablestore\Messages\GetRowResponse;
use Dew\Acs\Tablestore\Messages\PutRowResponse;
use Dew\Acs\Tablestore\Messages\UpdateRowResponse;

/**
 * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/basic-data-operations-api/
 */
interface DataHandler
{
    /**
     * Read a single row of data.
     *
     * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/getrow
     */
    public function getRow(Builder $builder): GetRowResponse;

    /**
     * Write data to a row.
     *
     * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/putrow
     */
    public function putRow(Builder $builder): PutRowResponse;

    /**
     * Update row data.
     *
     * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/updaterow
     */
    public function updateRow(Builder $builder): UpdateRowResponse;

    /**
     * Delete a row of data.
     *
     * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/deleterow
     */
    public function deleteRow(Builder $builder): DeleteRowResponse;

    /**
     * Read multiple rows of data from tables.
     *
     * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/batchgetrow
     */
    public function batchGetRow(BatchBag $bag): BatchGetRowResponse;

    /**
     * Apply multiple changes to tables.
     *
     * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/batchwriterow
     */
    public function batchWriteRow(BatchBag $bag): BatchWriteRowResponse;
}
