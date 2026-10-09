<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'milvus',
        'version' => '2023-10-12',
    ],
    'components' => [
        'schemas' => [
            'InstanceDetail' => [
                'type' => 'object',
                'properties' => [
                    'instanceName' => [
                        'type' => 'string',
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'regionId' => [
                        'type' => 'string',
                    ],
                    'zoneId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'paymentType' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'vpcId' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'runningTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'expireTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'dbVersion' => [
                        'type' => 'string',
                    ],
                    'orderId' => [
                        'type' => 'string',
                    ],
                    'autoBackup' => [
                        'type' => 'boolean',
                    ],
                    'configuration' => [
                        'type' => 'string',
                    ],
                    'ha' => [
                        'type' => 'boolean',
                    ],
                    'multiZoneMode' => [
                        'type' => 'string',
                    ],
                    'encrypted' => [
                        'type' => 'boolean',
                    ],
                    'kmsKeyId' => [
                        'type' => 'string',
                    ],
                    'vSwitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'zoneId' => [
                                    'type' => 'string',
                                ],
                                'vswId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'securityGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'tags' => [
                        'type' => 'array',
                        'items' => [
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
                    ],
                    'components' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'replica' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'cuNum' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'cuType' => [
                                    'type' => 'string',
                                ],
                                'diskSizeType' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateInstance' => [
            'path' => '/webapi/instance/create',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'zoneId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'instanceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dbVersion' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vpcId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'paymentType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'paymentDuration' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'paymentDurationUnit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ha' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'dbAdminPassword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoBackup' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'multiZoneMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'encrypted' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'kmsKeyId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vSwitchIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'zoneId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'vswId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'components' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'type' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'replica' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'cuNum' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'cuType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'diskSizeType' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'Large',
                                                'Normal',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'configuration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetInstance' => [
            'path' => '/webapi/instance/get',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListInstancesV2' => [
            'path' => '/webapi/instance/list',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '10000',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100000',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteInstance' => [
            'path' => '/webapi/instance/delete',
            'methods' => [
                'delete',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateInstanceName' => [
            'path' => '/webapi/cluster/update_name',
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
                    'name' => 'ClusterName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetInstanceDetail' => [
            'path' => '/webapi/cluster/detail',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListInstances' => [
            'path' => '/webapi/order/list',
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
                    'name' => 'ClusterName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterId',
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
                        'minimum' => '1',
                        'maximum' => '10000',
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
                        'maximum' => '100000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateInstance' => [
            'path' => '/webapi/instance/update',
            'methods' => [
                'put',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'instanceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'instanceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ha' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'autoBackup' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'components' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'type' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'replica' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'cuNum' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyInstanceConfig' => [
            'path' => '/webapi/config/modify_milvus_config',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Reason',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeInstanceConfigs' => [
            'path' => '/webapi/config/describe_milvus_user_config',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAccessControlList' => [
            'path' => '/webapi/milvus/describe_access_control_list',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdatePublicNetworkStatus' => [
            'path' => '/webapi/network/updatePublicNetworkStatus',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ComponentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Proxy',
                        ],
                    ],
                ],
                [
                    'name' => 'PublicNetworkEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Cidr',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAccessControlList' => [
            'path' => '/webapi/milvus/update_access_control_list',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cidr',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AclId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TagResources' => [
            'path' => '/webapi/tags',
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
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RegionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ResourceId' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Tag' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
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
        ],
        'UnTagResources' => [
            'path' => '/webapi/tags',
            'methods' => [
                'delete',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceId',
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
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'json',
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
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeResourceGroup' => [
            'path' => '/webapi/resourceGroup/change',
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
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDefaultRole' => [
            'path' => '/webapi/user/create_default_role',
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
            'parameters' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'milvus.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'milvus.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'milvus.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'milvus.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'milvus.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'milvus.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'milvus.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'milvus.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'milvus.eu-central-1.aliyuncs.com',
        ],
    ],
];