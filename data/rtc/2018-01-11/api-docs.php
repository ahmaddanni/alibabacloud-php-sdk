<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'rtc',
        'version' => '2018-01-11',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ModifyApp' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeApps' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '2.0',
                            '3.0',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppKey' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAppLayout' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Layout',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 100,
                            ],
                            'Panes' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ZOrder' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '2',
                                        ],
                                        'X' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'Y' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'Height' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'Width' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'PaneId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '15',
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyAppLayout' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Layout',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 100,
                            ],
                            'Panes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ZOrder' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '2',
                                        ],
                                        'X' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'Y' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'Height' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'Width' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1',
                                        ],
                                        'PaneId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '15',
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'LayoutId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAppLayout' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Layout',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'LayoutId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppLayouts' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'LayoutId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSystemLayoutList' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'DescribeAppCallStatus' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppCallbackStatus' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAllCallback' => [
            'methods' => [
                'get',
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
            'parameters' => [],
        ],
        'DescribeCallbacks' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAppCallbackSecretKey' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyCallbackMeta' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Conf' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubEvent' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'maxItems' => 20,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartCategoryCallback' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopCategoryCallback' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Callback',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeChannels' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 8,
                        'maxLength' => 11,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
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
        'StopChannel' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelAllUsers' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelUser' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannel' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveUsers' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Users',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 30,
                    ],
                ],
            ],
        ],
        'DescribeAppRecordStatus' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppRecordStatus' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAppRecordTemplate' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RecordTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FilePrefix' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FileSplitInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1800',
                                'maximum' => '20000',
                            ],
                            'DelayStopTime' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '180',
                                'maximum' => '300',
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                    '60',
                                    '61',
                                ],
                            ],
                            'Formats' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 1,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppRecordTemplate' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RecordTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FilePrefix' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FileSplitInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1800',
                                'maximum' => '20000',
                            ],
                            'DelayStopTime' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '180',
                                'maximum' => '300',
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                    '60',
                                    '61',
                                ],
                            ],
                            'Formats' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 1,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAppRecordTemplate' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppRecordTemplates' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeCloudRecordStatus' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAppRecordingFiles' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                    ],
                ],
            ],
        ],
        'StartCloudRecord' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'ReservePaneForNoCameraUser',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ShowDefaultBackgroundOnMute',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubHighResolutionStream',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartWithoutChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartWithoutChannelWaitTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Annotation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'disable',
                            'enable',
                        ],
                    ],
                ],
                [
                    'name' => 'StorageConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Vendor' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1',
                            ],
                            'Region' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Bucket' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                            'AccessKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                            'SecretKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                            'Endpoint' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'VideoOrder' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'cameraFirst',
                                        'screenFirst',
                                    ],
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'video',
                                        'camera',
                                        'screen',
                                        'whiteboard',
                                    ],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 128,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Backgrounds' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'PaneBackgroundCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Whiteboard' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'WhiteboardId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'ReservePaneForOfflineUser' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BackgroundCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 128,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'RegionColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'BgColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'LayoutSpecifiedUsers',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'white',
                                    'black',
                                ],
                            ],
                            'Ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'RecordMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'SingleStreamingRecord',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AvMerge' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'SpecifiedStreams' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'StreamType' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'mic',
                                                'camera',
                                                'screen-cast',
                                            ],
                                        ],
                                        'Type' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'white',
                                            ],
                                        ],
                                        'Ids' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'minItems' => 1,
                                            'maxItems' => 16,
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 3,
                            ],
                            'TranscodingParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Audio' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Bitrate' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '64',
                                                    '128',
                                                    '192',
                                                ],
                                            ],
                                            'Codec' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'mp3',
                                                    'aac',
                                                ],
                                            ],
                                            'SampleRate' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '16000',
                                                    '32000',
                                                    '48000',
                                                    '8000',
                                                    '44100',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Container' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'mp3',
                                            'aac',
                                            'mp4',
                                            'ts',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateCloudRecord' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'video',
                                        'camera',
                                        'screen',
                                        'whiteboard',
                                    ],
                                ],
                                'VideoOrder' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'cameraFirst',
                                        'screenFirst',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '15',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'ReservePaneForOfflineUser' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Backgrounds' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'PaneBackgroundCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 128,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '72',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '9',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '1',
                                                'maximum' => '10',
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Whiteboard' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'WhiteboardId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BackgroundCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 128,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '-12',
                                    'maximum' => '12',
                                    'exclusiveMaximum' => true,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'LayoutSpecifiedUsers',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'white',
                                    'black',
                                ],
                            ],
                            'Ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopCloudRecord' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
            ],
        ],
        'DescribeAppLiveStreamStatus' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppLiveStreamStatus' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAppStreamingOutTemplate' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamingOutTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'pattern' => '^\\d+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                    '60',
                                    '61',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyAppStreamingOutTemplate' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamingOutTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'pattern' => '^\\d+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                    '60',
                                    '61',
                                ],
                            ],
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAppStreamingOutTemplate' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamingOutTemplate',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppStreamingOutTemplates' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeStreamingOutStatus' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartStreamingOut' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 1024,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'ReservePaneForNoCameraUser',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ShowDefaultBackgroundOnMute',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubHighResolutionStream',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartWithoutChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartWithoutChannelWaitTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Annotation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'disable',
                            'enable',
                        ],
                    ],
                ],
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'VideoOrder' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'cameraFirst',
                                        'screenFirst',
                                    ],
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [],
                                    'pattern' => '^\\d+$',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Backgrounds' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'PaneBackgroundCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Whiteboard' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'WhiteboardId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'ReservePaneForOfflineUser' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BackgroundCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'RegionColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'BgColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'LayoutSpecifiedUsers',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'white',
                                    'black',
                                ],
                            ],
                            'Ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SpecMixedUserList',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 25,
                    ],
                ],
            ],
        ],
        'UpdateStreamingOut' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'VideoOrder' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'cameraFirst',
                                        'screenFirst',
                                    ],
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'video',
                                        'camera',
                                        'screen',
                                        'whiteboard',
                                    ],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '1',
                                                'maximum' => '10',
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 128,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '9',
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '255',
                                                    ],
                                                ],
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '72',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '15',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Backgrounds' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '1',
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'PaneBackgroundCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                                'minimum' => '0',
                                                'exclusiveMinimum' => true,
                                                'maximum' => '1',
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                                'maximum' => '100',
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                                'minLength' => 1,
                                                'maxLength' => 1024,
                                            ],
                                            'Display' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'streamOnly',
                                                    'backup',
                                                    'always',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Whiteboard' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'WhiteboardId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'ReservePaneForOfflineUser' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BackgroundCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'exclusiveMinimum' => true,
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 1024,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'minLength' => 1,
                                    'maxLength' => 128,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '10',
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '72',
                                ],
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '-12',
                                    'maximum' => '12',
                                    'exclusiveMaximum' => true,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '255',
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '100',
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '9',
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '1',
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'RegionColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'BgColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'LayoutSpecifiedUsers',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'white',
                                    'black',
                                ],
                            ],
                            'Ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SpecMixedUserList',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 25,
                    ],
                ],
            ],
        ],
        'StopStreamingOut' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
            ],
        ],
        'CreateCloudNotePhrases' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Phrase',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 30,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 200,
                            ],
                            'WordWeights' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Word' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 300,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyCloudNotePhrases' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Phrase',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 30,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 200,
                            ],
                            'WordWeights' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Word' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'minLength' => 1,
                                        ],
                                        'Weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '-6',
                                            'maximum' => '5',
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 300,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeCloudNotePhrases' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 30,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteCloudNotePhrases' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Phrase',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartCloudNote' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
                [
                    'name' => 'StorageConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Vendor' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1',
                            ],
                            'Region' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Bucket' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                            'AccessKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                            'SecretKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'cn',
                            'en',
                            'ja',
                            'yue',
                            'ko',
                            'de',
                            'fr',
                            'ru',
                            'multilingual',
                            'es',
                            'vi',
                            'it',
                            'sv',
                            'cs',
                            'pl',
                            'th',
                            'fi',
                            'hi',
                            'id',
                            'pt',
                            'ar',
                            'fil',
                            'ms',
                            'tr',
                            'hu',
                            'lo',
                            'pt-br',
                            'es-ar',
                            'es-mx',
                        ],
                    ],
                ],
                [
                    'name' => 'LanguageHints',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'enum' => [
                                'cn',
                                'en',
                                'ja',
                                'ko',
                                'de',
                                'fr',
                                'ru',
                                'es',
                                'vi',
                                'it',
                                'sv',
                                'cs',
                                'pl',
                                'th',
                                'fi',
                                'hi',
                                'id',
                                'pt',
                                'ar',
                                'fil',
                                'ms',
                                'tr',
                                'hu',
                                'lo',
                                'pt-br',
                                'es-ar',
                                'es-mx',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Transcription',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'DiarizationEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'SpeakerCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enum' => [
                                    '0',
                                    '2',
                                ],
                            ],
                            'TranscriptionLevel' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enum' => [
                                    '1',
                                    '2',
                                ],
                            ],
                            'PhraseId' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 50,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AutoChapters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'MeetingAssistance',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'MeetingAssistanceType' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        'Actions',
                                        'KeyInformation',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Summarization',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Type' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        'Paragraph',
                                        'Conversational',
                                        'QuestionsAnswering',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'TextPolish',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ServiceInspection',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'SceneIntroduction' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 1024,
                            ],
                            'InspectionIntroduction' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 1024,
                            ],
                            'InspectionContents' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Title' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                                'maxItems' => 100,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CustomPrompt',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'CustomPromptContents' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Prompt' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Model' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'tingwu-turbo',
                                                'tingwu-plus',
                                                'qwen-max',
                                            ],
                                        ],
                                        'TransType' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'default',
                                                'chat',
                                            ],
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 3,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'RealtimeSubtitle',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AsrCallback' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Translation' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'TranslateLevel' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'enum' => [
                                            '1',
                                            '2',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopCloudNote' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
            ],
        ],
        'DescribeCloudNotes' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'minLength' => 1,
                            'maxLength' => 55,
                            'pattern' => '^[\\w.-]+$',
                        ],
                        'minItems' => 1,
                        'maxItems' => 10,
                    ],
                ],
            ],
        ],
        'DescribeAppAgentFunctionStatus' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppAgentFunctionStatus' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppAgentTemplate' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'ChatMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                        ],
                    ],
                ],
                [
                    'name' => 'InterruptMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                        ],
                    ],
                ],
                [
                    'name' => 'Greeting',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AsrConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'VocabularyId' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 100,
                            ],
                            'WordWeights' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Word' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Lang' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'MaxSentenceSilence' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'VadConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InterruptSpeechDuration' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '0',
                                        'maximum' => '3000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'LlmConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'Vendor' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'aliyun',
                                    'thirdparty',
                                ],
                            ],
                            'Url' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 100,
                            ],
                            'ApiKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 200,
                            ],
                            'Temperature' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'TopP' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'MaxToken' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HistoryDepth' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Prompt' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AgentAppId' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 500,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'TtsConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'Vendor' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'aliyun',
                                    'customized',
                                    'dingmaas',
                                ],
                            ],
                            'ApiKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 200,
                            ],
                            'Voice' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Volume' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Rate' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'Pitch' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'FilterBrackets' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                        '4',
                                        '5',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AgentSilenceConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AlertTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'WebhookTriggerTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Strategy' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '2',
                            ],
                            'Content' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 2500,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AmbientSoundConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SoundId' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 30,
                            ],
                            'Volume' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '100',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'InterruptConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SemanticsInterrupt' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'BackChannelConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserTurnEnd' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppAgentTemplates' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                    ],
                ],
            ],
        ],
        'DeleteAppAgentTemplate' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAppAgentTemplate' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'ChatMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                        ],
                    ],
                ],
                [
                    'name' => 'InterruptMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                        ],
                    ],
                ],
                [
                    'name' => 'Greeting',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AsrConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'MaxSentenceSilence' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'WordWeights' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Word' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Lang' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'VadConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InterruptSpeechDuration' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '0',
                                        'maximum' => '3000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'LlmConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'Vendor' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'aliyun',
                                    'thirdparty',
                                ],
                            ],
                            'Url' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 100,
                            ],
                            'ApiKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 200,
                            ],
                            'Temperature' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'TopP' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'MaxToken' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HistoryDepth' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Prompt' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AgentAppId' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 500,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'TtsConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'Vendor' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'aliyun',
                                    'customized',
                                    'dingmaas',
                                ],
                            ],
                            'ApiKey' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 200,
                            ],
                            'Voice' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Volume' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Rate' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'Pitch' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'FilterBrackets' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                        '4',
                                        '5',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AgentSilenceConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AlertTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'WebhookTriggerTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Strategy' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '2',
                            ],
                            'Content' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 2500,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AmbientSoundConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SoundId' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 30,
                            ],
                            'Volume' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '100',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'InterruptConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SemanticsInterrupt' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'BackChannelConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserTurnEnd' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartAgent' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RtcConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TargetUserIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'UserInactivityTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'VoiceChatConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ChatMode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'InterruptMode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Greeting' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ASRConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SourceLanguage' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SemanticPunctuationEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'MaxSentenceSilence' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'VocabularyId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LanguageHints' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'VadConfig' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'InterruptSpeechDuration' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'LLMConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Vendor' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Model' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ApiKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Temperature' => [
                                        'type' => 'number',
                                        'format' => 'double',
                                        'required' => false,
                                    ],
                                    'TopP' => [
                                        'type' => 'number',
                                        'format' => 'double',
                                        'required' => false,
                                    ],
                                    'MaxToken' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'HistoryDepth' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Prompt' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Url' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Params' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                    'AppId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'TTSConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Vendor' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Model' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ApiKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Voice' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Volume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Rate' => [
                                        'type' => 'number',
                                        'format' => 'double',
                                        'required' => false,
                                    ],
                                    'Pitch' => [
                                        'type' => 'number',
                                        'format' => 'double',
                                        'required' => false,
                                    ],
                                    'FilterBrackets' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'AgentSilenceConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'AlertTimeout' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Strategy' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Content' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'WebhookTriggerTimeout' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'AmbientSoundConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SoundId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Volume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '0',
                                        'maximum' => '100',
                                    ],
                                ],
                            ],
                            'InterruptConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SemanticsInterrupt' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'BackChannelConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'UserTurnEnd' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAgent' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAgent' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VoiceChatConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'InterruptMode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'ChatMode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'NotifyAgent' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Message',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interruptable',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomAttribute',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackgroundMusic',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'format' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'wav',
                                ],
                            ],
                            'url' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopAgent' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAppViewStatus' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAppViewStatus' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAppViewTemplate' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'pattern' => '^\\d+$',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'pattern' => '^\\d+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                    '60',
                                    '61',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyAppViewTemplate' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LayoutIds' => [
                                'type' => 'array',
                                'required' => true,
                                'pattern' => '^\\d+$',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'pattern' => '^\\d+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                            'MediaEncode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '54',
                                    '53',
                                    '52',
                                    '10',
                                    '20',
                                    '22',
                                    '23',
                                    '30',
                                    '31',
                                    '24',
                                    '25',
                                    '26',
                                    '27',
                                    '28',
                                    '32',
                                    '33',
                                    '34',
                                    '35',
                                    '36',
                                    '37',
                                    '38',
                                    '39',
                                    '40',
                                    '41',
                                    '42',
                                    '43',
                                    '0',
                                    '60',
                                    '61',
                                ],
                            ],
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeAppViewTemplates' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Condition',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAppViewTemplate' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RtcSipInviteMember' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Uid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'sip_device',
                            'mcu',
                            'phone',
                        ],
                    ],
                ],
                [
                    'name' => 'ServerAddress',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Registered',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SipDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 200,
                    ],
                ],
                [
                    'name' => 'SipUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SipUserPassword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SipRoomId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SipUri',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SipUserAgent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'polycom',
                            'cisco',
                            'tencent',
                            'zoom',
                            'pstn',
                        ],
                    ],
                ],
                [
                    'name' => 'CallNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 30,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 100,
                    ],
                ],
            ],
        ],
        'RtcCancelSipInvite' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 120,
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'sip_device',
                            'mcu',
                            'phone',
                        ],
                    ],
                ],
            ],
        ],
        'StartView' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '1',
                            '2',
                            '3',
                        ],
                    ],
                ],
                [
                    'name' => 'StartWithoutChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartWithoutChannelWaitTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '-1',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'BgColor',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'R' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                            'G' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                            'B' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '255',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ViewSubscribers',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'ViewContent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'main',
                            'screen-cast',
                        ],
                    ],
                ],
            ],
        ],
        'StopView' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
            ],
        ],
        'RtcSipMute' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Operations',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'Path' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        '/media/audio/status',
                                    ],
                                ],
                                'Op' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'OperationId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Value' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Status' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'inactive',
                                                'active',
                                            ],
                                        ],
                                    ],
                                ],
                                'Ids' => [
                                    'type' => 'array',
                                    'required' => true,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'minItems' => 1,
                                    'maxItems' => 16,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 5,
                    ],
                ],
            ],
        ],
        'ModifyViewLayout' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                        'pattern' => '^[\\w.-]+$',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 55,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [],
                                ],
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'PaneImageCropMode' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'enum' => [
                                                    '1',
                                                    '2',
                                                    '3',
                                                ],
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'BoxBorderw' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'R' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'B' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'G' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'HasBox' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => true,
                                            ],
                                            'Texture' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'Layer' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Font' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BoxAlpha' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 3,
                                ],
                                'PaneCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'PaneId' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [],
                                    'pattern' => '^\\d+$',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BackgroundCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Images',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'ImageCropMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '1',
                                        '2',
                                        '3',
                                    ],
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Texts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Texture' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'BoxBorderw' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Zone' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'R' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'B' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'G' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'HasBox' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'Layer' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Font' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BoxAlpha' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'LayoutSpecifiedUsers',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'white',
                                    'black',
                                ],
                            ],
                            'Ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'minItems' => 1,
                                'maxItems' => 16,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyStreamingProperty' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z_-]+$',
                    ],
                ],
                [
                    'name' => 'ViewSubscribers',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'ViewContent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeCallList' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeCall' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtDataType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryExpInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribePubUserListBySubUser' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeEndPointEventList' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserIdList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeEndPointMetricData' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PubUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PubCallIdList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Metrics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQoeMetricData' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelOverallData' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeChannelDistributionStatData' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelAreaDistributionStatData' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ParentArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeChannelTopPubUserList' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeChannelUserMetrics' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DestroyedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeUsageOverallData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Types',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeUsageDistributionStatData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeUsageAreaDistributionStatData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ParentArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeUsageOsSdkVersionDistributionStatData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityOverallData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Types',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityDistributionStatData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityAreaDistributionStatData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ParentArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeQualityOsSdkVersionDistributionStatData' => [
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
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisOverallData' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StatDim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisFactorDistributionStat' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisUserList' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FaultTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeFaultDiagnosisUserDetail' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatedTs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FaultType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'QueryCallUserInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateEventSubscribe' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'Users',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'Events',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NeedCallbackAuth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteEventSubscribe' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubscribeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAutoLiveStreamRule' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ChannelIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'ChannelIdPrefixes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PlayDomain',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallBack',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAutoLiveStreamRule' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DisableAutoLiveStreamRule' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EnableAutoLiveStreamRule' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAutoLiveStreamRule' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ChannelIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'ChannelIdPrefixes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PlayDomain',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallBack',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAutoLiveStreamRule' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteChannel' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelParticipants' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'DescribeUserInfoInChannel' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeChannelUsers' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveTerminals' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'TerminalIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 30,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AddRecordTemplate' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'Formats',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OssFilePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileSplitInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DelayStopTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '5',
                        'maximum' => '86400',
                    ],
                ],
                [
                    'name' => 'MnsQueue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HttpCallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableM3u8DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssEndpoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteRecordTemplate' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateRecordTemplate' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'Formats',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 3,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OssFilePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MnsQueue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HttpCallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FileSplitInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DelayStopTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '5',
                        'maximum' => '86400',
                    ],
                ],
                [
                    'name' => 'EnableM3u8DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssEndpoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartRecordTask' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 1,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MixMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopRecordTask' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateRecordTask' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskProfile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRecordTemplates' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TemplateIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRecordFiles' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'TaskIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartMPUTask' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 10,
                                ],
                                'SegmentType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BorderColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Box' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BoxBorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BorderColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'Box' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BoxBorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MixMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamURL',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PayloadType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ReportVad',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RtpExtInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TimeStampRef',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VadInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '1',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'EnhancedParam',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'EnablePortraitSegmentation' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopMPUTask' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateMPUTask' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'LayoutIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'SubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecAudioUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecShareScreenUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UnsubSpecCameraUsers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 64,
                    ],
                ],
                [
                    'name' => 'UserPanes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Images' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Width' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Height' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Url' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Display' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 10,
                                ],
                                'SegmentType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'UserId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Texts' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'FontType' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'FontColor' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Y' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'Text' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ZOrder' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'X' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                            'FontSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'BorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BorderColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Box' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'BoxColor' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'BoxBorderWidth' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                            'Alpha' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                                'minimum' => '0',
                                            ],
                                        ],
                                    ],
                                    'maxItems' => 16,
                                ],
                                'SourceType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'Backgrounds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Watermarks',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Url' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Display' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ClockWidgets',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FontType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'FontColor' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'FontSize' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BorderColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                                'Box' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'BoxColor' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'BoxBorderWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                                'Alpha' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'minimum' => '0',
                                ],
                            ],
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CropMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MediaEncode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MixMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StreamType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMPUTaskStatus' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateMPULayout' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'MajorPane' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AudioMixCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteMPULayout' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LayoutId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyMPULayout' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'Panes',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'MajorPane' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Y' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'PaneId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ZOrder' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'X' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 16,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LayoutId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AudioMixCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeMPULayoutInfoList' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LayoutId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'DescribeRtcDurationData' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '86400',
                            '3600',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRtcUserCntData' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '86400',
                            '3600',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRtcPeakChannelCntData' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '86400',
                            '3600',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRtcChannelList' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TimePoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'sortByStartTime',
                            'sortByStartTimeDesc',
                            'sortByEndTime',
                            'sortByEndTimeDesc',
                        ],
                    ],
                ],
                [
                    'name' => 'ServiceArea',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeRtcChannelMetric' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'TimePoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'rtc.aliyuncs.com',
        ],
    ],
];