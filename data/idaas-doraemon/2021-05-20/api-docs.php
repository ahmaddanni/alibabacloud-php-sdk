<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'idaas-doraemon',
        'version' => '2021-05-20',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'FetchAccessToken' => [
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
                    'name' => 'MobileExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MobileExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'XClientIp',
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
            ],
        ],
        'CreateAuthenticatorRegistration' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegistrationContext',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateUserAuthenticateOptions' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'BindHashBase64',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAuthenticatorAttribute' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
            ],
        ],
        'GetAuthenticator' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
            ],
        ],
        'ListAuthenticators' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAuthenticatorOpsLogs' => [
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
                    'name' => 'ApplicationExternalId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FromTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ToTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RegisterAuthenticator' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'RegistrationContext',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 3096,
                    ],
                ],
                [
                    'name' => 'RequireChallengeBase64',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserSourceIp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LogParams',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'VerifyUserAuthentication' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticationContext',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RequireChallengeBase64',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RequireBindHashBase64',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserSourceIp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LogTag',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LogParams',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeregisterAuthenticator' => [
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ServiceInvoke' => [
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
                    'name' => 'MobileExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MobileExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DoraemonAction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TestModel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'XClientIp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPwnedPasswords' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PrefixHexPasswordSha1Hash',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'VerifyIdToken' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'JwtIdToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListCostUnitOrders' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'BeginDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FinalDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
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
            ],
        ],
        'ListOrderConsumeStatisticRecords' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AliOrderCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StatisticTimeMin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StatisticTimeMax',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
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
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QuerySmsReports' => [
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
                    'name' => 'EventId',
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
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
    ],
];