<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'retailadvqa',
        'version' => '2023-04-17',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'EditMemberBasicInfo' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlatformType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Mobile' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MemberNickName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MemberName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Birthday' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Country' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Province' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'City' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Area' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Sex' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Avatar' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CalculateMemberLevel' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CurrentGrade' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'CurrentGradeName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MemberId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlatformType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Score' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SerialNo' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'MemberAccountDetailPageQuery' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlatFormType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OuterMemberId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccountType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'StartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SyncMemberBehaviorInfo' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlatFormType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OuterMemberId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ActionType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ActionSubType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ActionStartDate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ActionEndDate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ActionResult' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ActionDuration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'QueryMemberBasicInfo' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlatFormType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OuterMemberId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Mobile' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ChannelCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ChannelOpenId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'MemberPointChange' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlatFormType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OuterMemberId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Quantity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccountType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OperateType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SerialNo' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ChannelCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SyncCardInfo' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TransferId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrderId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'BuyerId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Recipient' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Phone' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OpenId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Nickname' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'HeaderImg' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Gifters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Phone' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OpenId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Nickname' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'HeaderImg' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Theme' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TransferredAt' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ReceivedAt' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PresentDetail' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ItemId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Price' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                        ],
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Count' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'SkuId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'OccurredAt' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddMemberBasicInfo' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OpenMerchantId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlatFormType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MemberName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MemberNickName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Mobile' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MixMobile' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Sex' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Birthday' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Country' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Province' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'City' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Area' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Avatar' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Channels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ChannelCode' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'AppId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ChannelOpenId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ChannelUnionId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Scene' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'maxItems' => 100,
                            ],
                            'GmtCreate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchSaveOrderPop' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Orders',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'ChannelCode' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ChannelOpenId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'OpenOrderId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'buyerOpenUid' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'OpenMerchantId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'PlatformType' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'OrderPayment' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'TotalFee' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'PostFee' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'OrderCreateTime' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'PayTime' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'EndTime' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ShopId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Status' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Feature' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SubOrderModelList' => [
                                    'type' => 'array',
                                    'required' => true,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'OpenSubOrderId' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'TotalFee' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'OrderPayment' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'ProductAmount' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'ProductId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'OutProductId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ProductName' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Status' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'RefundStatus' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Feature' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'OrderTag' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ConsignTime' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ReceiverCity' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ReceiverState' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'DiscountFee' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'AdjustFee' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ItemMealId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ItemMealName' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'BuyerRate' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'SellerRate' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'RefundId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Cid' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'BuyerArea' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'SellerFlag' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'TradeFrom' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Payment' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'ConsignTime' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ReceiverCity' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ReceiverState' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Sid' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'BuyerRate' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SellerRate' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DiscountFee' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AdjustFee' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CommissionFee' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'BuyerArea' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PointFee' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'RealPointFee' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SellerFlag' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'tradeFrom' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'quicka.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'quicka.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'quicka.cn-shanghai.aliyuncs.com',
        ],
    ],
];