<?php

declare(strict_types=1);

namespace Dew\Acs\Sts;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result assumeRole(array $arguments = [])
 * @method \Http\Promise\Promise assumeRoleAsync($arguments = [])
 * @method \Dew\Acs\Result assumeRoleWithSAML(array $arguments = [])
 * @method \Http\Promise\Promise assumeRoleWithSAMLAsync($arguments = [])
 * @method \Dew\Acs\Result assumeRoleWithOIDC(array $arguments = [])
 * @method \Http\Promise\Promise assumeRoleWithOIDCAsync($arguments = [])
 * @method \Dew\Acs\Result getCallerIdentity(array $arguments = [])
 * @method \Http\Promise\Promise getCallerIdentityAsync($arguments = [])
 */
final class StsClient extends AcsClient
{
    //
}
