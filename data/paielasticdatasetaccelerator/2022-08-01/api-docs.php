<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PAIElasticDatasetAccelerator',
        'version' => '2022-08-01',
    ],
    'components' => [
        'schemas' => [
            'EndpointStatus' => [
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'type' => 'string',
                        'enum' => [
                            'Created',
                            'ResourceAllocating',
                            'ResourceAllocated',
                            'Ready',
                            'Stopping',
                            'Failed',
                            'Stopped',
                        ],
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'Detail' => [
                        '$ref' => '#/components/schemas/EndpointStatusDetail',
                    ],
                ],
            ],
            'EndpointStatusDetail' => [
                'type' => 'object',
                'properties' => [
                    'IpPortMapping' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IpPort',
                        ],
                    ],
                ],
            ],
            'InstanceLifeCycle' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Config' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceStatus' => [
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'type' => 'string',
                        'enum' => [
                            'Created',
                            'Running',
                            'Stopped',
                        ],
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'UsedCapacity' => [
                        'type' => 'string',
                    ],
                    'SlotNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'IpPort' => [
                'type' => 'object',
                'properties' => [
                    'Ip' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Metric' => [
                'type' => 'object',
                'properties' => [
                    'Timestamp' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'SlotLifeCycle' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                        'enum' => [
                            'KeepAlive',
                            'RelativeTime',
                            'AbsoluteTime',
                            'MaximumIdleTime',
                        ],
                    ],
                    'Config' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SlotStatus' => [
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'type' => 'string',
                        'enum' => [
                            'Created',
                            'Preparing',
                            'Loading',
                            'Running',
                            'Succeed',
                            'Failed',
                            'Stopping',
                            'Stopped',
                        ],
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'Detail' => [
                        '$ref' => '#/components/schemas/SlotStatusDetail',
                    ],
                ],
            ],
            'SlotStatusDetail' => [
                'type' => 'object',
                'properties' => [
                    'LoadedFileNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LoadedFileSize' => [
                        'type' => 'string',
                    ],
                    'LoadingTimeCost' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateInstance' => [
            'path' => '/api/v1/instances',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'basic',
                                    'enhanced',
                                    'lj.basic',
                                ],
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
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'maxLength' => 64,
                                        ],
                                    ],
                                ],
                            ],
                            'PaymentType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'PayAsYouGo',
                                    'Subscription',
                                ],
                            ],
                            'Capacity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MaxSlot' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MaxEndpoint' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'StorageType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ProviderType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteInstance' => [
            'path' => '/api/v1/instances/{InstanceId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateInstance' => [
            'path' => '/api/v1/instances/{InstanceId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'MaxSlot' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListInstances' => [
            'path' => '/api/v1/instances',
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
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'basic',
                            'enhanced',
                        ],
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'PayAsYouGo',
                            'Subscription',
                        ],
                    ],
                ],
                [
                    'name' => 'Phase',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Created',
                            'Running',
                            'Stopped',
                        ],
                    ],
                ],
                [
                    'name' => 'SortBy',
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
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
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
        'QueryInstanceMetrics' => [
            'path' => '/api/v1/instances/{InstanceId}/metrics/action/query',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'NetworkReceiveBytesPerSecond',
                            'NetworkTransmitBytesPerSecond',
                            'FrontendThroughputBytes',
                            'FrontendLatencyMicrosecond',
                            'FrontendIops',
                        ],
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
                [
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeInstance' => [
            'path' => '/api/v1/instances/{InstanceId}',
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
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateSlot' => [
            'path' => '/api/v1/slots',
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
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
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
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'maxLength' => 64,
                                        ],
                                    ],
                                ],
                            ],
                            'StorageType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OSS',
                                    'NAS',
                                    'CPFS',
                                ],
                            ],
                            'StorageUri' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Capacity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LifeCycle' => [
                                '$ref' => '#/components/schemas/SlotLifeCycle',
                                'required' => false,
                            ],
                            'IoType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Endpoints' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Type' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'VPC',
                                            ],
                                        ],
                                        'VpcId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'VswitchId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'EndpointIds' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteSlot' => [
            'path' => '/api/v1/slots/{SlotId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopSlot' => [
            'path' => '/api/v1/slots/{SlotId}/action/stop',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateSlot' => [
            'path' => '/api/v1/slots/{SlotId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SlotId',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 64,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
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
                                            'maxLength' => 64,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'maxLength' => 64,
                                        ],
                                    ],
                                ],
                            ],
                            'StorageType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OSS',
                                    'NAS',
                                ],
                            ],
                            'StorageUri' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Capacity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LifeCycle' => [
                                '$ref' => '#/components/schemas/SlotLifeCycle',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'QuerySlotMetrics' => [
            'path' => '/api/v1/slots/{SlotId}/metrics/action/query',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'NetworkTransmitBytesPerSecond',
                            'NetworkReceiveBytesPerSecond',
                            'FrontendThroughputBytes',
                            'FrontendLatencyMicrosecond',
                            'FrontendIops',
                        ],
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
                [
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSlots' => [
            'path' => '/api/v1/slots',
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
                    'name' => 'SlotIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'StorageType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'OSS',
                            'NAS',
                        ],
                    ],
                ],
                [
                    'name' => 'Phase',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Created',
                            'Preparing',
                            'Loading',
                            'Running',
                            'Succeed',
                            'Failed',
                            'Stopping',
                            'Stopped',
                        ],
                    ],
                ],
                [
                    'name' => 'SortBy',
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
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
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
                    'name' => 'EndpointIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StorageUri',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeSlot' => [
            'path' => '/api/v1/slots/{SlotId}',
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
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateEndpoint' => [
            'path' => '/api/v1/endpoints',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'VPC',
                                ],
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VswitchId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteEndpoint' => [
            'path' => '/api/v1/endpoints/{EndpointId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BindEndpoint' => [
            'path' => '/api/v1/endpoints/{EndpointId}/slots/{SlotId}',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UnbindEndpoint' => [
            'path' => '/api/v1/endpoints/{EndpointId}/slots/{SlotId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListEndpoints' => [
            'path' => '/api/v1/endpoints',
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
                    'name' => 'EndpointIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlotIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'VPC',
                        ],
                    ],
                ],
                [
                    'name' => 'SortBy',
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
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
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
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeEndpoint' => [
            'path' => '/api/v1/endpoints/{EndpointId}',
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
                    'name' => 'EndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeComponent' => [
            'path' => '/api/v1/components/{ComponentId}',
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
                    'name' => 'ComponentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RenderTemplate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Values',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
        ],
        'ListComponents' => [
            'path' => '/api/v1/components',
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
                    'name' => 'ComponentIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'Version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
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
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
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
        'CreateTag' => [
            'path' => '/api/v1/tags',
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
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'Instance',
                                    'Slot',
                                ],
                            ],
                            'ResourceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Key' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 64,
                            ],
                            'Value' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 64,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTag' => [
            'path' => '/api/v1/tags',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Instance',
                            'Slot',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                    ],
                ],
            ],
        ],
        'ListTags' => [
            'path' => '/api/v1/tags',
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
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Instance',
                            'Slot',
                        ],
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
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SortBy',
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
                        'enum' => [
                            'Desc',
                            'Asc',
                        ],
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
        'QueryStatistic' => [
            'path' => '/api/v1/statistics/action/query',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Fields',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
        'ReloadSlot' => [
            'path' => '/api/v1/slots/{SlotId}/action/reload',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SlotId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateSlots' => [
            'path' => '/api/v1/batch/slots/create',
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
                            'Slots' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'InstanceId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'maxLength' => 64,
                                        ],
                                        'Description' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'maxLength' => 1024,
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
                                                        'maxLength' => 64,
                                                    ],
                                                    'Value' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'maxLength' => 64,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LifeCycle' => [
                                            '$ref' => '#/components/schemas/SlotLifeCycle',
                                            'required' => false,
                                        ],
                                        'IoType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'StorageType' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'OSS',
                                                'NAS',
                                                'CPFS',
                                            ],
                                        ],
                                        'StorageUri' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Capacity' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'EndpointIds' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'DryRun' => [
                                'type' => 'boolean',
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
            'regionId' => 'cn-beijing',
            'endpoint' => 'paidatasetacc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paidatasetacc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paidatasetacc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paidatasetacc.cn-shenzhen.aliyuncs.com',
        ],
    ],
];