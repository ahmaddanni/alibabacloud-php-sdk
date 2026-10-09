<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'starrocks',
        'version' => '2022-10-19',
    ],
    'components' => [
        'schemas' => [
            'InstanceConfigDto' => [
                'type' => 'object',
                'properties' => [
                    'nodeGroupId' => [
                        'type' => 'string',
                    ],
                    'configType' => [
                        'type' => 'string',
                    ],
                    'configKey' => [
                        'type' => 'string',
                    ],
                    'configValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceSpec' => [
                'type' => 'object',
                'properties' => [
                    'cu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'storageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'nodeNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'storagePerformanceLevel' => [
                        'type' => 'string',
                    ],
                    'localStorageInstanceType' => [
                        'type' => 'string',
                    ],
                    'specType' => [
                        'type' => 'string',
                    ],
                    'diskNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateInstanceV1' => [
            'path' => '/webapi/cluster/createV1',
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
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'InstanceName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AdminPassword' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Version' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AutoRenew' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'RunMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'lakehouse',
                                    'shared_nothing',
                                    'shared_data',
                                ],
                            ],
                            'RegionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PackageType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'official',
                                    'trial',
                                ],
                            ],
                            'PayType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'prePaid',
                                    'postPaid',
                                ],
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PricingCycle' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'Month',
                                    'Year',
                                ],
                            ],
                            'VSwitches' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'VswId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ZoneId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'ZoneId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OssAccessingRoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Duration' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Tags' => [
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
                            'ResourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ClientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ObserverNodeGroups' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'cu' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'storageSize' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'storagePerformanceLevel' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'diskNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'residentNodeNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'specType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'localStorageInstanceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'zoneId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'BackendNodeGroups' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'cu' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'storageSize' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'storagePerformanceLevel' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'pl0',
                                                'pl1',
                                                'pl2',
                                                'pl3',
                                            ],
                                        ],
                                        'diskNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                        ],
                                        'residentNodeNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'specType' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'standard',
                                                'ramEnhanced',
                                                'networkEnhanced',
                                                'bigData',
                                                'localSSD',
                                                'cpuEnhanced',
                                            ],
                                        ],
                                        'localStorageInstanceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'zoneId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'FrontendNodeGroups' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'cu' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'storageSize' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'storagePerformanceLevel' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'diskNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'residentNodeNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'specType' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'standard',
                                                'ramEnhanced',
                                            ],
                                        ],
                                        'localStorageInstanceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'zoneId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'PromotionOptionNo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Encrypted' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'KmsKeyId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'GatewayType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AgentNodeGroup' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'cu' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'AutoPay' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'LinkedRamUserName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DlfCatalogName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DlfCatalogType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PrincipalType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RamUserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RestartInstance' => [
            'path' => '/webapi/starrocks/restartCluster',
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
                    'name' => 'FastMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ReleaseInstance' => [
            'path' => '/webapi/cluster/release',
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
        'DescribeInstances' => [
            'path' => '/webapi/starrocks/describeInstances',
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
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
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
                    'name' => 'InstanceStatus',
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
        'DescribeNodeGroups' => [
            'path' => '/webapi/nodegroup/describeNodeGroups',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
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
                    'name' => 'ClusterId',
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
                                'required' => false,
                            ],
                            'componentType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'FE',
                                    'BE',
                                    'CN',
                                    'AGENT',
                                    'OBSERVER',
                                ],
                            ],
                            'nodeGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'nodeGroupName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
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
        'UpgradeVersion' => [
            'path' => '/webapi/starrocks/upgradeVersion',
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
                    'name' => 'TargetVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Minor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FastMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryUpgradableVersions' => [
            'path' => '/webapi/starrocks/queryUpgradableVersions',
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
                    'name' => 'Minor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyNodeNumberPreCheck' => [
            'path' => '/webapi/resourceChange/modifyNodeNumberPreCheck',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '0',
                        'maximum' => '100',
                    ],
                ],
            ],
        ],
        'ModifyNodeNumber' => [
            'path' => '/webapi/resourceChange/modifyNodeNumber',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '0',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'PromotionOptionNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Parallelism',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TerminationGracePeriodSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyCuPreCheck' => [
            'path' => '/webapi/resourceChange/modifyCuPreCheck',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '0',
                        'maximum' => '100',
                        'enum' => [
                            '2',
                            '4',
                            '8',
                            '16',
                            '32',
                            '64',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyDiskPerformanceLevel' => [
            'path' => '/webapi/resourceChange/modifyDiskPerformanceLevel',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'pl0',
                            'pl1',
                            'pl2',
                            'pl3',
                            'eed_standard',
                            'eed_advanced',
                        ],
                    ],
                ],
                [
                    'name' => 'PromotionOptionNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyDiskSize' => [
            'path' => '/webapi/resourceChange/modifyDiskSize',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '0',
                        'maximum' => '65000',
                    ],
                ],
                [
                    'name' => 'PromotionOptionNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FastMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyDiskNumber' => [
            'path' => '/webapi/resourceChange/modifyDiskNumber',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '0',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'FastMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PromotionOptionNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyCu' => [
            'path' => '/webapi/resourceChange/modifyCu',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '4',
                        'maximum' => '64',
                        'enum' => [
                            '4',
                            '8',
                            '16',
                            '32',
                            '64',
                        ],
                    ],
                ],
                [
                    'name' => 'FastMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PromotionOptionNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateServiceLinkedRole' => [
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
            'regionId' => 'cn-beijing',
            'endpoint' => 'starrocks.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'starrocks.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'starrocks.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'starrocks.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'starrocks.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'starrocks.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'starrocks.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'starrocks.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'starrocks.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'starrocks.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'starrocks.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'starrocks.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'starrocks.ap-southeast-5.aliyuncs.com',
        ],
    ],
];