<?php

declare(strict_types=1);

namespace Dew\Acs\Avatar;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result startInstance(array $arguments = [])
 * @method \Http\Promise\Promise startInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result stopInstance(array $arguments = [])
 * @method \Http\Promise\Promise stopInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result queryRunningInstance(array $arguments = [])
 * @method \Http\Promise\Promise queryRunningInstanceAsync($arguments = [])
 * @method \Dew\Acs\Result sendText(array $arguments = [])
 * @method \Http\Promise\Promise sendTextAsync($arguments = [])
 * @method \Dew\Acs\Result sendVaml(array $arguments = [])
 * @method \Http\Promise\Promise sendVamlAsync($arguments = [])
 * @method \Dew\Acs\Result sendCommand(array $arguments = [])
 * @method \Http\Promise\Promise sendCommandAsync($arguments = [])
 * @method \Dew\Acs\Result sendMessage(array $arguments = [])
 * @method \Http\Promise\Promise sendMessageAsync($arguments = [])
 * @method \Dew\Acs\Result submitAudioTo3DAvatarVideoTask(array $arguments = [])
 * @method \Http\Promise\Promise submitAudioTo3DAvatarVideoTaskAsync($arguments = [])
 * @method \Dew\Acs\Result submitTextTo3DAvatarVideoTask(array $arguments = [])
 * @method \Http\Promise\Promise submitTextTo3DAvatarVideoTaskAsync($arguments = [])
 * @method \Dew\Acs\Result submitTextTo2DAvatarVideoTask(array $arguments = [])
 * @method \Http\Promise\Promise submitTextTo2DAvatarVideoTaskAsync($arguments = [])
 * @method \Dew\Acs\Result submitAudioTo2DAvatarVideoTask(array $arguments = [])
 * @method \Http\Promise\Promise submitAudioTo2DAvatarVideoTaskAsync($arguments = [])
 * @method \Dew\Acs\Result submitAvatarVideoTask(array $arguments = [])
 * @method \Http\Promise\Promise submitAvatarVideoTaskAsync($arguments = [])
 * @method \Dew\Acs\Result getVideoTaskInfo(array $arguments = [])
 * @method \Http\Promise\Promise getVideoTaskInfoAsync($arguments = [])
 * @method \Dew\Acs\Result cancelVideoTask(array $arguments = [])
 * @method \Http\Promise\Promise cancelVideoTaskAsync($arguments = [])
 * @method \Dew\Acs\Result queryVideoTaskInfo(array $arguments = [])
 * @method \Http\Promise\Promise queryVideoTaskInfoAsync($arguments = [])
 * @method \Dew\Acs\Result confirmAvatar2dTrain(array $arguments = [])
 * @method \Http\Promise\Promise confirmAvatar2dTrainAsync($arguments = [])
 * @method \Dew\Acs\Result create2dAvatar(array $arguments = [])
 * @method \Http\Promise\Promise create2dAvatarAsync($arguments = [])
 * @method \Dew\Acs\Result update2dAvatar(array $arguments = [])
 * @method \Http\Promise\Promise update2dAvatarAsync($arguments = [])
 * @method \Dew\Acs\Result queryAvatarList(array $arguments = [])
 * @method \Http\Promise\Promise queryAvatarListAsync($arguments = [])
 * @method \Dew\Acs\Result queryAvatar(array $arguments = [])
 * @method \Http\Promise\Promise queryAvatarAsync($arguments = [])
 * @method \Dew\Acs\Result deleteAvatar(array $arguments = [])
 * @method \Http\Promise\Promise deleteAvatarAsync($arguments = [])
 * @method \Dew\Acs\Result clientUnbindDevice(array $arguments = [])
 * @method \Http\Promise\Promise clientUnbindDeviceAsync($arguments = [])
 * @method \Dew\Acs\Result render3dAvatar(array $arguments = [])
 * @method \Http\Promise\Promise render3dAvatarAsync($arguments = [])
 * @method \Dew\Acs\Result clientStart(array $arguments = [])
 * @method \Http\Promise\Promise clientStartAsync($arguments = [])
 * @method \Dew\Acs\Result clientAuth(array $arguments = [])
 * @method \Http\Promise\Promise clientAuthAsync($arguments = [])
 * @method \Dew\Acs\Result startTimedResetOperate(array $arguments = [])
 * @method \Http\Promise\Promise startTimedResetOperateAsync($arguments = [])
 * @method \Dew\Acs\Result closeTimedResetOperate(array $arguments = [])
 * @method \Http\Promise\Promise closeTimedResetOperateAsync($arguments = [])
 * @method \Dew\Acs\Result queryTimedResetOperateStatus(array $arguments = [])
 * @method \Http\Promise\Promise queryTimedResetOperateStatusAsync($arguments = [])
 * @method \Dew\Acs\Result duplexDecision(array $arguments = [])
 * @method \Http\Promise\Promise duplexDecisionAsync($arguments = [])
 * @method \Dew\Acs\Result licenseAuth(array $arguments = [])
 * @method \Http\Promise\Promise licenseAuthAsync($arguments = [])
 */
final class AvatarClient extends AcsClient
{
    //
}
