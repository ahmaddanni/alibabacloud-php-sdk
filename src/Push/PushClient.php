<?php

declare(strict_types=1);

namespace Dew\Acs\Push;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result push(array $arguments = [])
 * @method \Http\Promise\Promise pushAsync($arguments = [])
 * @method \Dew\Acs\Result massPush(array $arguments = [])
 * @method \Http\Promise\Promise massPushAsync($arguments = [])
 * @method \Dew\Acs\Result continuouslyPush(array $arguments = [])
 * @method \Http\Promise\Promise continuouslyPushAsync($arguments = [])
 * @method \Dew\Acs\Result completeContinuouslyPush(array $arguments = [])
 * @method \Http\Promise\Promise completeContinuouslyPushAsync($arguments = [])
 * @method \Dew\Acs\Result cancelPush(array $arguments = [])
 * @method \Http\Promise\Promise cancelPushAsync($arguments = [])
 * @method \Dew\Acs\Result pushV2(array $arguments = [])
 * @method \Http\Promise\Promise pushV2Async($arguments = [])
 * @method \Dew\Acs\Result massPushV2(array $arguments = [])
 * @method \Http\Promise\Promise massPushV2Async($arguments = [])
 * @method \Dew\Acs\Result checkCertificate(array $arguments = [])
 * @method \Http\Promise\Promise checkCertificateAsync($arguments = [])
 * @method \Dew\Acs\Result queryPushRecords(array $arguments = [])
 * @method \Http\Promise\Promise queryPushRecordsAsync($arguments = [])
 * @method \Dew\Acs\Result queryDeviceStat(array $arguments = [])
 * @method \Http\Promise\Promise queryDeviceStatAsync($arguments = [])
 * @method \Dew\Acs\Result queryUniqueDeviceStat(array $arguments = [])
 * @method \Http\Promise\Promise queryUniqueDeviceStatAsync($arguments = [])
 * @method \Dew\Acs\Result queryDeviceInfo(array $arguments = [])
 * @method \Http\Promise\Promise queryDeviceInfoAsync($arguments = [])
 * @method \Dew\Acs\Result queryPushStatByApp(array $arguments = [])
 * @method \Http\Promise\Promise queryPushStatByAppAsync($arguments = [])
 * @method \Dew\Acs\Result queryPushStatByMsg(array $arguments = [])
 * @method \Http\Promise\Promise queryPushStatByMsgAsync($arguments = [])
 * @method \Dew\Acs\Result checkDevices(array $arguments = [])
 * @method \Http\Promise\Promise checkDevicesAsync($arguments = [])
 * @method \Dew\Acs\Result bindTag(array $arguments = [])
 * @method \Http\Promise\Promise bindTagAsync($arguments = [])
 * @method \Dew\Acs\Result unbindTag(array $arguments = [])
 * @method \Http\Promise\Promise unbindTagAsync($arguments = [])
 * @method \Dew\Acs\Result removeTag(array $arguments = [])
 * @method \Http\Promise\Promise removeTagAsync($arguments = [])
 * @method \Dew\Acs\Result queryTags(array $arguments = [])
 * @method \Http\Promise\Promise queryTagsAsync($arguments = [])
 * @method \Dew\Acs\Result listTags(array $arguments = [])
 * @method \Http\Promise\Promise listTagsAsync($arguments = [])
 * @method \Dew\Acs\Result bindAlias(array $arguments = [])
 * @method \Http\Promise\Promise bindAliasAsync($arguments = [])
 * @method \Dew\Acs\Result unbindAlias(array $arguments = [])
 * @method \Http\Promise\Promise unbindAliasAsync($arguments = [])
 * @method \Dew\Acs\Result queryAliases(array $arguments = [])
 * @method \Http\Promise\Promise queryAliasesAsync($arguments = [])
 * @method \Dew\Acs\Result queryDevicesByAlias(array $arguments = [])
 * @method \Http\Promise\Promise queryDevicesByAliasAsync($arguments = [])
 * @method \Dew\Acs\Result queryDevicesByAccount(array $arguments = [])
 * @method \Http\Promise\Promise queryDevicesByAccountAsync($arguments = [])
 * @method \Dew\Acs\Result bindPhone(array $arguments = [])
 * @method \Http\Promise\Promise bindPhoneAsync($arguments = [])
 * @method \Dew\Acs\Result unbindPhone(array $arguments = [])
 * @method \Http\Promise\Promise unbindPhoneAsync($arguments = [])
 * @method \Dew\Acs\Result pushMessageToiOS(array $arguments = [])
 * @method \Http\Promise\Promise pushMessageToiOSAsync($arguments = [])
 * @method \Dew\Acs\Result pushNoticeToiOS(array $arguments = [])
 * @method \Http\Promise\Promise pushNoticeToiOSAsync($arguments = [])
 * @method \Dew\Acs\Result pushNoticeToAndroid(array $arguments = [])
 * @method \Http\Promise\Promise pushNoticeToAndroidAsync($arguments = [])
 * @method \Dew\Acs\Result pushMessageToAndroid(array $arguments = [])
 * @method \Http\Promise\Promise pushMessageToAndroidAsync($arguments = [])
 * @method \Dew\Acs\Result checkDevice(array $arguments = []) {@deprecated 2016-08-01}
 * @method \Http\Promise\Promise checkDeviceAsync($arguments = []) {@deprecated 2016-08-01}
 * @method \Dew\Acs\Result listSummaryApps(array $arguments = []) {@deprecated 2016-08-01}
 * @method \Http\Promise\Promise listSummaryAppsAsync($arguments = []) {@deprecated 2016-08-01}
 */
final class PushClient extends AcsClient
{
    //
}
