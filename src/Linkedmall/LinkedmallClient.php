<?php

declare(strict_types=1);

namespace Dew\Acs\Linkedmall;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result queryDistributionMall(array $arguments = [])
 * @method \Http\Promise\Promise queryDistributionMallAsync($arguments = [])
 * @method \Dew\Acs\Result listDistributionMall(array $arguments = [])
 * @method \Http\Promise\Promise listDistributionMallAsync($arguments = [])
 * @method \Dew\Acs\Result queryDistributionBillDetail(array $arguments = [])
 * @method \Http\Promise\Promise queryDistributionBillDetailAsync($arguments = [])
 * @method \Dew\Acs\Result listDistributionItem(array $arguments = [])
 * @method \Http\Promise\Promise listDistributionItemAsync($arguments = [])
 * @method \Dew\Acs\Result queryItemDetail(array $arguments = [])
 * @method \Http\Promise\Promise queryItemDetailAsync($arguments = [])
 * @method \Dew\Acs\Result queryItemDetailWithDivision(array $arguments = [])
 * @method \Http\Promise\Promise queryItemDetailWithDivisionAsync($arguments = [])
 * @method \Dew\Acs\Result queryMallCategoryList(array $arguments = [])
 * @method \Http\Promise\Promise queryMallCategoryListAsync($arguments = [])
 * @method \Dew\Acs\Result queryItemGuideRetailPrice(array $arguments = [])
 * @method \Http\Promise\Promise queryItemGuideRetailPriceAsync($arguments = [])
 * @method \Dew\Acs\Result listDistributionItemWithoutCache(array $arguments = [])
 * @method \Http\Promise\Promise listDistributionItemWithoutCacheAsync($arguments = [])
 * @method \Dew\Acs\Result renderDistributionOrder(array $arguments = [])
 * @method \Http\Promise\Promise renderDistributionOrderAsync($arguments = [])
 * @method \Dew\Acs\Result applyCreateDistributionOrder(array $arguments = [])
 * @method \Http\Promise\Promise applyCreateDistributionOrderAsync($arguments = [])
 * @method \Dew\Acs\Result queryDistributionTradeStatus(array $arguments = [])
 * @method \Http\Promise\Promise queryDistributionTradeStatusAsync($arguments = [])
 * @method \Dew\Acs\Result confirmDisburse4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise confirmDisburse4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result initApplyRefund4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise initApplyRefund4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result applyRefund4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise applyRefund4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result initModifyRefund4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise initModifyRefund4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result modifyRefund4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise modifyRefund4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result cancelRefund4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise cancelRefund4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result submitReturnGoodLogistics4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise submitReturnGoodLogistics4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result queryRefundApplicationDetail4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise queryRefundApplicationDetail4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result queryLogistics4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise queryLogistics4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result queryChildDivisionCodeById(array $arguments = [])
 * @method \Http\Promise\Promise queryChildDivisionCodeByIdAsync($arguments = [])
 * @method \Dew\Acs\Result queryOrderDetail4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise queryOrderDetail4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result queryOrderList4Distribution(array $arguments = [])
 * @method \Http\Promise\Promise queryOrderList4DistributionAsync($arguments = [])
 * @method \Dew\Acs\Result cancelDistributionTrade(array $arguments = [])
 * @method \Http\Promise\Promise cancelDistributionTradeAsync($arguments = [])
 * @method \Dew\Acs\Result listPurchaserShops(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise listPurchaserShopsAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result getPurchaserShop(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise getPurchaserShopAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result getSelectionProduct(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise getSelectionProductAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result listSelectionProducts(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise listSelectionProductsAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result getSelectionProductSaleInfo(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise getSelectionProductSaleInfoAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result listSelectionProductSaleInfos(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise listSelectionProductSaleInfosAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result listSelectionSkuSaleInfos(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise listSelectionSkuSaleInfosAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result listCategories(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise listCategoriesAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result searchProducts(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise searchProductsAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result selectionGroupAddProduct(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise selectionGroupAddProductAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result selectionGroupRemoveProduct(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise selectionGroupRemoveProductAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result splitPurchaseOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise splitPurchaseOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result renderPurchaseOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise renderPurchaseOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result createPurchaseOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise createPurchaseOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result getPurchaseOrderStatus(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise getPurchaseOrderStatusAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result getOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise getOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result queryOrders(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise queryOrdersAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result listLogisticsOrders(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise listLogisticsOrdersAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result confirmDisburse(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise confirmDisburseAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result renderRefundOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise renderRefundOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result createRefundOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise createRefundOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result cancelRefundOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise cancelRefundOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result getRefundOrder(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise getRefundOrderAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result createGoodsShippingNotice(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise createGoodsShippingNoticeAsync($arguments = []) {@since 2023-09-30}
 * @method \Dew\Acs\Result queryChildDivisionCode(array $arguments = []) {@since 2023-09-30}
 * @method \Http\Promise\Promise queryChildDivisionCodeAsync($arguments = []) {@since 2023-09-30}
 */
final class LinkedmallClient extends AcsClient
{
    //
}
