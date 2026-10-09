<?php

declare(strict_types=1);

namespace Dew\Acs\Hitsdb;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createHiTSDBInstance(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise createHiTSDBInstanceAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result deleteHiTSDBInstance(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise deleteHiTSDBInstanceAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result describeHiTSDBInstance(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise describeHiTSDBInstanceAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result describeHiTSDBInstanceList(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise describeHiTSDBInstanceListAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result describeHiTSDBInstanceSecurityIpList(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise describeHiTSDBInstanceSecurityIpListAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result describeRegions(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result describeZones(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise describeZonesAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result modifyHiTSDBInstanceClass(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise modifyHiTSDBInstanceClassAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result modifyHiTSDBInstanceSecurityIpList(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise modifyHiTSDBInstanceSecurityIpListAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result renameHiTSDBInstanceAlias(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise renameHiTSDBInstanceAliasAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result renewTSDBInstance(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise renewTSDBInstanceAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result restartHiTSDBInstance(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise restartHiTSDBInstanceAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result switchHiTSDBInstancePublicNet(array $arguments = []) {@since 2017-06-01}
 * @method \Http\Promise\Promise switchHiTSDBInstancePublicNetAsync($arguments = []) {@since 2017-06-01}
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = [])
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result createLindormInstance(array $arguments = [])
 * @method \Http\Promise\Promise createLindormInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result createLindormV2Instance(array $arguments = [])
 * @method \Http\Promise\Promise createLindormV2InstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getInstanceIpWhiteList(array $arguments = [])
 * @method \Http\Promise\Promise getInstanceIpWhiteListAsync($arguments = [])
 * @method \Dew\Acs\Result getLindormFsUsedDetail(array $arguments = [])
 * @method \Http\Promise\Promise getLindormFsUsedDetailAsync($arguments = [])
 * @method \Dew\Acs\Result getLindormInstance(array $arguments = [])
 * @method \Http\Promise\Promise getLindormInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result getLindormInstanceEngineList(array $arguments = [])
 * @method \Http\Promise\Promise getLindormInstanceEngineListAsync($arguments = [])
 * @method \Dew\Acs\Result getLindormInstanceList(array $arguments = [])
 * @method \Http\Promise\Promise getLindormInstanceListAsync($arguments = [])
 * @method \Dew\Acs\Result getLindormV2InstanceDetails(array $arguments = [])
 * @method \Http\Promise\Promise getLindormV2InstanceDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstancePayType(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstancePayTypeAsync($arguments = [])
 * @method \Dew\Acs\Result releaseLindormInstance(array $arguments = [])
 * @method \Http\Promise\Promise releaseLindormInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result releaseLindormV2Instance(array $arguments = [])
 * @method \Http\Promise\Promise releaseLindormV2InstanceAsync($arguments = [])
 * @method \Dew\Acs\Result renewLindormInstance(array $arguments = [])
 * @method \Http\Promise\Promise renewLindormInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result switchLSQLV3MySQLService(array $arguments = [])
 * @method \Http\Promise\Promise switchLSQLV3MySQLServiceAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result updateInstanceIpWhiteList(array $arguments = [])
 * @method \Http\Promise\Promise updateInstanceIpWhiteListAsync($arguments = [])
 * @method \Dew\Acs\Result updateLindormInstanceAttribute(array $arguments = [])
 * @method \Http\Promise\Promise updateLindormInstanceAttributeAsync($arguments = [])
 * @method \Dew\Acs\Result updateLindormV2Instance(array $arguments = [])
 * @method \Http\Promise\Promise updateLindormV2InstanceAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeLindormInstance(array $arguments = [])
 * @method \Http\Promise\Promise upgradeLindormInstanceAsync($arguments = [])
 */
final class HitsdbClient extends AcsClient
{
    //
}
