<?php

declare(strict_types=1);

namespace Dew\Acs\WebPlus;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createApplication(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise createApplicationAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result deleteApplication(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise deleteApplicationAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result updateApplication(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise updateApplicationAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeApplications(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeApplicationsAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result createStorage(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise createStorageAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeStorage(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeStorageAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeCategories(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeCategoriesAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeStacks(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeStacksAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result createPkgVersion(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise createPkgVersionAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result deletePkgVersion(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise deletePkgVersionAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describePkgVersions(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describePkgVersionsAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result createAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise createAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result deleteAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise deleteAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result updateAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise updateAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result stopAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise stopAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result startAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise startAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeAppEnvInstanceHealth(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeAppEnvInstanceHealthAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeAppEnvStatus(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeAppEnvStatusAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeAppEnvs(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeAppEnvsAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeInstanceHealth(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeInstanceHealthAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeEnvResource(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeEnvResourceAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeGatherLogResult(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeGatherLogResultAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeGatherStatsResult(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeGatherStatsResultAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result terminateAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise terminateAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result restartAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise restartAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result rebuildAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise rebuildAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result gatherAppEnvLog(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise gatherAppEnvLogAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result gatherAppEnvStats(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise gatherAppEnvStatsAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result deployAppEnv(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise deployAppEnvAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result createConfigTemplate(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise createConfigTemplateAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result deleteConfigTemplate(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise deleteConfigTemplateAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result updateConfigTemplate(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise updateConfigTemplateAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeConfigTemplates(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeConfigTemplatesAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describePublicConfigTemplates(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describePublicConfigTemplatesAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeConfigSettings(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeConfigSettingsAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeConfigOptions(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeConfigOptionsAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeConfigIndex(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeConfigIndexAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result validateConfigSetting(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise validateConfigSettingAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result deleteChange(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise deleteChangeAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result pauseChange(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise pauseChangeAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeChange(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeChangeAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeChanges(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeChangesAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result abortChange(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise abortChangeAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result resumeChange(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise resumeChangeAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result describeEvents(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise describeEventsAsync($arguments = []) {@deprecated 2019-03-20}
 * @method \Dew\Acs\Result createOrder(array $arguments = []) {@deprecated 2019-03-20}
 * @method \Http\Promise\Promise createOrderAsync($arguments = []) {@deprecated 2019-03-20}
 */
final class WebPlusClient extends AcsClient
{
    //
}
