<?php

declare(strict_types=1);

namespace Dew\Acs\Dysmsapi;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result submitSmsQualification(array $arguments = [])
 * @method \Http\Promise\Promise submitSmsQualificationAsync($arguments = [])
 * @method \Dew\Acs\Result querySmsQualificationRecord(array $arguments = [])
 * @method \Http\Promise\Promise querySmsQualificationRecordAsync($arguments = [])
 * @method \Dew\Acs\Result querySingleSmsQualification(array $arguments = [])
 * @method \Http\Promise\Promise querySingleSmsQualificationAsync($arguments = [])
 * @method \Dew\Acs\Result updateSmsQualification(array $arguments = [])
 * @method \Http\Promise\Promise updateSmsQualificationAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSmsQualification(array $arguments = [])
 * @method \Http\Promise\Promise deleteSmsQualificationAsync($arguments = [])
 * @method \Dew\Acs\Result requiredPhoneCode(array $arguments = [])
 * @method \Http\Promise\Promise requiredPhoneCodeAsync($arguments = [])
 * @method \Dew\Acs\Result validPhoneCode(array $arguments = [])
 * @method \Http\Promise\Promise validPhoneCodeAsync($arguments = [])
 * @method \Dew\Acs\Result createSmsAuthorizationLetter(array $arguments = [])
 * @method \Http\Promise\Promise createSmsAuthorizationLetterAsync($arguments = [])
 * @method \Dew\Acs\Result querySmsAuthorizationLetter(array $arguments = [])
 * @method \Http\Promise\Promise querySmsAuthorizationLetterAsync($arguments = [])
 * @method \Dew\Acs\Result createSmsSign(array $arguments = [])
 * @method \Http\Promise\Promise createSmsSignAsync($arguments = [])
 * @method \Dew\Acs\Result getSmsSign(array $arguments = [])
 * @method \Http\Promise\Promise getSmsSignAsync($arguments = [])
 * @method \Dew\Acs\Result querySmsSignList(array $arguments = [])
 * @method \Http\Promise\Promise querySmsSignListAsync($arguments = [])
 * @method \Dew\Acs\Result updateSmsSign(array $arguments = [])
 * @method \Http\Promise\Promise updateSmsSignAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSmsSign(array $arguments = [])
 * @method \Http\Promise\Promise deleteSmsSignAsync($arguments = [])
 * @method \Dew\Acs\Result changeSignatureQualification(array $arguments = [])
 * @method \Http\Promise\Promise changeSignatureQualificationAsync($arguments = [])
 * @method \Dew\Acs\Result addSmsSign(array $arguments = [])
 * @method \Http\Promise\Promise addSmsSignAsync($arguments = [])
 * @method \Dew\Acs\Result modifySmsSign(array $arguments = [])
 * @method \Http\Promise\Promise modifySmsSignAsync($arguments = [])
 * @method \Dew\Acs\Result querySmsSign(array $arguments = [])
 * @method \Http\Promise\Promise querySmsSignAsync($arguments = [])
 * @method \Dew\Acs\Result createSmsTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createSmsTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result getSmsTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getSmsTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result querySmsTemplateList(array $arguments = [])
 * @method \Http\Promise\Promise querySmsTemplateListAsync($arguments = [])
 * @method \Dew\Acs\Result updateSmsTemplate(array $arguments = [])
 * @method \Http\Promise\Promise updateSmsTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deleteSmsTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteSmsTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result addSmsTemplate(array $arguments = []) {@deprecated 2017-05-25}
 * @method \Http\Promise\Promise addSmsTemplateAsync($arguments = []) {@deprecated 2017-05-25}
 * @method \Dew\Acs\Result modifySmsTemplate(array $arguments = []) {@deprecated 2017-05-25}
 * @method \Http\Promise\Promise modifySmsTemplateAsync($arguments = []) {@deprecated 2017-05-25}
 * @method \Dew\Acs\Result querySmsTemplate(array $arguments = []) {@deprecated 2017-05-25}
 * @method \Http\Promise\Promise querySmsTemplateAsync($arguments = []) {@deprecated 2017-05-25}
 * @method \Dew\Acs\Result sendSms(array $arguments = [])
 * @method \Http\Promise\Promise sendSmsAsync($arguments = [])
 * @method \Dew\Acs\Result sendBatchSms(array $arguments = [])
 * @method \Http\Promise\Promise sendBatchSmsAsync($arguments = [])
 * @method \Dew\Acs\Result querySendDetails(array $arguments = [])
 * @method \Http\Promise\Promise querySendDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result querySendStatistics(array $arguments = [])
 * @method \Http\Promise\Promise querySendStatisticsAsync($arguments = [])
 * @method \Dew\Acs\Result getOSSInfoForCardTemplate(array $arguments = [])
 * @method \Http\Promise\Promise getOSSInfoForCardTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result getMediaResourceId(array $arguments = [])
 * @method \Http\Promise\Promise getMediaResourceIdAsync($arguments = [])
 * @method \Dew\Acs\Result createCardSmsTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createCardSmsTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result queryCardSmsTemplate(array $arguments = [])
 * @method \Http\Promise\Promise queryCardSmsTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result checkMobilesCardSupport(array $arguments = [])
 * @method \Http\Promise\Promise checkMobilesCardSupportAsync($arguments = [])
 * @method \Dew\Acs\Result queryMobilesCardSupport(array $arguments = [])
 * @method \Http\Promise\Promise queryMobilesCardSupportAsync($arguments = [])
 * @method \Dew\Acs\Result getCardSmsLink(array $arguments = [])
 * @method \Http\Promise\Promise getCardSmsLinkAsync($arguments = [])
 * @method \Dew\Acs\Result getCardSmsDetails(array $arguments = [])
 * @method \Http\Promise\Promise getCardSmsDetailsAsync($arguments = [])
 * @method \Dew\Acs\Result queryCardSmsTemplateReport(array $arguments = [])
 * @method \Http\Promise\Promise queryCardSmsTemplateReportAsync($arguments = [])
 * @method \Dew\Acs\Result sendCardSms(array $arguments = [])
 * @method \Http\Promise\Promise sendCardSmsAsync($arguments = [])
 * @method \Dew\Acs\Result sendBatchCardSms(array $arguments = [])
 * @method \Http\Promise\Promise sendBatchCardSmsAsync($arguments = [])
 * @method \Dew\Acs\Result getQualificationOssInfo(array $arguments = [])
 * @method \Http\Promise\Promise getQualificationOssInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getOSSInfoForUploadFile(array $arguments = [])
 * @method \Http\Promise\Promise getOSSInfoForUploadFileAsync($arguments = [])
 * @method \Dew\Acs\Result getSmsOcrOssInfo(array $arguments = [])
 * @method \Http\Promise\Promise getSmsOcrOssInfoAsync($arguments = [])
 * @method \Dew\Acs\Result smsConversionIntl(array $arguments = [])
 * @method \Http\Promise\Promise smsConversionIntlAsync($arguments = [])
 * @method \Dew\Acs\Result conversionDataIntl(array $arguments = [])
 * @method \Http\Promise\Promise conversionDataIntlAsync($arguments = [])
 * @method \Dew\Acs\Result addShortUrl(array $arguments = [])
 * @method \Http\Promise\Promise addShortUrlAsync($arguments = [])
 * @method \Dew\Acs\Result deleteShortUrl(array $arguments = [])
 * @method \Http\Promise\Promise deleteShortUrlAsync($arguments = [])
 * @method \Dew\Acs\Result queryShortUrl(array $arguments = [])
 * @method \Http\Promise\Promise queryShortUrlAsync($arguments = [])
 * @method \Dew\Acs\Result listTagResources(array $arguments = [])
 * @method \Http\Promise\Promise listTagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result tagResources(array $arguments = [])
 * @method \Http\Promise\Promise tagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result untagResources(array $arguments = [])
 * @method \Http\Promise\Promise untagResourcesAsync($arguments = [])
 * @method \Dew\Acs\Result batchSendMessageToGlobe(array $arguments = []) {@since 2018-05-01}
 * @method \Http\Promise\Promise batchSendMessageToGlobeAsync($arguments = []) {@since 2018-05-01}
 * @method \Dew\Acs\Result sendMessageWithTemplate(array $arguments = []) {@since 2018-05-01}
 * @method \Http\Promise\Promise sendMessageWithTemplateAsync($arguments = []) {@since 2018-05-01}
 * @method \Dew\Acs\Result sendMessageToGlobe(array $arguments = []) {@since 2018-05-01}
 * @method \Http\Promise\Promise sendMessageToGlobeAsync($arguments = []) {@since 2018-05-01}
 * @method \Dew\Acs\Result queryMessage(array $arguments = []) {@since 2018-05-01}
 * @method \Http\Promise\Promise queryMessageAsync($arguments = []) {@since 2018-05-01}
 * @method \Dew\Acs\Result conversionData(array $arguments = []) {@since 2018-05-01}
 * @method \Http\Promise\Promise conversionDataAsync($arguments = []) {@since 2018-05-01}
 * @method \Dew\Acs\Result smsConversion(array $arguments = []) {@since 2018-05-01}
 * @method \Http\Promise\Promise smsConversionAsync($arguments = []) {@since 2018-05-01}
 */
final class DysmsapiClient extends AcsClient
{
    //
}
