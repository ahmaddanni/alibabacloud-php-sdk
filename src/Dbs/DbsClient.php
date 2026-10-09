<?php

declare(strict_types=1);

namespace Dew\Acs\Dbs;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result configureBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise configureBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result createAndStartBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise createAndStartBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result createBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise createBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result createFullBackupSetDownload(array $arguments = [])
 * @method \Http\Promise\Promise createFullBackupSetDownloadAsync($arguments = [])
 * @method \Dew\Acs\Result createGetDBListFromAgentTask(array $arguments = [])
 * @method \Http\Promise\Promise createGetDBListFromAgentTaskAsync($arguments = [])
 * @method \Dew\Acs\Result createIncrementBackupSetDownload(array $arguments = [])
 * @method \Http\Promise\Promise createIncrementBackupSetDownloadAsync($arguments = [])
 * @method \Dew\Acs\Result createRestoreTask(array $arguments = [])
 * @method \Http\Promise\Promise createRestoreTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupGatewayList(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupGatewayListAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupPlanBilling(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupPlanBillingAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupPlanList(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupPlanListAsync($arguments = [])
 * @method \Dew\Acs\Result describeBackupSetDownloadTaskList(array $arguments = [])
 * @method \Http\Promise\Promise describeBackupSetDownloadTaskListAsync($arguments = [])
 * @method \Dew\Acs\Result describeDLAService(array $arguments = [])
 * @method \Http\Promise\Promise describeDLAServiceAsync($arguments = [])
 * @method \Dew\Acs\Result describeFullBackupList(array $arguments = [])
 * @method \Http\Promise\Promise describeFullBackupListAsync($arguments = [])
 * @method \Dew\Acs\Result describeIncrementBackupList(array $arguments = [])
 * @method \Http\Promise\Promise describeIncrementBackupListAsync($arguments = [])
 * @method \Dew\Acs\Result describeJobErrorCode(array $arguments = [])
 * @method \Http\Promise\Promise describeJobErrorCodeAsync($arguments = [])
 * @method \Dew\Acs\Result describeNodeCidrList(array $arguments = [])
 * @method \Http\Promise\Promise describeNodeCidrListAsync($arguments = [])
 * @method \Dew\Acs\Result describePreCheckProgressList(array $arguments = [])
 * @method \Http\Promise\Promise describePreCheckProgressListAsync($arguments = [])
 * @method \Dew\Acs\Result describeRegions(array $arguments = [])
 * @method \Http\Promise\Promise describeRegionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeRestoreRangeInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeRestoreRangeInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeRestoreTaskList(array $arguments = [])
 * @method \Http\Promise\Promise describeRestoreTaskListAsync($arguments = [])
 * @method \Dew\Acs\Result disableBackupLog(array $arguments = [])
 * @method \Http\Promise\Promise disableBackupLogAsync($arguments = [])
 * @method \Dew\Acs\Result enableBackupLog(array $arguments = [])
 * @method \Http\Promise\Promise enableBackupLogAsync($arguments = [])
 * @method \Dew\Acs\Result getDBListFromAgent(array $arguments = [])
 * @method \Http\Promise\Promise getDBListFromAgentAsync($arguments = [])
 * @method \Dew\Acs\Result initializeDbsServiceLinkedRole(array $arguments = [])
 * @method \Http\Promise\Promise initializeDbsServiceLinkedRoleAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupObjects(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupObjectsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupPlanName(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupPlanNameAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupSetDownloadRules(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupSetDownloadRulesAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupSourceEndpoint(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupSourceEndpointAsync($arguments = [])
 * @method \Dew\Acs\Result modifyBackupStrategy(array $arguments = [])
 * @method \Http\Promise\Promise modifyBackupStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result modifyStorageStrategy(array $arguments = [])
 * @method \Http\Promise\Promise modifyStorageStrategyAsync($arguments = [])
 * @method \Dew\Acs\Result releaseBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise releaseBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result renewBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise renewBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result startBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise startBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result startRestoreTask(array $arguments = [])
 * @method \Http\Promise\Promise startRestoreTaskAsync($arguments = [])
 * @method \Dew\Acs\Result stopBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise stopBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result upgradeBackupPlan(array $arguments = [])
 * @method \Http\Promise\Promise upgradeBackupPlanAsync($arguments = [])
 * @method \Dew\Acs\Result changeResourceGroup(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise changeResourceGroupAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result createAdvancedPolicy(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise createAdvancedPolicyAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result createDownload(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise createDownloadAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result deleteSandboxInstance(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise deleteSandboxInstanceAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeBackupDataList(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeBackupDataListAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeBackupPolicy(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeBackupPolicyAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeCostInfoByDbsInstance(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeCostInfoByDbsInstanceAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeDownloadBackupSetStorageInfo(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeDownloadBackupSetStorageInfoAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeDownloadSupport(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeDownloadSupportAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeDownloadTask(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeDownloadTaskAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeSandboxBackupSets(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeSandboxBackupSetsAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeSandboxInstances(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeSandboxInstancesAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result describeSandboxRecoveryTime(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise describeSandboxRecoveryTimeAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result modifyBackupPolicy(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise modifyBackupPolicyAsync($arguments = []) {@since 2021-01-01}
 * @method \Dew\Acs\Result retryDownloadTask(array $arguments = []) {@since 2021-01-01}
 * @method \Http\Promise\Promise retryDownloadTaskAsync($arguments = []) {@since 2021-01-01}
 */
final class DbsClient extends AcsClient
{
    //
}
