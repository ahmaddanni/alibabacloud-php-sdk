<?php

declare(strict_types=1);

namespace Dew\Acs\Metaspace;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result generateCoordinationCode(array $arguments = [])
 * @method \Http\Promise\Promise generateCoordinationCodeAsync($arguments = [])
 * @method \Dew\Acs\Result applyCoordinationWithCode(array $arguments = [])
 * @method \Http\Promise\Promise applyCoordinationWithCodeAsync($arguments = [])
 * @method \Dew\Acs\Result endAllCoordinationByOwner(array $arguments = [])
 * @method \Http\Promise\Promise endAllCoordinationByOwnerAsync($arguments = [])
 */
final class MetaspaceClient extends AcsClient
{
    //
}
