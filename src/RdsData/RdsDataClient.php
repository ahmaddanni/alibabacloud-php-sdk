<?php

declare(strict_types=1);

namespace Dew\Acs\RdsData;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result beginTransaction(array $arguments = [])
 * @method \Http\Promise\Promise beginTransactionAsync($arguments = [])
 * @method \Dew\Acs\Result commitTransaction(array $arguments = [])
 * @method \Http\Promise\Promise commitTransactionAsync($arguments = [])
 * @method \Dew\Acs\Result rollbackTransaction(array $arguments = [])
 * @method \Http\Promise\Promise rollbackTransactionAsync($arguments = [])
 * @method \Dew\Acs\Result insertList(array $arguments = [])
 * @method \Http\Promise\Promise insertListAsync($arguments = [])
 * @method \Dew\Acs\Result executeStatement(array $arguments = [])
 * @method \Http\Promise\Promise executeStatementAsync($arguments = [])
 * @method \Dew\Acs\Result batchExecuteStatement(array $arguments = [])
 * @method \Http\Promise\Promise batchExecuteStatementAsync($arguments = [])
 */
final class RdsDataClient extends AcsClient
{
    //
}
