<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'linkedmall',
        'version' => '2023-09-30',
    ],
    'components' => [
        'schemas' => [
            'AddressInfo' => [
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'addressDetail' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'receiverPhone' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'townDivisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'receiver' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'addressId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'ApplyReason' => [
                'type' => 'object',
                'properties' => [
                    'reasonTextId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'reasonTips' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'Category' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'isLeaf' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'level' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'categoryId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'parentId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'CategoryListQuery' => [
                'type' => 'object',
                'properties' => [
                    'parentCategoryId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'categoryIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                ],
            ],
            'CategoryListResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'categories' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Category',
                        ],
                    ],
                ],
            ],
            'ConfirmDisburseCmd' => [
                'type' => 'object',
                'properties' => [
                    'orderId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'purchaseOrderId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ConfirmDisburseResult' => [
                'type' => 'object',
                'properties' => [
                    'result' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CooperationShop' => [
                'type' => 'object',
                'properties' => [
                    'shopId' => [
                        'type' => 'string',
                    ],
                    'cooperationCompanyId' => [
                        'type' => 'string',
                    ],
                    'cooperationShopId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateAliPayUrlRequest' => [
                'type' => 'object',
                'properties' => [
                    'shopId' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                    ],
                ],
            ],
            'CreateAliPayUrlResult' => [
                'type' => 'object',
                'properties' => [
                    'zftWithholdSignUrl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'accountId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'memberId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'DeliveryInfo' => [
                'type' => 'object',
                'properties' => [
                    'postFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'serviceType' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'id' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'DistributeProductCommand' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'requestUser' => [
                        'type' => 'string',
                    ],
                    'requestTime' => [
                        'type' => 'string',
                    ],
                    'lmShopId' => [
                        'type' => 'string',
                    ],
                    'products' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DistributionProduct',
                        ],
                    ],
                ],
            ],
            'DistributeProductResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DistributionMaxRefundFee' => [
                'type' => 'object',
                'properties' => [
                    'minRefundFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'maxRefundFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'DistributionProduct' => [
                'type' => 'object',
                'properties' => [
                    'productId' => [
                        'type' => 'string',
                    ],
                    'channelCode' => [
                        'type' => 'string',
                    ],
                    'sellerId' => [
                        'type' => 'string',
                    ],
                    'categoryLeafId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'categoryLeafName' => [
                        'type' => 'string',
                    ],
                    'categoryChain' => [
                        'type' => 'string',
                    ],
                    'title' => [
                        'type' => 'string',
                    ],
                    'shortTitle' => [
                        'type' => 'string',
                    ],
                    'picUrl' => [
                        'type' => 'string',
                    ],
                    'whiteBackgroundPicUrl' => [
                        'type' => 'string',
                    ],
                    'distributeStatus' => [
                        'type' => 'string',
                    ],
                    'skus' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DistributionSku',
                        ],
                    ],
                ],
            ],
            'DistributionSku' => [
                'type' => 'object',
                'properties' => [
                    'skuId' => [
                        'type' => 'string',
                    ],
                    'title' => [
                        'type' => 'string',
                    ],
                    'aliasTitle' => [
                        'type' => 'string',
                    ],
                    'picUrl' => [
                        'type' => 'string',
                    ],
                    'jxPrice' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'dxPrice' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'taxCode' => [
                        'type' => 'string',
                    ],
                    'taxRate' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'barCode' => [
                        'type' => 'string',
                    ],
                    'skuStatus' => [
                        'type' => 'string',
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'hasInvoice' => [
                        'type' => 'boolean',
                    ],
                    'hasCredit' => [
                        'type' => 'boolean',
                    ],
                    'creditPeriod' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Division' => [
                'type' => 'object',
                'properties' => [
                    'divisionName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'divisionCode' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'divisionLevel' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'pinyin' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'parentId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'DivisionPageResult' => [
                'type' => 'object',
                'properties' => [
                    'divisionList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Division',
                            'required' => false,
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'DivisionQuery' => [
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'GeneralBill' => [
                'type' => 'object',
                'properties' => [
                    'totalAmount' => [
                        '$ref' => '#/components/schemas/Money',
                        'required' => false,
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'billId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'downloadUrl' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'shopName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'startTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'endTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'gmtCreate' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'billPeriod' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'GeneralBillPageQuery' => [
                'type' => 'object',
                'properties' => [
                    'asc' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'billId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'limit' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'start' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'orderBy' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderDirection' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'billPeriod' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'GeneralBillPageResult' => [
                'type' => 'object',
                'properties' => [
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generalBills' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/GeneralBill',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'GetDistributionProductResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'products' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DistributionProduct',
                        ],
                    ],
                ],
            ],
            'Good' => [
                'type' => 'object',
                'properties' => [
                    'goodName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'skuId' => [
                        'type' => 'string',
                    ],
                    'skuTitle' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GoodsShippingNoticeCreateCmd' => [
                'type' => 'object',
                'properties' => [
                    'cpCode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'logisticsNo' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'disputeId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'GoodsShippingNoticeCreateResult' => [
                'type' => 'object',
                'properties' => [
                    'result' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'LeavePictureList' => [
                'type' => 'object',
                'properties' => [
                    'picture' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'desc' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'LimitRule' => [
                'type' => 'object',
                'properties' => [
                    'ruleType' => [
                        'type' => 'string',
                    ],
                    'limitNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'beginTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'condcase' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LogisticsDetail' => [
                'type' => 'object',
                'properties' => [
                    'ocurrTimeStr' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'standerdDesc' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'LogisticsInformationData' => [
                'type' => 'object',
                'properties' => [
                    'purchaserId' => [
                        'type' => 'string',
                    ],
                    'trackingCompanyCode' => [
                        'type' => 'string',
                    ],
                    'trackingCompanyName' => [
                        'type' => 'string',
                    ],
                    'modifiedTime' => [
                        'type' => 'string',
                    ],
                    'orderLineId' => [
                        'type' => 'string',
                    ],
                    'trackingNumber' => [
                        'type' => 'string',
                    ],
                    'outerPurchaseOrderId' => [
                        'type' => 'string',
                    ],
                    'logisticsStatus' => [
                        'type' => 'string',
                    ],
                    'orderId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LogisticsOrderListResult' => [
                'type' => 'object',
                'properties' => [
                    'logisticsOrderList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/LogisticsOrderResult',
                            'required' => false,
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'LogisticsOrderResult' => [
                'type' => 'object',
                'properties' => [
                    'mailNo' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'dataProviderTitle' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'logisticsCompanyName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'logisticsDetailList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/LogisticsDetail',
                            'required' => false,
                        ],
                    ],
                    'goods' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Good',
                            'required' => false,
                        ],
                    ],
                    'dataProvider' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'logisticsCompanyCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'MemberAccountRequest' => [
                'type' => 'object',
                'properties' => [
                    'shopId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'MemberAccountResult' => [
                'type' => 'object',
                'properties' => [
                    'accountNo' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'Money' => [
                'type' => 'object',
                'properties' => [
                    'amount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'amountString' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'cent' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'amountAsString' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'currency' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'symbol' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'currencyCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'defaultFractionDigits' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'numericCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                    'positive' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'currencyCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'OrderLineResult' => [
                'type' => 'object',
                'properties' => [
                    'productTitle' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'number' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuTitle' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'productPic' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderLineId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'logisticsStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'payFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'skuId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderLineStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'OrderListResult' => [
                'type' => 'object',
                'properties' => [
                    'orderList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/OrderResult',
                            'required' => false,
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'OrderPageQuery' => [
                'type' => 'object',
                'properties' => [
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'orderIdList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'purchaseOrderId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'OrderProductResult' => [
                'type' => 'object',
                'properties' => [
                    'productTitle' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'features' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                    'skuTitle' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'canSell' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'price' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'productPicUrl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'purchaserId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'message' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'OrderRenderProductDTO' => [
                'type' => 'object',
                'properties' => [
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'purchaserId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'skuId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'OrderRenderResult' => [
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'deliveryInfoList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/DeliveryInfo',
                            'required' => false,
                        ],
                    ],
                    'canSell' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'productList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/OrderProductResult',
                            'required' => false,
                        ],
                    ],
                    'extInfo' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'OrderResult' => [
                'type' => 'object',
                'properties' => [
                    'orderAmount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'orderLineList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/OrderLineResult',
                            'required' => false,
                        ],
                    ],
                    'orderId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'distributorId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'logisticsStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'createDate' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'orderClosedReason' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Product' => [
                'type' => 'object',
                'properties' => [
                    'categoryChain' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Category',
                            'required' => false,
                        ],
                    ],
                    'skus' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Sku',
                            'required' => false,
                        ],
                    ],
                    'lmItemId' => [
                        'type' => 'string',
                    ],
                    'canSell' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'fuzzyQuantity' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'title' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'extendProperties' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ProductExtendProperty',
                        ],
                    ],
                    'servicePromises' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'soldQuantity' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'picUrl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'categoryLeafId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'inGroup' => [
                        'type' => 'boolean',
                    ],
                    'productType' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Normal',
                            'Virtual',
                        ],
                    ],
                    'images' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'brandName' => [
                        'type' => 'string',
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'productSpecs' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ProductSpec',
                            'required' => false,
                        ],
                    ],
                    'productStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'taxCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'taxRate' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'limitRules' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LimitRule',
                        ],
                    ],
                    'descPath' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'properties' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ProductProperty',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'ProductDTO' => [
                'type' => 'object',
                'properties' => [
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'purchaserId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'price' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'skuId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ProductExtendProperty' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ProductPageResult' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'products' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Product',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'ProductPrice' => [
                'type' => 'object',
                'properties' => [
                    'fundAmountMoney' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ProductProperty' => [
                'type' => 'object',
                'properties' => [
                    'text' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'values' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'ProductQuery' => [
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'distributorShopId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ProductSaleInfo' => [
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'skus' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SkuSaleInfo',
                            'required' => false,
                        ],
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'canSell' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'fuzzyQuantity' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'productStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'title' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lmItemId' => [
                        'type' => 'string',
                    ],
                    'limitRules' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LimitRule',
                        ],
                    ],
                ],
            ],
            'ProductSaleInfoListQuery' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'productIds' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                    ],
                    'purchaserId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ProductSaleInfoListResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'productSaleInfos' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ProductSaleInfo',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'ProductSaleInfoQuery' => [
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'distributorShopId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ProductSpec' => [
                'type' => 'object',
                'properties' => [
                    'keyId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'key' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'values' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ProductSpecValue',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'ProductSpecValue' => [
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'valueId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'valueAlias' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PurchaseOrderCreateCmd' => [
                'type' => 'object',
                'properties' => [
                    'outerPurchaseOrderId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'buyerId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'deliveryAddress' => [
                        '$ref' => '#/components/schemas/AddressInfo',
                        'required' => true,
                    ],
                    'productList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/ProductDTO',
                            'required' => false,
                        ],
                        'minItems' => 1,
                    ],
                    'extInfo' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'PurchaseOrderCreateResult' => [
                'type' => 'object',
                'properties' => [
                    'purchaseOrderId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'PurchaseOrderRenderQuery' => [
                'type' => 'object',
                'properties' => [
                    'buyerId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'deliveryAddress' => [
                        '$ref' => '#/components/schemas/AddressInfo',
                        'required' => true,
                    ],
                    'productList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/OrderRenderProductDTO',
                            'required' => false,
                        ],
                        'minItems' => 1,
                    ],
                    'extInfo' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'PurchaseOrderRenderResult' => [
                'type' => 'object',
                'properties' => [
                    'addressList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/AddressInfo',
                            'required' => false,
                        ],
                    ],
                    'canSell' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/OrderRenderResult',
                            'required' => false,
                        ],
                    ],
                    'unsellableOrderList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/OrderRenderResult',
                            'required' => false,
                        ],
                    ],
                    'message' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'extInfo' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'PurchaseOrderStatusResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'RefundFeeData' => [
                'type' => 'object',
                'properties' => [
                    'minRefundFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'maxRefundFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'RefundOrderCmd' => [
                'type' => 'object',
                'properties' => [
                    'applyRefundCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'bizClaimType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'goodsStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'leaveMessage' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'applyReasonTextId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'applyReasonTips' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'applyRefundFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'leavePictureLists' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/LeavePictureList',
                            'required' => false,
                        ],
                    ],
                    'orderLineId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'RefundOrderResult' => [
                'type' => 'object',
                'properties' => [
                    'orderLineId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'disputeId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'disputeStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'RefundReason' => [
                'type' => 'object',
                'properties' => [
                    'reasonTextId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'proofRequired' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'reasonTips' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'refundDescRequired' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'RefundRenderCmd' => [
                'type' => 'object',
                'properties' => [
                    'bizClaimType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'goodsStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'orderLineId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'RefundRenderResult' => [
                'type' => 'object',
                'properties' => [
                    'maxRefundFeeData' => [
                        '$ref' => '#/components/schemas/DistributionMaxRefundFee',
                        'required' => false,
                    ],
                    'refundReasonList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/RefundReason',
                            'required' => false,
                        ],
                    ],
                    'bizClaimType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'orderLineId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'RefundResult' => [
                'type' => 'object',
                'properties' => [
                    'refundFee' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'refundFeeData' => [
                        '$ref' => '#/components/schemas/RefundFeeData',
                        'required' => false,
                    ],
                    'applyDisputeDesc' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'refunderTel' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'bizClaimType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'disputeDesc' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sellerRefuseReason' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'refunderName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'applyReason' => [
                        '$ref' => '#/components/schemas/ApplyReason',
                        'required' => false,
                    ],
                    'refunderAddress' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'refunderZipCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'disputeEndTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sellerRefuseAgreementMessage' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'disputeId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'disputeStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'returnGoodLogisticsStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'orderLogisticsStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'disputeCreateTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'orderLineId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sellerAgreeMsg' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Shop' => [
                'type' => 'object',
                'properties' => [
                    'endDate' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'distributorId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'cooperationShops' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/CooperationShop',
                        ],
                    ],
                    'startDate' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'purchaserId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ShopCreateRequest' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 500,
                    ],
                    'shopName' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 100,
                    ],
                    'afterSaleDingTalkId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'operatorDingTalkId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'preSaleDingTalkId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ShopCreateResult' => [
                'type' => 'object',
                'properties' => [
                    'shopStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ShopPageDataResult' => [
                'type' => 'object',
                'properties' => [
                    'endDate' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'cooperationShops' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/CooperationShop',
                        ],
                    ],
                    'startDate' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'purchaserId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ShopPageResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'shopList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ShopPageDataResult',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'ShopStatusChangeRequest' => [
                'type' => 'object',
                'properties' => [
                    'shopStatus' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ShopStatusChangeResult' => [
                'type' => 'object',
                'properties' => [
                    'operate' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'Sku' => [
                'type' => 'object',
                'properties' => [
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'canSell' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'fuzzyQuantity' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuSpecsCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'platformPrice' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'title' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'picUrl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'markPrice' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'skuSpecs' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SkuSpec',
                            'required' => false,
                        ],
                    ],
                    'price' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'barcode' => [
                        'type' => 'string',
                    ],
                    'rankValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'suggestedRetailPrice' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'discountRetailPrice' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'skuAlias' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SkuQueryParam' => [
                'type' => 'object',
                'properties' => [
                    'productId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'skuId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'buyAmount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'SkuSaleInfo' => [
                'type' => 'object',
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'markPrice' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'productId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'canSell' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'price' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'fuzzyQuantity' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'shopId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'title' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'canNotSellReason' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SkuSaleInfoListQuery' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'divisionCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'purchaserId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'skuQueryParams' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/SkuQueryParam',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'SkuSaleInfoListResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'skuSaleInfos' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SkuSaleInfo',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'SkuSpec' => [
                'type' => 'object',
                'properties' => [
                    'keyId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'valueId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'value' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'key' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'valueAlias' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StopDistributionCommand' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'requestUser' => [
                        'type' => 'string',
                    ],
                    'requestTime' => [
                        'type' => 'string',
                    ],
                    'lmShopId' => [
                        'type' => 'string',
                    ],
                    'productId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StopDistributionResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'products' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DistributionProduct',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListPurchaserShops' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPurchaserShop' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaserShops/{purchaserId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'purchaserId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetSelectionProduct' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/{productId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'productId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'purchaserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'divisionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSelectionProducts' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'purchaserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetSelectionProductSaleInfo' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/{productId}/saleInfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'parameters' => [
                [
                    'name' => 'productId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'purchaserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'divisionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSelectionProductSaleInfos' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/products/saleInfo/commands/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/ProductSaleInfoListQuery',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListSelectionSkuSaleInfos' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/skus/saleInfo/commands/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/SkuSaleInfoListQuery',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCategories' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/categories/commands/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/CategoryListQuery',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SearchProducts' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/selection-group/product/command/searchProduct',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'purchaserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'categoryIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'productStatus' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'productName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'productId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'lmItemId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'inGroup' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'inventoryRiskLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'distributionLowPrice' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'distributionHighPrice' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'distributionLowPriceRatio' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'distributionHighPriceRatio' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'lowMarkPrice' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'highMarkPrice' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'lowPrice' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'highPrice' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'platform' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'brandName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'inGroupStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'inGroupEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'modifyStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'modifyEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'createStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'createEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tradeModeAndCredit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'taxRate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'orderBy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'orderDirection' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SelectionGroupAddProduct' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/selection-group/product/command/addProduct',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'purchaserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SelectionGroupRemoveProduct' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/selectionPool/selection-group/product/command/removeProduct',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'purchaserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SplitPurchaseOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/split',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/PurchaseOrderRenderQuery',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RenderPurchaseOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/commands/render',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/PurchaseOrderRenderQuery',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreatePurchaseOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/PurchaseOrderCreateCmd',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetPurchaseOrderStatus' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/purchaseOrders/{purchaseOrderId}/status',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'purchaseOrderId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/{orderId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'orderId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryOrders' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/query',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/OrderPageQuery',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListLogisticsOrders' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/{orderId}/logisticsOrders',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'orderId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ConfirmDisburse' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/orders/commands/confirmDisburse',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/ConfirmDisburseCmd',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RenderRefundOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/commands/render',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/RefundRenderCmd',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateRefundOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/RefundOrderCmd',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CancelRefundOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/{disputeId}/commands/cancel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'disputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetRefundOrder' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/{disputeId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'disputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateGoodsShippingNotice' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/refunds/command/createGoodsShippingNotice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/GoodsShippingNoticeCreateCmd',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryChildDivisionCode' => [
            'path' => '/opensaas-s2b/opensaas-s2b-biz-trade/v2/division/commands/queryChildDivisionCode',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/DivisionQuery',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'linkedmall-distributor.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'linkedmall.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'linkedmall.aliyuncs.com',
        ],
    ],
];