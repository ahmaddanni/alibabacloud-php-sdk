<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'searchengine',
        'version' => '2021-10-25',
    ],
    'components' => [
        'schemas' => [
            'ErrorResponse' => [
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
        ],
    ],
    'apis' => [
        'ChangeResourceGroup' => [
            'path' => '/openapi/ha3/instances/{instanceId}/actions/change-resource-group',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
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
                            'newResourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'TagResources' => [
            'path' => '/openapi/ha3/resource-tags',
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
                            'resourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceId' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'tag' => [
                                'type' => 'array',
                                'required' => true,
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
                    ],
                ],
            ],
        ],
        'UntagResources' => [
            'path' => '/openapi/ha3/resource-tags',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'resourceId',
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
                    'name' => 'tagKey',
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
                    'name' => 'all',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
            'path' => '/openapi/ha3/resource-tags',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'resourceId',
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreatePublicUrl' => [
            'path' => '/openapi/ha3/instances/{instanceId}/public-url',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeletePublicUrl' => [
            'path' => '/openapi/ha3/instances/{instanceId}/public-url',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyPublicUrlIpList' => [
            'path' => '/openapi/ha3/instances/{instanceId}/public-url-ip-list',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'CreateInstance' => [
            'path' => '/openapi/ha3/instances',
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
                            'chargeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'components' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'code' => [
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
                            'order' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'autoRenew' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'duration' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'pricingCycle' => [
                                        'type' => 'string',
                                        'required' => false,
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
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
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
                            'components' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'code' => [
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
                            'orderType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyPassword' => [
            'path' => '/openapi/ha3/instances/{instanceId}/password',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'username' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'password' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListInstances' => [
            'path' => '/openapi/ha3/instances',
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
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'edition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tags',
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
                    'name' => 'catalog',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataSourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListInstanceSpecs' => [
            'path' => '/openapi/ha3/instances/{instanceId}/specs',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetIndexOnlineStrategy' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}/indexes/{indexName}/online-strategy',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyIndexOnlineStrategy' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}/indexes/{indexName}/online-strategy',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'changeRate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyOnlineConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'nodeName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        'ListOnlineConfigs' => [
            'path' => '/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'nodeName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'domain',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                            'dataSourceInfo' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'buildMode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'generation' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'dataTimeSec' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'processPartitionCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'domain' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'config' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'endpoint' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessKey' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessSecret' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'project' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'partition' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'table' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'namespace' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'path' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ossPath' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'bucket' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'format' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'catalog' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'database' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tag' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tableFormat' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'saroConfig' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'namespace' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tableName' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'autoBuildIndex' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'processParallelNum' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'partition' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ossDataPath' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'partition' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'dataSource' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'buildParallelNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mergeParallelNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'cluster' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'value' => [
                                                'type' => 'string',
                                            ],
                                            'description' => [
                                                'type' => 'string',
                                            ],
                                            'disableModify' => [
                                                'type' => 'boolean',
                                            ],
                                            'isModify' => [
                                                'type' => 'boolean',
                                            ],
                                            'type' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'clusterConfigName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'config' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'desc' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'files' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'operateType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'parentFullPath' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'fileName' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'config' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'content' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'variables' => [
                                                                'type' => 'object',
                                                                'required' => false,
                                                                'additionalProperties' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'description' => [
                                                                            'type' => 'string',
                                                                            'required' => false,
                                                                        ],
                                                                        'disableModify' => [
                                                                            'type' => 'boolean',
                                                                            'required' => false,
                                                                        ],
                                                                        'isModify' => [
                                                                            'type' => 'boolean',
                                                                            'required' => false,
                                                                        ],
                                                                        'type' => [
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
                                                    ],
                                                    'dirName' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'pushMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'extend' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/startIndex',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/stopIndex',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataSource' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'partition' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'dataSourceInfo' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'dataTimeSec' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'processPartitionCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'domain' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'config' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'endpoint' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessKey' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessSecret' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'project' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'partition' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'table' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'namespace' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'path' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ossPath' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'bucket' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'format' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'catalog' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'database' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tag' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tableFormat' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'saroConfig' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'namespace' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tableName' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'autoBuildIndex' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'processParallelNum' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'scene' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'extend' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'buildParallelNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mergeParallelNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BuildIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/actions/build-index',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'dataSourceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataSourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'partition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataTimeSec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'buildMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'generation' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'tag' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'path' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteIndexVersion' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deleteDataSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyIndexVersion' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
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
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'indexName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'version' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'buildDeployId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'partition' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PublishIndexVersion' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyIndexPartition' => [
            'path' => '/openapi/ha3/instances/{instanceId}/index-partition',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'dataSourceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'generation' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'domainName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'indexInfos' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'indexName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'partitionCount' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'parallelNum' => [
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
        ],
        'GetIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetIndexVersion' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListIndexes' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'newMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'catalog',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RecoverIndex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/recover-index',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'dataSourceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'indexName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'generation' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'buildDeployId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateConfigDir' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'dirName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'parentFullPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateConfigFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'fileName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'parentFullPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ossPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteConfigDir' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dirName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'parentFullPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteConfigFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'parentFullPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAdvanceConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'updateTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'desc' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'files' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fullPathName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'isDir' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isTemplate' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'contentType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAdvanceConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyAdvanceConfigFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'variables' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'disableModify' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isModify' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'templateValue' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'funcValue' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'funcClassName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'template' => [
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
            ],
        ],
        'PublishAdvanceConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'desc' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'files' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ossPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'operateType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'parentFullPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fileName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'dirName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'config' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'content' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'variables' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'additionalProperties' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'description' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'disableModify' => [
                                                                'type' => 'boolean',
                                                                'required' => false,
                                                            ],
                                                            'isModify' => [
                                                                'type' => 'boolean',
                                                                'required' => false,
                                                            ],
                                                            'type' => [
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
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAdvanceConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAdvanceConfigFile' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAdvanceConfigDir' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dirName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAdvanceConfigs' => [
            'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'indexName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'newMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSchemas' => [
            'path' => '/openapi/ha3/instances/{instanceId}/schemas',
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
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endpoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'accessKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'accessSecret',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'partition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyDataSourceDeploy' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'generationId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                            'storage' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'endpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'accessKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'accessSecret' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'project' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'partition' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'table' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'namespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'path' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ossPath' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'bucket' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'catalog' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'database' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'tag' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'tableFormat' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'autoBuildIndex' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'processor' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'args' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'resource' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'extend' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'saro' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'path' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'hdfs' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'path' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'odps' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'partitions' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'oss' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'path' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'swift' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'zk' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'topic' => [
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
        'CreateDataSource' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'endpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'accessKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'accessSecret' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'project' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'partition' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'table' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'namespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'path' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ossPath' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'bucket' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'catalog' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'database' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'tag' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'saroConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'namespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'tableName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'autoBuildIndex' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDataSource' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataSource' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDataSources' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDataSourceSchemas' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDateSourceGenerations' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'validStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'domainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataSourceDeploy' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deployName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CloneSqlInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances/{sqlInstanceId}/actions/clone',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sqlInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
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
                            'targetFolderId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFolder' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/folders',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'parent' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateSqlInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'parent' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteSqlInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances/{sqlInstanceId}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sqlInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ExecuteSqlInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances/{sqlInstanceId}/actions/execution',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sqlInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
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
                            'content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'kvpair' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'dynamicParam' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'staticParam' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'params' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'combineParam' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDatabaseSchema' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/tables/{tableName}/schema',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetSqlInstance' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances/{sqlInstanceId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sqlInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDatabases' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateSqlInstanceContent' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances/{sqlInstanceId}/content',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sqlInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
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
                            'content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateSqlInstanceName' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances/{sqlInstanceId}/name',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sqlInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateSqlInstanceParams' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/sql-instances/{sqlInstanceId}/params',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sqlInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
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
                            'kvpair' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'dynamicParam' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'staticParam' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'params' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'combineParam' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteFolder' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/folders/{folderId}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RenameFolder' => [
            'path' => '/openapi/ha3/instances/{instanceId}/sql-studio/databases/{database}/folders/{folderId}/name',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTasks' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tasks',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'start',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'end',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListClusterTasks' => [
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-tasks',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDataSourceTasks' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-source-tasks',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopTask' => [
            'path' => '/openapi/ha3/instances/{instanceId}/stop-task/{fsmId}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'fsmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ForceSwitch' => [
            'path' => '/openapi/ha3/instances/{instanceId}/force-switch/{fsmId}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'fsmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListLogs' => [
            'path' => '/openapi/ha3/instances/{instanceId}/logs',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyNodeConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/node-config',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
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
                            'dataFragmentNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'dataDuplicateNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'minServicePercent' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'published' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'active' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'flowRatio' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDeployGraph' => [
            'path' => '/openapi/ha3/instances/{instanceId}/deploy-graph',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetNodeConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/node-config',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListIndexRecoverRecords' => [
            'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/list-recover-records',
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
                    'name' => 'indexName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPausePolicys' => [
            'path' => '/openapi/ha3/instances/{instanceId}/pause-policies',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyPausePolicy' => [
            'path' => '/openapi/ha3/instances/{instanceId}/pause-policies',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'pauseAll' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'pauseIndex' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'pauseIndexBatch' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'pauseBiz' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'pauseRuntime' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateCluster' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'queryNode' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'number' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'dataNode' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'number' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'partition' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'autoLoad' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveCluster' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyClusterDesc' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyClusterOfflineConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-offline-config',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'dataSourceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataSourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'config' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                            ],
                            'partition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataTimeSec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'buildMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'generation' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pushMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyClusterOnlineConfig' => [
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-online-config',
            'methods' => [
                'put',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'config' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                            ],
                            'clusters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetCluster' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'clusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetClusterRunTimeInfo' => [
            'path' => '/openapi/ha3/instances/{instanceId}/cluster-run-time-info',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListClusterNames' => [
            'path' => '/openapi/ha3/cluster-names',
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
            'parameters' => [],
        ],
        'ListClusters' => [
            'path' => '/openapi/ha3/instances/{instanceId}/clusters',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyAlias' => [
            'path' => '/openapi/ha3/instances/{instanceId}/aliases/{alias}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alias',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'alias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'index' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAliases' => [
            'path' => '/openapi/ha3/instances/{instanceId}/aliases',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAlias' => [
            'path' => '/openapi/ha3/instances/{instanceId}/aliases/{alias}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alias',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAlias' => [
            'path' => '/openapi/ha3/instances/{instanceId}/aliases',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'newMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                            'alias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'index' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateTable' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataProcessorCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'partitionCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'dataSource' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'dataTimeSec' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'autoBuildIndex' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'config' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'endpoint' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessKey' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessSecret' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'project' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'partition' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'table' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'path' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ossPath' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'bucket' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'catalog' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'database' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tag' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tableFormat' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'format' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'rawSchema' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'primaryKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fieldSchema' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'vectorIndex' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'indexName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'vectorField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparseIndexField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparseValueField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'dimension' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'vectorIndexType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'distanceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'namespace' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'advanceParams' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'buildIndexParams' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'searchIndexParams' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'minScanDocCnt' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'linearBuildThreshold' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'dataProcessConfig' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'operator' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'dstField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'srcField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'params' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'vectorModel' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'vectorModal' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'srcFieldConfig' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'ossEndpoint' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'ossBucket' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'uid' => [
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
                            'scene' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyTable' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
            'methods' => [
                'put',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                            'partitionCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'dataSource' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'dataTimeSec' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'autoBuildIndex' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'config' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'endpoint' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessKey' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'accessSecret' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'project' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'partition' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'table' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ossPath' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'bucket' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'catalog' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'database' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tag' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'tableFormat' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'path' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'format' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'rawSchema' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'primaryKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fieldSchema' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'vectorIndex' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'indexName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'vectorField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparseIndexField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparseValueField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'dimension' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'vectorIndexType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'distanceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'namespace' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'advanceParams' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'buildIndexParams' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'searchIndexParams' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'minScanDocCnt' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'linearBuildThreshold' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'dataProcessConfig' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'operator' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'dstField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'srcField' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'params' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'vectorModel' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'vectorModal' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'srcFieldConfig' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'ossEndpoint' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'ossBucket' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'uid' => [
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
                    ],
                ],
            ],
        ],
        'GetTable' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListTables' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'newMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTable' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'Reindex' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/reindex',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'dataTimeSec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'partition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ossDataPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTableGenerations' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTableGeneration' => [
            'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions/{generationId}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'generationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListPostQueryResult' => [
            'path' => '/openapi/ha3/instances/{instanceId}/query',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
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
                    ],
                ],
            ],
        ],
        'ListRestQueryResult' => [
            'path' => '/openapi/ha3/instances/{instanceId}/rest-query',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'indexName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'query' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListVectorQueryResult' => [
            'path' => '/openapi/ha3/instances/{instanceId}/vector-query',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'path',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'queryType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'vectorQueryType',
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
                    ],
                ],
            ],
        ],
        'PushDocuments' => [
            'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/actions/bulk',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dataSourceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'any',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'pkField',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/openapi/ha3/regions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'acceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListQueryResult' => [
            'path' => '/openapi/ha3/instances/{instanceId}/query',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sql',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteModel' => [
            'path' => '/openapi/ha3/instances/{instanceId}/models/{modelName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'modelName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyModel' => [
            'path' => '/openapi/ha3/instances/{instanceId}/models/{modelName}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'modelName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dryRun',
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
                            'content' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'method' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'modelType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'dimension' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'request' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'header' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Authorization' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Content-Type' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'parameters' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'build' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'input_type' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                    'search' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'input_type' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'requestBody' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'urlParams' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'build' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                    ],
                                                    'search' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'response' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'embeddings' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'url' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
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
        'DebugModel' => [
            'path' => '/openapi/ha3/instances/{instanceId}/models/{modelName}/actions/debug',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'modelName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'isOnline',
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
                            'input' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetModel' => [
            'path' => '/openapi/ha3/instances/{instanceId}/models/{modelName}',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'modelName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListModels' => [
            'path' => '/openapi/ha3/instances/{instanceId}/models',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
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
        'CreateModel' => [
            'path' => '/openapi/ha3/instances/{instanceId}/models',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dryRun',
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'content' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'modelType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'dimension' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'url' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'method' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'request' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'header' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Authorization' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Content-Type' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'urlParams' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'build' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                    ],
                                                    'search' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'parameters' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'build' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'input_type' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                    'search' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'input_type' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'requestBody' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'response' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'embeddings' => [
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
        ],
        'ModifySearcherReplica' => [
            'path' => '/openapi/ha3/instances/{instanceId}/replica',
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
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            'replica' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'partition' => [
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
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'searchengine.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'searchengine.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'searchengine.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'searchengine.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'searchengine.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'searchengine.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'searchengine.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'searchengine.eu-central-1.aliyuncs.com',
        ],
    ],
];