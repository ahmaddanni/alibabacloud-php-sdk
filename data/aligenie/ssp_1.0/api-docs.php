<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'AliGenie',
        'product' => 'AliGenie',
        'version' => 'ssp_1.0',
    ],
    'components' => [
        'schemas' => [
            'LoginStateInfo' => [
                'type' => 'object',
                'properties' => [
                    'ThirdUserIdentifier' => [
                        'type' => 'string',
                    ],
                    'ThirdUserType' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'SceneCode' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'AuthLoginWithThirdUserInfo' => [
            'path' => '/v1.0/ssp/authLoginWithThirdUserInfo',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SceneCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ThirdUserType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ThirdUserIdentifier',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'EcologyOpennessSendVerificationCode' => [
            'path' => '/v1.0/ssp/ecologyOpennessSendVerificationCode',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'FindUserlistToAuthLoginWithPhoneNumber' => [
            'path' => '/v1.0/ssp/findUserlistToAuthLoginWithPhoneNumber',
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
                    'name' => 'SessionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AuthLoginWithAligenieUserInfo' => [
            'path' => '/v1.0/ssp/authLoginWithAligenieUserInfo',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EncryptedAligenieUserIdentifier',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AuthLoginWithAligenieUserInfoGeneratedByPhoneNumber' => [
            'path' => '/v1.0/ssp/authLoginWithAligenieUserInfoGeneratedByPhoneNumber',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AuthLoginWithTaobaoUserInfo' => [
            'path' => '/v1.0/ssp/authLoginWithTaobaoUserInfo',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EncryptedTaobaoUserIdentifier',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EcologyOpennessAuthenticate' => [
            'path' => '/v1.0/ssp/ecologyOpennessAuthenticate',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LoginStateAccessToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EncodeType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAligenieUserInfo' => [
            'path' => '/v1.0/ssp/getAligenieUserInfo',
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
                    'name' => 'LoginStateAccessToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UnbindAligenieUser' => [
            'path' => '/v1.0/ssp/unbindAligenieUser',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LoginStateAccessToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryUserDeviceListByTmeUserId' => [
            'path' => '/v1.0/ssp/queryUserDeviceListByTmeUserId',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TmeUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Sp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'InvalidateThirdPartyAppLoginState' => [
            'path' => '/v1.0/ssp/invalidateThirdPartyAppLoginState',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
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
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
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
                    'name' => 'ThirdPartyAppId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CheckAuthCodeBindForExt' => [
            'path' => '/v1.0/ssp/checkAuthCodeBindForExt',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'EncodeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'PROJECT_ID',
                        ],
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'GetCodeEnhance' => [
            'path' => '/v1.0/ssp/getCodeEnhance',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ChannelInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Channel' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ExtInfo' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'ScanCodeBind' => [
            'path' => '/v1.0/ssp/scanCode',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
                    'name' => 'BindReq',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ClientId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ExtInfo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetUserByDeviceId' => [
            'path' => '/v1.0/ssp/getUserByDeviceId',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'ListDeviceByUserId' => [
            'path' => '/v1.0/ssp/listDeviceByUserId',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'UnbindDevice' => [
            'path' => '/v1.0/ssp/unbindDevice',
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
                    'name' => 'DeviceInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'ListDeviceByUserIdAndChanel' => [
            'path' => '/v1.0/ssp/listDeviceByUserIdAndChanel',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ChannelInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Channel' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ExtInfo' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'GetDeviceIdByIdentity' => [
            'path' => '/v1.0/ssp/getDeviceIdByIdentity',
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
                    'name' => 'EncodeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IdentityType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDeviceIdByIdentities' => [
            'path' => '/v1.0/ssp/listDeviceIdByIdentities',
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
                    'name' => 'EncodeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IdentityType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IdentityIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDeviceBasicInfo' => [
            'path' => '/v1.0/ssp/getDeviceBasicInfo',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'ListDeviceBasicInfo' => [
            'path' => '/v1.0/ssp/listDeviceBasicInfo',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DeviceInfos',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Ids' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
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
        'GetDeviceStatusInfo' => [
            'path' => '/v1.0/ssp/getDeviceStatusInfo',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'GetDeviceTag' => [
            'path' => '/v1.0/ssp/getDeviceTag',
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
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'DeviceControl' => [
            'path' => '/v1.0/ssp/control',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Volume' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Muted' => [
                                'type' => 'boolean',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'GetDeviceSetting' => [
            'path' => '/v1.0/ssp/getDeviceSetting',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Keys',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'GetDeviceStatusDetail' => [
            'path' => '/v1.0/ssp/getDeviceStatusDetail',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Keys',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OPEN_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
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
        'SetDeviceSetting' => [
            'path' => '/v1.0/ssp/setDeviceSetting',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Key',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'any',
                        'required' => false,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'GetJiangSuTelecomData' => [
            'path' => '/v1.0/ssp/GetJiangSuTelecomData',
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
                    'name' => 'Date',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ScgSearch' => [
            'path' => '/v1.0/ssp/scgSearch',
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
                    'name' => 'TopicId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScgFilter',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SortParam' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'SortKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SortText' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SortOrder' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'UseOffSet' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'OffSetParam' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Offset' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'Limit' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'PageParam' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'PageNum' => [
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
        ],
        'AddAndRemoveFavoriteContent' => [
            'path' => '/v1.0/ssp/AddAndRemoveFavoriteContent',
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
                    'name' => 'OpenAddAndRemoveFavoriteContentRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PackageType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OpenSourceRawIdPair' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'RawId' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Source' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'ExtendInfo' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'FavoriteCmd' => [
                                'type' => 'string',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'CreatePlayingList' => [
            'path' => '/v1.0/ssp/CreatePlayingList',
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
                    'name' => 'OpenCreatePlayingListRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PlayFrom' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ContentType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ContentList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'RawId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Source' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'Index' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'NeedAlbumContinued' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PlayMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ExtendInfo' => [
                                'type' => 'object',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'UNION_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
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
        'GetAlbum' => [
            'path' => '/v1.0/ssp/GetAlbum',
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetContent' => [
            'path' => '/v1.0/ssp/GetContent',
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCurrentPlayingItem' => [
            'path' => '/v1.0/ssp/GetCurrentPlayingItem',
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
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'GetCurrentPlayingList' => [
            'path' => '/v1.0/ssp/GetCurrentPlayingList',
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
                    'name' => 'OpenQueryPlayListRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PageNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'IndexControlPlayingList' => [
            'path' => '/v1.0/ssp/IndexControlPlayingList',
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
                    'name' => 'OpenIndexControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Index' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'NeedContentContinued' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ExtendInfo' => [
                                'type' => 'object',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'ListAlbumDetail' => [
            'path' => '/v1.0/ssp/ListAlbumDetail',
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNum',
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
        'ListCateContent' => [
            'path' => '/v1.0/ssp/ListCateContent',
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
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'CateId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'IsAlbum' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'SortBy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SortOrder' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'ASC',
                                    'DESC',
                                ],
                            ],
                            'PageNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
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
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
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
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
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
        'ListCateInfo' => [
            'path' => '/v1.0/ssp/ListCateInfo',
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
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCommonCateFirstFloor' => [
            'path' => '/v1.0/ssp/ListCommonCateFirstFloor',
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
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCommonCateSecondFloor' => [
            'path' => '/v1.0/ssp/ListCommonCateSecondFloor',
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
                    'name' => 'ParentCateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPlayHistory' => [
            'path' => '/v1.0/ssp/ListPlayHistory',
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
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageNum' => [
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
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => true,
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
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRecommendContent' => [
            'path' => '/v1.0/ssp/ListRecommendContent',
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
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Count' => [
                                'type' => 'integer',
                                'format' => 'int32',
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
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
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
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
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
        'PlayAndPauseControl' => [
            'path' => '/v1.0/ssp/PlayAndPauseControl',
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
                    'name' => 'OpenPlayAndPauseControlParam',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'OpenPlayAndPauseCommand' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'Play',
                                    'Pause',
                                ],
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'PlayModeControl' => [
            'path' => '/v1.0/ssp/PlayModeControl',
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
                    'name' => 'OpenPlayModeControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'OpenPlayMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'Repeat',
                                    'Shuffle',
                                    'RepeatOne',
                                    'Normal',
                                ],
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'PreviousAndNextControl' => [
            'path' => '/v1.0/ssp/PreviousAndNextControl',
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
                    'name' => 'OpenControlPlayingListRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Cmd' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IsFromDevice' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ExtendInfo' => [
                                'type' => 'object',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'ProgressControl' => [
            'path' => '/v1.0/ssp/ProgressControl',
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
                    'name' => 'OpenProgressControlRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Progress' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'ExtendInfo' => [
                                'type' => 'object',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'SearchContent' => [
            'path' => '/v1.0/ssp/SearchContent',
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
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Query' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Cate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SubCate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QueryAlbum' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PageNum' => [
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
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
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
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
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
        'CloudPlayer' => [
            'path' => '/v1.0/ssp/cloud/player',
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
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'UNION_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
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
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SongIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'CurPlayIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                ],
                [
                    'name' => 'PlayMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SongId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'MobileRecommend' => [
            'path' => '/v1.0/ssp/mobile/recommend/music',
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
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'UNION_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
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
                    'name' => 'BotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Style',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddSub' => [
            'path' => '/v1.0/ssp/addSub',
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
                    'name' => 'AddSubscriptionInfoRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
                            ],
                            'ScheduleInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'DaysOfWeek' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '1',
                                            'maximum' => '7',
                                            'enum' => [
                                                '1',
                                                '2',
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                                '7',
                                            ],
                                        ],
                                        'minItems' => 1,
                                        'maxItems' => 7,
                                    ],
                                    'Hour' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'minimum' => '0',
                                        'maximum' => '23',
                                    ],
                                    'Minute' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'minimum' => '0',
                                        'maximum' => '59',
                                    ],
                                ],
                            ],
                            'AlbumId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PlayMode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DailyStudyCnt' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [],
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
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
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [],
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'OPEN_ID',
                                    'UNION_ID',
                                ],
                            ],
                            'Id' => [
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
        'DeleteSub' => [
            'path' => '/v1.0/ssp/deleteSub',
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
                    'name' => 'SubId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAlbumIsAdded' => [
            'path' => '/v1.0/ssp/listAlbumIsAdded',
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
                    'name' => 'AlbumIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                        'minItems' => 1,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
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
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
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
        'ListSub' => [
            'path' => '/v1.0/ssp/listSub',
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
                    'name' => 'Page',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PageNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'ListSubAlbum' => [
            'path' => '/v1.0/ssp/listSubAlbum',
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
                    'name' => 'QuerySubscriptionAlbumRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'CategoryId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'AlbumId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Title' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'PageNum' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
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
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Id' => [
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
        'ListSubscriptionAlbumCategory' => [
            'path' => '/v1.0/ssp/listSubscriptionAlbumCategory',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'CategoryName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAlbumDetailById' => [
            'path' => '/v1.0/ssp/getAlbumDetailById',
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
                    'name' => 'AlbumId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetUnreadMessageCount' => [
            'path' => '/v1.0/ssp/getUnreadMessageCount',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
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
        'ListUserMessage' => [
            'path' => '/v1.0/ssp/listUserMessage',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'BeforeTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'ReadMessage' => [
            'path' => '/v1.0/ssp/readMessage',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SendMessage' => [
            'path' => '/v1.0/ssp/sendMessage',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PROJECT_ID',
                                ],
                            ],
                            'EncodeKey' => [
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
                            'Id' => [
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
        'CreateAlarm' => [
            'path' => '/v1.0/ssp/createAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'ScheduleInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'ONCE',
                                            'WEEKLY',
                                            'STATUTORY_WORKING_DAY',
                                        ],
                                    ],
                                    'Once' => [
                                        'type' => 'object',
                                        'required' => false,
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
                                                'required' => false,
                                            ],
                                            'Minute' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Weekly' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'DaysOfWeek' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                            'Hour' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Minute' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'StatutoryWorkingDay' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Hour' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Minute' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'MusicInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'MusicType' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'MusicTypeName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MusicId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'MusicName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MusicUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Volume' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
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
        'DeleteAlarms' => [
            'path' => '/v1.0/ssp/deleteAlarms',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AlarmIds' => [
                                'type' => 'array',
                                'format' => 'int64',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
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
        'GetAlarm' => [
            'path' => '/v1.0/ssp/getAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AlarmId' => [
                                'type' => 'integer',
                                'format' => 'int64',
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
        'ListAlarms' => [
            'path' => '/v1.0/ssp/listAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'CurrentPage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
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
        'ListMusic' => [
            'path' => '/v1.0/ssp/listMusic',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MusicType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'MusicTypeName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MusicId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'MusicName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CurrentPage' => [
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
        'QueryMusicType' => [
            'path' => '/v1.0/ssp/queryMusicType',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
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
        'UpdateAlarm' => [
            'path' => '/v1.0/ssp/updateAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'ScheduleInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'ONCE',
                                            'WEEKLY',
                                            'STATUTORY_WORKING_DAY',
                                        ],
                                    ],
                                    'Once' => [
                                        'type' => 'object',
                                        'required' => false,
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
                                                'required' => false,
                                            ],
                                            'Minute' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Weekly' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'DaysOfWeek' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                            'Hour' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Minute' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'StatutoryWorkingDay' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Hour' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'Minute' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'MusicInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'MusicType' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'MusicTypeName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MusicId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'MusicName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MusicUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'AlarmId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Volume' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DeviceId' => [
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
        'CreateScheduleTask' => [
            'path' => '/v1.0/ssp/CreateScheduleTask',
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
                        'required' => true,
                        'properties' => [
                            'IdempotentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'ScheduleDTO' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'ScheduleType' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'ONCE',
                                            'WEEKLY',
                                            'STATUTORY_DAY',
                                        ],
                                    ],
                                    'Once' => [
                                        'type' => 'object',
                                        'required' => false,
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
                                                'required' => false,
                                            ],
                                            'Minute' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Weekly' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'DaysOfWeek' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                            'Hours' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                            'Minutes' => [
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
                                    'StatutoryWorkingDay' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Hours' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                            'Minutes' => [
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
                                    'ScheduleStartTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'ScheduleEndTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'ActionDTOs' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'customAction' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
        'DeleteScheduleTask' => [
            'path' => '/v1.0/ssp/DeleteScheduleTask',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'UserId' => [
                                'type' => 'string',
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
        'GetScheduleTask' => [
            'path' => '/v1.0/ssp/GetScheduleTask',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
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
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DeviceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
        'GetWeather' => [
            'path' => '/v1.0/ssp/GetWeather',
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
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RequestId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AccessKeyId' => [
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
                                'required' => false,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => false,
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
        'CreatePlayingListOAuth2' => [
            'path' => '/v1.0/ssp/CreatePlayingListOAuth2',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'OAuth 2.0 Bearer Token' => [],
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
                    'name' => 'OpenCreatePlayingListRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PlayFrom' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ContentType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ContentList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'RawId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Source' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'Index' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'NeedAlbumContinued' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PlayMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ExtendInfo' => [
                                'type' => 'object',
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
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'UNION_ID',
                                    'OPEN_ID',
                                ],
                            ],
                            'Id' => [
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
        'ThirdImmediateMsgPush' => [
            'path' => '/v1.0/ssp/thirdImmediateMsgPush',
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
                    'name' => 'Source',
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