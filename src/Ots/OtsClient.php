<?php

declare(strict_types=1);

namespace Dew\Acs\Ots;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result bindInstance2Vpc(array $arguments = [])
 * @method \Http\Promise\Promise bindInstance2VpcAsync($arguments = [])
 * @method \Dew\Acs\Result deleteInstance(array $arguments = [])
 * @method \Http\Promise\Promise deleteInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result deleteTags(array $arguments = [])
 * @method \Http\Promise\Promise deleteTagsAsync($arguments = [])
 * @method \Dew\Acs\Result getInstance(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getOtsServiceStatus(array $arguments = [])
 * @method \Http\Promise\Promise getOtsServiceStatusAsync($arguments = [])
 * @method \Dew\Acs\Result insertInstance(array $arguments = [])
 * @method \Http\Promise\Promise insertInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result insertTags(array $arguments = [])
 * @method \Http\Promise\Promise insertTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listClusterType(array $arguments = [])
 * @method \Http\Promise\Promise listClusterTypeAsync($arguments = [])
 * @method \Dew\Acs\Result listInstance(array $arguments = [])
 * @method \Http\Promise\Promise listInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listTags(array $arguments = [])
 * @method \Http\Promise\Promise listTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listVpcInfoByInstance(array $arguments = [])
 * @method \Http\Promise\Promise listVpcInfoByInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result listVpcInfoByVpc(array $arguments = [])
 * @method \Http\Promise\Promise listVpcInfoByVpcAsync($arguments = [])
 * @method \Dew\Acs\Result openOtsService(array $arguments = [])
 * @method \Http\Promise\Promise openOtsServiceAsync($arguments = [])
 * @method \Dew\Acs\Result unbindInstance2Vpc(array $arguments = [])
 * @method \Http\Promise\Promise unbindInstance2VpcAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstance(array $arguments = [])
 * @method \Http\Promise\Promise updateInstanceAsync($arguments = [])
 */
final class OtsClient extends AcsClient
{
    use ResolvesOtsEndpoint;
}
