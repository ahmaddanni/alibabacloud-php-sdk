<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ecs-workbench',
        'version' => '2022-02-20',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'LoginInstance' => [
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
                    'name' => 'InstanceLoginInfo',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'InstanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NetworkAccessMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Host' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Port' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Protocol' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Username' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AuthenticationType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Password' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Certificate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PassPhrase' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ContainerInfo' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'ClusterId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ClusterName' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Namespace' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Deployment' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'PodName' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ContainerName' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Headers' => [
                                                'type' => 'object',
                                                'required' => false,
                                            ],
                                            'Endpoint' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'NotificationRecipientUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NotificationEventTypes' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NotificationRetryLimit' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'NotificationRetryIntervalSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'SessionControl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OperationDisableSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'AudioMuteSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'VideoFreezeSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'FixedHeight' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'FixedWidth' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'ExpireTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DurationSeconds' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'DockerExec' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DockerContainerName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CredentialToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'LoginByInstanceCredential' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'LoginByInstanceShortcut' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ShortcutToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EncryptionOptions' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'Mode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'KMSKeyId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserAccount',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ParentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'AccountId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'AccountPlatform' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EmpId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'LoginLimit' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'AccountStructure' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'LoginName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DurationSeconds' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ExpireTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'PartnerInfo',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'PartnerId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PartnerName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListInstanceRecords' => [
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
                    'name' => 'InstanceId',
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
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ViewInstanceRecords' => [
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
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TerminalSessionToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetInstanceRecordConfig' => [
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
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SetInstanceRecordConfig' => [
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
                    'name' => 'Enabled',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RecordStorageTarget',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExpirationDays',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTerminalCommands' => [
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
                    'name' => 'TerminalSessionToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
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
            'endpoint' => 'ecs-workbench.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ecs-workbench.cn-beijing.aliyuncs.com',
        ],
    ],
];