<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'AliGenie',
        'product' => 'AliGenie',
        'version' => 'iap_1.0',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetBusAppConfig' => [
            'path' => '/v1.0/iap/app/config/get',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'originUuid' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'SKILL_ID',
                                    'PACKAGE_NAME',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AppUseTimeReport' => [
            'path' => '/v1.0/iap/vip/use/time/report',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Action' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'StepCode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ResourceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ResourceType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'IsPrivilege' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'VipType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'originUuid' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PullCashier' => [
            'path' => '/v1.0/iap/pull/cashier/',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'originUuid' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'VideoAppReport' => [
            'path' => '/v1.0/iap/vip/use/video/report',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'isLogin' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'isVip' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'startTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'endTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'loginNick' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pkgName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'originUuid' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccountForApp' => [
            'path' => '/v1.0/iap/vip/account/get',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'Phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'originUuid' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPhoneNumber' => [
            'path' => '/v1.0/iap/profile/phoneNumber',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'name' => 'UserInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateReminder' => [
            'path' => '/v1.0/iap/reminder/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'RecurrenceRule' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Year' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Month' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Day' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Hour' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'Minute' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Second' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Freq' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'ONCE',
                                            'DAILY',
                                            'WEEKLY',
                                            'MONTHLY',
                                        ],
                                    ],
                                    'StartDateTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'EndDateTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'DaysOfMonth' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                    'DaysOfWeek' => [
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
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetReminder' => [
            'path' => '/v1.0/iap/reminder/get',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListReminders' => [
            'path' => '/v1.0/iap/reminder/list',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'name' => 'Payload',
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
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateReminder' => [
            'path' => '/v1.0/iap/reminder/update',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'name' => 'Payload',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'RecurrenceRule' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Year' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Month' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Day' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Hour' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'Minute' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Second' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Freq' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'ONCE',
                                            'DAILY',
                                            'WEEKLY',
                                            'MONTHLY',
                                        ],
                                    ],
                                    'StartDateTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'EndDateTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'DaysOfMonth' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                    'DaysOfWeek' => [
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
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteReminder' => [
            'path' => '/v1.0/iap/reminder/delete',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_Token' => [],
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
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
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
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'WakeUpApp' => [
            'path' => '/v1.0/iap/wakeup',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                        'required' => true,
                        'properties' => [
                            'Path' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TargetInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'TargetType' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'DEVICE_UNION_ID',
                                            'DEVICE_OPEN_ID',
                                        ],
                                    ],
                                    'TargetIdentity' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'OrganizationId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'EncodeType' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'PACKAGE_NAME',
                                            'SKILL_ID',
                                        ],
                                    ],
                                    'EncodeKey' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PushNotifications' => [
            'path' => '/v1.0/iap/notifications',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'NotificationUnicastRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SendTarget' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'TargetType' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'DEVICE_UNION_ID',
                                            'DEVICE_OPEN_ID',
                                            'USER_UNION_ID',
                                            'USER_OPEN_ID',
                                        ],
                                    ],
                                    'TargetIdentity' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'MessageTemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlaceHolder' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'TenantInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SubjectId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SendNotifications' => [
            'path' => '/v1.0/iap/general/notifications',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'NotificationUnicastRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SendTarget' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'DeviceId' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'MessageTemplateId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlaceHolder' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'IsDebug' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'TenantInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SubjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PACKAGE_NAME',
                                    'SKILL_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CheckThirdRightSendPlan' => [
            'path' => '/v1.0/iap/business/CheckThirdRightSendPlan',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizGroup',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SupplierId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtendInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CallBackThirdRightSendPlan' => [
            'path' => '/v1.0/iap/business/CallBackThirdRightSendPlan',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizGroup',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SupplierId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GenieOpenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ReceiveStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CardType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ErrorMsg',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtendInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ThirdImmediateMsgPush' => [
            'path' => '/v1.0/iap/thirdImmediateMsgPush',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
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
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TrafficChangeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TrafficChangeTypeDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChangeDetail',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TrafficJourneyIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TrafficSubOrderIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PsgIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'openapi.aligenie.com',
        ],
    ],
];