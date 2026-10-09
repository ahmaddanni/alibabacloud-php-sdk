<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Gwlb',
        'version' => '2024-04-15',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeRegions' => [
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
                    'name' => 'AcceptLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeZones' => [
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
                    'name' => 'AcceptLanguage',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLoadBalancer' => [
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
                    'name' => 'AddressIpVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'LoadBalancerName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'VSwitchId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ZoneId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
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
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'UpdateLoadBalancerAttribute' => [
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
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalancerName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
                    'name' => 'TrafficMode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLoadBalancerZones' => [
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
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'VSwitchId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ZoneId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'DeleteLoadBalancer' => [
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
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'ListLoadBalancers' => [
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
                    'name' => 'ZoneIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'VpcIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'AddressIpVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'LoadBalancerStatus',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerBusinessStatus',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerNames',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'TrafficMode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
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
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Skip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLoadBalancerAttribute' => [
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
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateServerGroup' => [
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
                    'name' => 'ServerGroupType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Instance',
                            'Ip',
                        ],
                    ],
                ],
                [
                    'name' => 'ServerGroupName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'GENEVE',
                        ],
                    ],
                ],
                [
                    'name' => 'Scheduler',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '5TCH',
                            '3TCH',
                            '2TCH',
                        ],
                    ],
                ],
                [
                    'name' => 'ServerFailoverMode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'NoRebalance',
                            'Rebalance',
                        ],
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConnectionDrainConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ConnectionDrainEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ConnectionDrainTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'HealthCheckConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'HealthCheckConnectPort' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HealthCheckConnectTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HealthCheckDomain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'HealthCheckHttpCode' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'http_2xx',
                                        'http_3xx',
                                        'http_4xx',
                                        'http_5xx',
                                    ],
                                ],
                            ],
                            'HealthCheckInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HealthCheckPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckProtocol' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'TCP',
                                    'HTTP',
                                ],
                            ],
                            'HealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'UnhealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
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
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'UpdateServerGroupAttribute' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ServerGroupName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Scheduler',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '5TCH',
                            '3TCH',
                            '2TCH',
                        ],
                    ],
                ],
                [
                    'name' => 'ServerFailoverMode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'NoRebalance',
                            'Rebalance',
                        ],
                    ],
                ],
                [
                    'name' => 'ConnectionDrainConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ConnectionDrainEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ConnectionDrainTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'HealthCheckConfig',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'HealthCheckConnectPort' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HealthCheckConnectTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HealthCheckDomain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'HealthCheckHttpCode' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'http_2xx',
                                        'http_3xx',
                                        'http_4xx',
                                        'http_5xx',
                                    ],
                                ],
                            ],
                            'HealthCheckInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'HealthCheckPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckProtocol' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'TCP',
                                    'HTTP',
                                ],
                            ],
                            'HealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'UnhealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'DeleteServerGroup' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'AddServersToServerGroup' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ServerId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ServerIp' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServerType' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        'Ecs',
                                        'Eni',
                                        'Eci',
                                        'Ip',
                                    ],
                                ],
                            ],
                        ],
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'RemoveServersFromServerGroup' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ServerId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ServerIp' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServerType' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        'Ecs',
                                        'Eni',
                                        'Eci',
                                        'Ip',
                                    ],
                                ],
                            ],
                        ],
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'ListServerGroups' => [
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
                    'name' => 'ServerGroupIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ServerGroupNames',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ServerGroupType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Instance',
                            'Ip',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
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
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Skip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListServerGroupServers' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ServerIps',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Skip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateListener' => [
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
                    'name' => 'LoadBalancerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListenerDescription',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TcpIdleTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
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
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'UpdateListenerAttribute' => [
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
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListenerDescription',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TcpIdleTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'DeleteListener' => [
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
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'ListListeners' => [
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
                    'name' => 'ListenerIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'LoadBalancerIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
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
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Skip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetListenerAttribute' => [
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
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetListenerHealthStatus' => [
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
                    'name' => 'ListenerId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'Skip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'Status',
                                        'ReasonCode',
                                        'ServerId',
                                        'ServerIp',
                                    ],
                                ],
                                'Values' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'minItems' => 1,
                                    'maxItems' => 20,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'TagResources' => [
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
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'UntagResources' => [
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
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
        'ListTagResources' => [
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
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'flat',
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
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'MoveResourceGroup' => [
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
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'loadbalancer',
                            'servergroup',
                        ],
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
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
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'gwlb.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'gwlb.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'gwlb.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'gwlb.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'gwlb.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'gwlb.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'gwlb.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'gwlb.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'gwlb.ap-southeast-3.aliyuncs.com',
        ],
    ],
];