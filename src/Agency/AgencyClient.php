<?php

declare(strict_types=1);

namespace Dew\Acs\Agency;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result subscriptionBill(array $arguments = [])
 * @method \Http\Promise\Promise subscriptionBillAsync($arguments = [])
 * @method \Dew\Acs\Result setWarningThreshold(array $arguments = [])
 * @method \Http\Promise\Promise setWarningThresholdAsync($arguments = [])
 * @method \Dew\Acs\Result setCreditLine(array $arguments = [])
 * @method \Http\Promise\Promise setCreditLineAsync($arguments = [])
 * @method \Dew\Acs\Result setAccountInfo(array $arguments = [])
 * @method \Http\Promise\Promise setAccountInfoAsync($arguments = [])
 * @method \Dew\Acs\Result resendEmail(array $arguments = [])
 * @method \Http\Promise\Promise resendEmailAsync($arguments = [])
 * @method \Dew\Acs\Result quotaListExportPaged(array $arguments = [])
 * @method \Http\Promise\Promise quotaListExportPagedAsync($arguments = [])
 * @method \Dew\Acs\Result queryReversedDeductionHistory(array $arguments = [])
 * @method \Http\Promise\Promise queryReversedDeductionHistoryAsync($arguments = [])
 * @method \Dew\Acs\Result listExportTasks(array $arguments = [])
 * @method \Http\Promise\Promise listExportTasksAsync($arguments = [])
 * @method \Dew\Acs\Result listCouponUsage(array $arguments = [])
 * @method \Http\Promise\Promise listCouponUsageAsync($arguments = [])
 * @method \Dew\Acs\Result listCountries(array $arguments = [])
 * @method \Http\Promise\Promise listCountriesAsync($arguments = [])
 * @method \Dew\Acs\Result issueCouponForCustomer(array $arguments = [])
 * @method \Http\Promise\Promise issueCouponForCustomerAsync($arguments = [])
 * @method \Dew\Acs\Result inviteSubAccount(array $arguments = [])
 * @method \Http\Promise\Promise inviteSubAccountAsync($arguments = [])
 * @method \Dew\Acs\Result getUnassociatedCustomer(array $arguments = [])
 * @method \Http\Promise\Promise getUnassociatedCustomerAsync($arguments = [])
 * @method \Dew\Acs\Result getShutdownPolicyRecord(array $arguments = [])
 * @method \Http\Promise\Promise getShutdownPolicyRecordAsync($arguments = [])
 * @method \Dew\Acs\Result getPurchaseControlRecord(array $arguments = [])
 * @method \Http\Promise\Promise getPurchaseControlRecordAsync($arguments = [])
 * @method \Dew\Acs\Result getMonthlyBill(array $arguments = [])
 * @method \Http\Promise\Promise getMonthlyBillAsync($arguments = [])
 * @method \Dew\Acs\Result getInviteStatus(array $arguments = [])
 * @method \Http\Promise\Promise getInviteStatusAsync($arguments = [])
 * @method \Dew\Acs\Result getDailyBill(array $arguments = [])
 * @method \Http\Promise\Promise getDailyBillAsync($arguments = [])
 * @method \Dew\Acs\Result getCustomerOrders(array $arguments = [])
 * @method \Http\Promise\Promise getCustomerOrdersAsync($arguments = [])
 * @method \Dew\Acs\Result getCreditInfo(array $arguments = [])
 * @method \Http\Promise\Promise getCreditInfoAsync($arguments = [])
 * @method \Dew\Acs\Result getCoupondeductProductCode(array $arguments = [])
 * @method \Http\Promise\Promise getCoupondeductProductCodeAsync($arguments = [])
 * @method \Dew\Acs\Result getCouponTemplateDetail(array $arguments = [])
 * @method \Http\Promise\Promise getCouponTemplateDetailAsync($arguments = [])
 * @method \Dew\Acs\Result getCommissionableProducts(array $arguments = [])
 * @method \Http\Promise\Promise getCommissionableProductsAsync($arguments = [])
 * @method \Dew\Acs\Result getAccountInfo(array $arguments = [])
 * @method \Http\Promise\Promise getAccountInfoAsync($arguments = [])
 * @method \Dew\Acs\Result exportReversedDeductionHistory(array $arguments = [])
 * @method \Http\Promise\Promise exportReversedDeductionHistoryAsync($arguments = [])
 * @method \Dew\Acs\Result exportCustomerQuotaRecord(array $arguments = [])
 * @method \Http\Promise\Promise exportCustomerQuotaRecordAsync($arguments = [])
 * @method \Dew\Acs\Result editZeroCreditShutdown(array $arguments = [])
 * @method \Http\Promise\Promise editZeroCreditShutdownAsync($arguments = [])
 * @method \Dew\Acs\Result editNewBuyStatus(array $arguments = [])
 * @method \Http\Promise\Promise editNewBuyStatusAsync($arguments = [])
 * @method \Dew\Acs\Result editEndUserStatus(array $arguments = [])
 * @method \Http\Promise\Promise editEndUserStatusAsync($arguments = [])
 * @method \Dew\Acs\Result deleteCouponTemplate(array $arguments = [])
 * @method \Http\Promise\Promise deleteCouponTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result deductOutstandingBalance(array $arguments = [])
 * @method \Http\Promise\Promise deductOutstandingBalanceAsync($arguments = [])
 * @method \Dew\Acs\Result customerQuotaRecordList(array $arguments = [])
 * @method \Http\Promise\Promise customerQuotaRecordListAsync($arguments = [])
 * @method \Dew\Acs\Result createCustomer(array $arguments = [])
 * @method \Http\Promise\Promise createCustomerAsync($arguments = [])
 * @method \Dew\Acs\Result couponApprovalStatusList(array $arguments = [])
 * @method \Http\Promise\Promise couponApprovalStatusListAsync($arguments = [])
 * @method \Dew\Acs\Result createCouponTemplate(array $arguments = [])
 * @method \Http\Promise\Promise createCouponTemplateAsync($arguments = [])
 * @method \Dew\Acs\Result cancelSubscriptionBill(array $arguments = [])
 * @method \Http\Promise\Promise cancelSubscriptionBillAsync($arguments = [])
 * @method \Dew\Acs\Result cancelCoupon(array $arguments = [])
 * @method \Http\Promise\Promise cancelCouponAsync($arguments = [])
 * @method \Dew\Acs\Result getBillDetailFileList(array $arguments = []) {@since 2025-02-27}
 * @method \Http\Promise\Promise getBillDetailFileListAsync($arguments = []) {@since 2025-02-27}
 * @method \Dew\Acs\Result getSubPartnerOrderList(array $arguments = []) {@since 2025-02-27}
 * @method \Http\Promise\Promise getSubPartnerOrderListAsync($arguments = []) {@since 2025-02-27}
 * @method \Dew\Acs\Result getSubPartnerList(array $arguments = []) {@since 2025-02-27}
 * @method \Http\Promise\Promise getSubPartnerListAsync($arguments = []) {@since 2025-02-27}
 * @method \Dew\Acs\Result getRenewalRateList(array $arguments = []) {@since 2025-02-27}
 * @method \Http\Promise\Promise getRenewalRateListAsync($arguments = []) {@since 2025-02-27}
 * @method \Dew\Acs\Result getCustomerOrderList(array $arguments = []) {@since 2025-02-27}
 * @method \Http\Promise\Promise getCustomerOrderListAsync($arguments = []) {@since 2025-02-27}
 * @method \Dew\Acs\Result getCommissionDetailFileList(array $arguments = []) {@since 2025-02-27}
 * @method \Http\Promise\Promise getCommissionDetailFileListAsync($arguments = []) {@since 2025-02-27}
 */
final class AgencyClient extends AcsClient
{
    //
}
