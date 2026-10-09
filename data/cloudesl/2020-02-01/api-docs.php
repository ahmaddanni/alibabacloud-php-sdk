<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cloudesl',
        'version' => '2020-02-01',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'BindEslDevice' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ItemBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EslBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Shelf',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Layer',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Column',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LayoutId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ContainerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ContainerName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LayoutName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UnbindEslDevice' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'EslBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ItemBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Column',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Shelf',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Layer',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ContainerName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateEslDeviceLight' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LedColor',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Frequency',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ItemBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LightUpTime',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EslBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeBinders' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ItemBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EslBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ItemTitle',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeEslDevice' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'FromDate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ToDate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
        ],
        'DescribeEslDevices' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TypeEncode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ToBatteryLevel',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EslStatus',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EslBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FromBatteryLevel',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateStore' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ParentId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserStoreCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TimeZone',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BarCodeEncode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                ],
            ],
        ],
        'DeleteStore' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateStore' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserStoreCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BarCodeEncode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                ],
            ],
        ],
        'UpdateStoreConfig' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NotificationSilentTimes',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableNotification',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NotificationWebHook',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubscribeContents',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeStores' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserStoreCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ToDate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FromDate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeStoreConfig' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteItem' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ItemBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UnbindEslDevice',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BatchInsertItems' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SyncByItemId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ItemInfo',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'ActionPrice' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'ItemTitle' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'BrandName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SourceCode' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PriceUnit' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ForestFirstId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureF' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureA' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureK' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'TemplateSceneId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureD' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'MemberPrice' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ModelNumber' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PromotionStart' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CategoryName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureE' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SuggestPrice' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'SaleSpec' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PromotionText' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PromotionReason' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Rank' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureG' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SalesPrice' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'CustomizeFeatureH' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'OriginalPrice' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'CustomizeFeatureI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ProductionPlace' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureB' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ItemShortTitle' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureN' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'BeMember' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'TaxFee' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'InventoryStatus' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ItemPicUrl' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SupplierName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureL' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'EnergyEfficiency' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureC' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ItemId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Manufacturer' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Material' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureJ' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureO' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureP' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureQ' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureR' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureS' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureT' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureU' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureV' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureW' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureX' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureY' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureZ' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SkuId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'CustomizeFeatureM' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'BePromotion' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BeSourceCode' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'ForestSecondId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ItemQrCode' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ItemInfoIndex' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'PromotionEnd' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ItemBarCode' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'BeClearance' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 500,
                    ],
                ],
            ],
        ],
        'DescribeItems' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ItemTitle',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SkuId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ItemBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ItemId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BePromotion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddUser' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteUser' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AssignUser' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Stores',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UnassignUser' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeUserLog' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ItemShortTitle',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OperationType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EslBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FromDate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ItemBarCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ToDate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LogId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OperationStatus',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeUsers' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUser' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddApDevice' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApMac',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SerialNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteApDevice' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ApMac',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ActivateApDevice' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ApMac',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeApDevices' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'StoreId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApMac',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Model',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BeActivate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ApplyCompanyTemplateVersionToStores' => [
            'methods' => [
                'get',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TemplateVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Stores',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeStoreByTemplateVersion' => [
            'methods' => [
                'get',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TemplateVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeCompanyTemplateVersions' => [
            'methods' => [
                'get',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeEslModelByTemplateVersion' => [
            'methods' => [
                'get',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TemplateVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeTemplateByModel' => [
            'methods' => [
                'get',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'EslSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeAvailableEslModels' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ModelId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '1000',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
            ],
        ],
        'DeleteCompanyTemplate' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddCompanyTemplate' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtraParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EslSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 0,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'Layout',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '2',
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IfPromotion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IfSourceCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IfDefault',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IfMember',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IfOutOfInventory',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Vendor',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateSceneId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SyncAddMaterial' => [
            'methods' => [
                'post',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryTemplateListByGroupId' => [
            'methods' => [
                'get',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cloudesl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cloudesl.cn-hangzhou.aliyuncs.com',
        ],
    ],
];