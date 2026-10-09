<?php

declare(strict_types=1);

namespace Dew\Acs\Sophonsoar;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result copyPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise copyPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result convertPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise convertPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result runPython3Script(array $arguments = [])
 * @method \Http\Promise\Promise runPython3ScriptAsync($arguments = [])
 * @method \Dew\Acs\Result comparePlaybooks(array $arguments = [])
 * @method \Http\Promise\Promise comparePlaybooksAsync($arguments = [])
 * @method \Dew\Acs\Result createPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise createPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result debugPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise debugPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result deleteComponentAsset(array $arguments = [])
 * @method \Http\Promise\Promise deleteComponentAssetAsync($arguments = [])
 * @method \Dew\Acs\Result deletePlaybook(array $arguments = [])
 * @method \Http\Promise\Promise deletePlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentAssetForm(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentAssetFormAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentAssets(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentAssetsAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentList(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentListAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result describeComponentsJs(array $arguments = [])
 * @method \Http\Promise\Promise describeComponentsJsAsync($arguments = [])
 * @method \Dew\Acs\Result describeDistinctReleases(array $arguments = [])
 * @method \Http\Promise\Promise describeDistinctReleasesAsync($arguments = [])
 * @method \Dew\Acs\Result describeEnumItems(array $arguments = [])
 * @method \Http\Promise\Promise describeEnumItemsAsync($arguments = [])
 * @method \Dew\Acs\Result describeExecutePlaybooks(array $arguments = [])
 * @method \Http\Promise\Promise describeExecutePlaybooksAsync($arguments = [])
 * @method \Dew\Acs\Result describeField(array $arguments = [])
 * @method \Http\Promise\Promise describeFieldAsync($arguments = [])
 * @method \Dew\Acs\Result describeLatestRecordSchema(array $arguments = [])
 * @method \Http\Promise\Promise describeLatestRecordSchemaAsync($arguments = [])
 * @method \Dew\Acs\Result describeNodeParamTags(array $arguments = [])
 * @method \Http\Promise\Promise describeNodeParamTagsAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybook(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookInputOutput(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookInputOutputAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookMetrics(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookMetricsAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookNodesOutput(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookNodesOutputAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookNumberMetrics(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookNumberMetricsAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybookReleases(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybookReleasesAsync($arguments = [])
 * @method \Dew\Acs\Result describePlaybooks(array $arguments = [])
 * @method \Http\Promise\Promise describePlaybooksAsync($arguments = [])
 * @method \Dew\Acs\Result describePopApi(array $arguments = [])
 * @method \Http\Promise\Promise describePopApiAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarRecordActionOutputList(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarRecordActionOutputListAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarRecordInOutput(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarRecordInOutputAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarRecords(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result describeSoarTaskAndActions(array $arguments = [])
 * @method \Http\Promise\Promise describeSoarTaskAndActionsAsync($arguments = [])
 * @method \Dew\Acs\Result describerPython3ScriptLogs(array $arguments = [])
 * @method \Http\Promise\Promise describerPython3ScriptLogsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyComponentAsset(array $arguments = [])
 * @method \Http\Promise\Promise modifyComponentAssetAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise modifyPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result modifyPlaybookInputOutput(array $arguments = [])
 * @method \Http\Promise\Promise modifyPlaybookInputOutputAsync($arguments = [])
 * @method \Dew\Acs\Result publishPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise publishPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result queryTreeData(array $arguments = [])
 * @method \Http\Promise\Promise queryTreeDataAsync($arguments = [])
 * @method \Dew\Acs\Result revertPlaybookRelease(array $arguments = [])
 * @method \Http\Promise\Promise revertPlaybookReleaseAsync($arguments = [])
 * @method \Dew\Acs\Result triggerPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise triggerPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result triggerSophonPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise triggerSophonPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result verifyPlaybook(array $arguments = [])
 * @method \Http\Promise\Promise verifyPlaybookAsync($arguments = [])
 * @method \Dew\Acs\Result verifyPythonFile(array $arguments = [])
 * @method \Http\Promise\Promise verifyPythonFileAsync($arguments = [])
 * @method \Dew\Acs\Result describeProcessStatistics(array $arguments = [])
 * @method \Http\Promise\Promise describeProcessStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result describeProcessTasks(array $arguments = [])
 * @method \Http\Promise\Promise describeProcessTasksAsync($arguments = [])
 * @method \Dew\Acs\Result describeProcessTaskCount(array $arguments = [])
 * @method \Http\Promise\Promise describeProcessTaskCountAsync($arguments = [])
 * @method \Dew\Acs\Result describeSophonCommands(array $arguments = [])
 * @method \Http\Promise\Promise describeSophonCommandsAsync($arguments = [])
 * @method \Dew\Acs\Result triggerProcessTask(array $arguments = [])
 * @method \Http\Promise\Promise triggerProcessTaskAsync($arguments = [])
 * @method \Dew\Acs\Result describeOpenApiList(array $arguments = [])
 * @method \Http\Promise\Promise describeOpenApiListAsync($arguments = [])
 * @method \Dew\Acs\Result describeOpenApiInfo(array $arguments = [])
 * @method \Http\Promise\Promise describeOpenApiInfoAsync($arguments = [])
 * @method \Dew\Acs\Result describeGroupProductions(array $arguments = [])
 * @method \Http\Promise\Promise describeGroupProductionsAsync($arguments = [])
 * @method \Dew\Acs\Result describeNotifyTemplateList(array $arguments = [])
 * @method \Http\Promise\Promise describeNotifyTemplateListAsync($arguments = [])
 * @method \Dew\Acs\Result runNotifyComponentWithEmail(array $arguments = [])
 * @method \Http\Promise\Promise runNotifyComponentWithEmailAsync($arguments = [])
 * @method \Dew\Acs\Result runNotifyComponentWithMessageCenter(array $arguments = [])
 * @method \Http\Promise\Promise runNotifyComponentWithMessageCenterAsync($arguments = [])
 * @method \Dew\Acs\Result runNotifyComponentWithWebhook(array $arguments = [])
 * @method \Http\Promise\Promise runNotifyComponentWithWebhookAsync($arguments = [])
 * @method \Dew\Acs\Result describeVendorApiList(array $arguments = [])
 * @method \Http\Promise\Promise describeVendorApiListAsync($arguments = [])
 * @method \Dew\Acs\Result listComponents(array $arguments = []) {@since 2025-09-03}
 * @method \Http\Promise\Promise listComponentsAsync($arguments = []) {@since 2025-09-03}
 * @method \Dew\Acs\Result createComponentAsset(array $arguments = []) {@since 2025-09-03}
 * @method \Http\Promise\Promise createComponentAssetAsync($arguments = []) {@since 2025-09-03}
 * @method \Dew\Acs\Result updateComponentAsset(array $arguments = []) {@since 2025-09-03}
 * @method \Http\Promise\Promise updateComponentAssetAsync($arguments = []) {@since 2025-09-03}
 * @method \Dew\Acs\Result listComponentAssets(array $arguments = []) {@since 2025-09-03}
 * @method \Http\Promise\Promise listComponentAssetsAsync($arguments = []) {@since 2025-09-03}
 * @method \Dew\Acs\Result getPlaybook(array $arguments = []) {@since 2025-09-03}
 * @method \Http\Promise\Promise getPlaybookAsync($arguments = []) {@since 2025-09-03}
 * @method \Dew\Acs\Result listPlaybooks(array $arguments = []) {@since 2025-09-03}
 * @method \Http\Promise\Promise listPlaybooksAsync($arguments = []) {@since 2025-09-03}
 * @method \Dew\Acs\Result updatePlaybook(array $arguments = []) {@since 2025-09-03}
 * @method \Http\Promise\Promise updatePlaybookAsync($arguments = []) {@since 2025-09-03}
 */
final class SophonsoarClient extends AcsClient
{
    //
}
