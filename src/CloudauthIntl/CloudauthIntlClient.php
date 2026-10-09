<?php

declare(strict_types=1);

namespace Dew\Acs\CloudauthIntl;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result initialize(array $arguments = [])
 * @method \Http\Promise\Promise initializeAsync($arguments = [])
 * @method \Dew\Acs\Result checkResult(array $arguments = [])
 * @method \Http\Promise\Promise checkResultAsync($arguments = [])
 * @method \Dew\Acs\Result ekycVerify(array $arguments = [])
 * @method \Http\Promise\Promise ekycVerifyAsync($arguments = [])
 * @method \Dew\Acs\Result faceLiveness(array $arguments = [])
 * @method \Http\Promise\Promise faceLivenessAsync($arguments = [])
 * @method \Dew\Acs\Result faceDuplicationCheckIntl(array $arguments = [])
 * @method \Http\Promise\Promise faceDuplicationCheckIntlAsync($arguments = [])
 * @method \Dew\Acs\Result deepfakeDetectIntlStream(array $arguments = [])
 * @method \Http\Promise\Promise deepfakeDetectIntlStreamAsync($arguments = [])
 * @method \Dew\Acs\Result deepfakeDetectIntl(array $arguments = [])
 * @method \Http\Promise\Promise deepfakeDetectIntlAsync($arguments = [])
 * @method \Dew\Acs\Result faceGuardRisk(array $arguments = [])
 * @method \Http\Promise\Promise faceGuardRiskAsync($arguments = [])
 * @method \Dew\Acs\Result faceCompare(array $arguments = [])
 * @method \Http\Promise\Promise faceCompareAsync($arguments = [])
 * @method \Dew\Acs\Result faceCrossCompareIntl(array $arguments = [])
 * @method \Http\Promise\Promise faceCrossCompareIntlAsync($arguments = [])
 * @method \Dew\Acs\Result docOcrMax(array $arguments = [])
 * @method \Http\Promise\Promise docOcrMaxAsync($arguments = [])
 * @method \Dew\Acs\Result docOcr(array $arguments = [])
 * @method \Http\Promise\Promise docOcrAsync($arguments = [])
 * @method \Dew\Acs\Result id2MetaVerifyIntl(array $arguments = [])
 * @method \Http\Promise\Promise id2MetaVerifyIntlAsync($arguments = [])
 * @method \Dew\Acs\Result id2MetaPeriodVerifyIntl(array $arguments = [])
 * @method \Http\Promise\Promise id2MetaPeriodVerifyIntlAsync($arguments = [])
 * @method \Dew\Acs\Result bankMetaVerifyIntl(array $arguments = [])
 * @method \Http\Promise\Promise bankMetaVerifyIntlAsync($arguments = [])
 * @method \Dew\Acs\Result mobile2MetaVerifyIntl(array $arguments = [])
 * @method \Http\Promise\Promise mobile2MetaVerifyIntlAsync($arguments = [])
 * @method \Dew\Acs\Result mobile3MetaVerifyIntl(array $arguments = [])
 * @method \Http\Promise\Promise mobile3MetaVerifyIntlAsync($arguments = [])
 * @method \Dew\Acs\Result credentialRecognitionIntl(array $arguments = [])
 * @method \Http\Promise\Promise credentialRecognitionIntlAsync($arguments = [])
 * @method \Dew\Acs\Result credentialSubmitIntl(array $arguments = [])
 * @method \Http\Promise\Promise credentialSubmitIntlAsync($arguments = [])
 * @method \Dew\Acs\Result credentialGetResultIntl(array $arguments = [])
 * @method \Http\Promise\Promise credentialGetResultIntlAsync($arguments = [])
 * @method \Dew\Acs\Result credentialVerifyIntl(array $arguments = [])
 * @method \Http\Promise\Promise credentialVerifyIntlAsync($arguments = [])
 * @method \Dew\Acs\Result addressVerifyV2Intl(array $arguments = [])
 * @method \Http\Promise\Promise addressVerifyV2IntlAsync($arguments = [])
 * @method \Dew\Acs\Result addressCompareIntl(array $arguments = [])
 * @method \Http\Promise\Promise addressCompareIntlAsync($arguments = [])
 * @method \Dew\Acs\Result keepaliveIntl(array $arguments = [])
 * @method \Http\Promise\Promise keepaliveIntlAsync($arguments = [])
 * @method \Dew\Acs\Result deleteVerifyResult(array $arguments = [])
 * @method \Http\Promise\Promise deleteVerifyResultAsync($arguments = [])
 * @method \Dew\Acs\Result checkVerifyLog(array $arguments = [])
 * @method \Http\Promise\Promise checkVerifyLogAsync($arguments = [])
 * @method \Dew\Acs\Result downloadVerifyRecordIntl(array $arguments = [])
 * @method \Http\Promise\Promise downloadVerifyRecordIntlAsync($arguments = [])
 * @method \Dew\Acs\Result queryFaceGroup(array $arguments = [])
 * @method \Http\Promise\Promise queryFaceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFaceGroup(array $arguments = [])
 * @method \Http\Promise\Promise modifyFaceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFaceGroup(array $arguments = [])
 * @method \Http\Promise\Promise deleteFaceGroupAsync($arguments = [])
 * @method \Dew\Acs\Result queryFaceRecord(array $arguments = [])
 * @method \Http\Promise\Promise queryFaceRecordAsync($arguments = [])
 * @method \Dew\Acs\Result modifyFaceRecord(array $arguments = [])
 * @method \Http\Promise\Promise modifyFaceRecordAsync($arguments = [])
 * @method \Dew\Acs\Result deleteFaceRecord(array $arguments = [])
 * @method \Http\Promise\Promise deleteFaceRecordAsync($arguments = [])
 * @method \Dew\Acs\Result tempOssUrlIntl(array $arguments = [])
 * @method \Http\Promise\Promise tempOssUrlIntlAsync($arguments = [])
 * @method \Dew\Acs\Result tempAccessTokenIntl(array $arguments = [])
 * @method \Http\Promise\Promise tempAccessTokenIntlAsync($arguments = [])
 * @method \Dew\Acs\Result cardOcr(array $arguments = []) {@deprecated 2022-08-09}
 * @method \Http\Promise\Promise cardOcrAsync($arguments = []) {@deprecated 2022-08-09}
 * @method \Dew\Acs\Result fraudResultCallBack(array $arguments = []) {@deprecated 2022-08-09}
 * @method \Http\Promise\Promise fraudResultCallBackAsync($arguments = []) {@deprecated 2022-08-09}
 * @method \Dew\Acs\Result addressVerifyIntl(array $arguments = []) {@deprecated 2022-08-09}
 * @method \Http\Promise\Promise addressVerifyIntlAsync($arguments = []) {@deprecated 2022-08-09}
 */
final class CloudauthIntlClient extends AcsClient
{
    //
}
