<?php

declare(strict_types=1);

namespace Dew\Acs\Viapi;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result queryAsyncJobList(array $arguments = [])
 * @method \Http\Promise\Promise queryAsyncJobListAsync($arguments = [])
 * @method \Dew\Acs\Result getAsyncJobResult(array $arguments = [])
 * @method \Http\Promise\Promise getAsyncJobResultAsync($arguments = [])
 * @method \Dew\Acs\Result cancelWaitingAsyncJob(array $arguments = [])
 * @method \Http\Promise\Promise cancelWaitingAsyncJobAsync($arguments = [])
 */
final class ViapiClient extends AcsClient
{
    //
}
