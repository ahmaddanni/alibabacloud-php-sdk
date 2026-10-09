<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Alb',
        'version' => '2020-06-16',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeRegions' => [
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
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeZones' => [
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
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLoadBalancer' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalancerName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeletionProtectionEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModificationProtectionConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Reason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'query',
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
                                'AllocationId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'EipType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'IntranetAddress' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'AddressAllocatedMode',
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
                    'name' => 'LoadBalancerEdition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalancerBillingConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PayType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'BandwidthPackageId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AddressIpVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'GetLoadBalancerAttribute' => [
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
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteLoadBalancer' => [
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
                    'name' => 'LoadBalancerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLoadBalancerAttribute' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalancerName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModificationProtectionConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Reason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateLoadBalancerZones' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'query',
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
                                'EipType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'IntranetAddress' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 10,
                    ],
                ],
            ],
        ],
        'UpdateLoadBalancerEdition' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalancerEdition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateLoadBalancerAddressTypeConfig' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'VSwitchId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ZoneId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AllocationId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'EipType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListLoadBalancers' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerBussinessStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'LoadBalancerNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 11,
                    ],
                ],
                [
                    'name' => 'VpcIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 11,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PayType',
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
                    'name' => 'AddressIpVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ipv6AddressType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DNSName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DisableDeletionProtection' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
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
            ],
        ],
        'EnableDeletionProtection' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
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
            ],
        ],
        'StartShiftLoadBalancerZones' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'query',
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
                        'minItems' => 1,
                        'maxItems' => 1,
                    ],
                ],
            ],
        ],
        'CancelShiftLoadBalancerZones' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'query',
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
                        'minItems' => 1,
                        'maxItems' => 1,
                    ],
                ],
            ],
        ],
        'EnableLoadBalancerIpv6Internet' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DisableLoadBalancerIpv6Internet' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'LoadBalancerJoinSecurityGroup' => [
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
                    'name' => 'SecurityGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'LoadBalancerLeaveSecurityGroup' => [
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
                    'name' => 'SecurityGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateListener' => [
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
                    'name' => 'LoadBalancerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ListenerProtocol',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListenerPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListenerDescription',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RequestTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'IdleTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'GzipEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Http2Enabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CaEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'XForwardedForConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'XForwardedForClientCertClientVerifyAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertClientVerifyEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientCertFingerprintAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertFingerprintEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientCertIssuerDNAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertIssuerDNEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientCertSubjectDNAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertSubjectDNEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientSrcPortEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForProcessingMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForProtoEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForSLBIdEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForSLBPortEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientSourceIpsEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientSourceIpsTrusted' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForHostEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'QuicConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'QuicListenerId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QuicUpgradeEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Certificates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'CertificateId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'CaCertificates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'CertificateId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'DefaultActions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'ForwardGroupConfig' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'ServerGroupTuples' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'ServerGroupId' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'GetListenerAttribute' => [
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
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteListener' => [
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
                    'name' => 'ListenerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListListeners' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ListenerIds',
                    'in' => 'query',
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
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 21,
                    ],
                ],
                [
                    'name' => 'ListenerProtocol',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'StartListener' => [
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
                    'name' => 'ListenerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopListener' => [
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
                    'name' => 'ListenerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateListenerAttribute' => [
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
                    'name' => 'ListenerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ListenerDescription',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RequestTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'IdleTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'GzipEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Http2Enabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CaEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'XForwardedForConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'XForwardedForClientCertClientVerifyAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertClientVerifyEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientCertFingerprintAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertFingerprintEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientCertIssuerDNAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertIssuerDNEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientCertSubjectDNAlias' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForClientCertSubjectDNEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientSrcPortEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForProcessingMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForProtoEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForSLBIdEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForSLBPortEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientSourceIpsEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'XForwardedForClientSourceIpsTrusted' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'XForwardedForHostEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'QuicConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'QuicListenerId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QuicUpgradeEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Certificates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'CertificateId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 2,
                    ],
                ],
                [
                    'name' => 'CaCertificates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'CertificateId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'DefaultActions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'ForwardGroupConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ServerGroupTuples' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'ServerGroupId' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateListenerLogConfig' => [
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
                    'name' => 'ListenerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccessLogRecordCustomizedHeadersEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccessLogTracingConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'TracingEnabled' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'TracingSample' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'TracingType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetListenerHealthStatus' => [
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
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IncludeRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddServersToServerGroup' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Description' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ServerId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServerIp' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServerType' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'RemoteIpEnabled' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateServerGroup' => [
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
                    'name' => 'ServerGroupName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ServerGroupType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Scheduler',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Protocol',
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
                    'name' => 'HealthCheckConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'HealthCheckConnectPort' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '65535',
                            ],
                            'HealthCheckEnabled' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'HealthCheckHost' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckCodes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'HealthCheckHttpVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '50',
                            ],
                            'HealthCheckMethod' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckProtocol' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '300',
                            ],
                            'HealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '2',
                                'maximum' => '10',
                            ],
                            'UnhealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '2',
                                'maximum' => '10',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'StickySessionConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Cookie' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CookieTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '86400',
                            ],
                            'StickySessionEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'StickySessionType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ipv6Enabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UpstreamKeepaliveEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UchConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Value' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ConnectionDrainConfig',
                    'in' => 'query',
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
                    'name' => 'SlowStartConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SlowStartEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'SlowStartDuration' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
                [
                    'name' => 'CrossZoneEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteServerGroup' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                    'name' => 'ServerGroupName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Scheduler',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'HealthCheckConnectPort' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '65535',
                            ],
                            'HealthCheckEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'HealthCheckHost' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckCodes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'HealthCheckHttpVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '50',
                            ],
                            'HealthCheckMethod' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckProtocol' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HealthCheckTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '300',
                            ],
                            'HealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '2',
                                'maximum' => '10',
                            ],
                            'UnhealthyThreshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '2',
                                'maximum' => '10',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'StickySessionConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Cookie' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CookieTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '86400',
                            ],
                            'StickySessionEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'StickySessionType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpstreamKeepaliveEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UchConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Value' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ConnectionDrainConfig',
                    'in' => 'query',
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
                    'name' => 'SlowStartConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SlowStartEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'SlowStartDuration' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CrossZoneEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateServerGroupServersAttribute' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Description' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ServerId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServerIp' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServerType' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListServerGroups' => [
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
                    'name' => 'ServerGroupIds',
                    'in' => 'query',
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
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerGroupType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'ListServerGroupServers' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '1000',
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServerIds',
                    'in' => 'query',
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
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'RemoveServersFromServerGroup' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Servers',
                    'in' => 'query',
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
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ReplaceServersInServerGroup' => [
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
                    'name' => 'ServerGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddedServers',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Description' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
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
                                ],
                                'Weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'RemovedServers',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
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
                                ],
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateRule' => [
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
                    'name' => 'ListenerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RuleActions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'FixedResponseConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Content' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ContentType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'HttpCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'ForwardGroupConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ServerGroupTuples' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'ServerGroupId' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Weight' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ServerGroupStickySession' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Enabled' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Timeout' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'InsertHeaderConfig' => [
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
                                        'ValueType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'Order' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'RedirectConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Host' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'HttpCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Path' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Port' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Protocol' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Query' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'RewriteConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Host' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Path' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Query' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'TrafficLimitConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'QPS' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'PerIpQps' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'TrafficMirrorConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'TargetType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MirrorGroupConfig' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'ServerGroupTuples' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'ServerGroupId' => [
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
                                'RemoveHeaderConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'CorsConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'AllowOrigin' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'AllowMethods' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'AllowHeaders' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'ExposeHeaders' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'AllowCredentials' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MaxAge' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'RuleConditions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'CookieConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
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
                                            'maxItems' => 50,
                                        ],
                                    ],
                                ],
                                'HeaderConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'maxItems' => 50,
                                        ],
                                    ],
                                ],
                                'HostConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'maxItems' => 50,
                                        ],
                                    ],
                                ],
                                'MethodConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'maxItems' => 10,
                                        ],
                                    ],
                                ],
                                'PathConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'maxItems' => 50,
                                        ],
                                    ],
                                ],
                                'QueryStringConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
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
                                            'maxItems' => 50,
                                        ],
                                    ],
                                ],
                                'ResponseStatusCodeConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'ResponseHeaderConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'SourceIpConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
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
                        'minItems' => 1,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'RuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'CreateRules' => [
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
                    'name' => 'ListenerId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'Priority' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'RuleActions' => [
                                    'type' => 'array',
                                    'required' => true,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => true,
                                        'properties' => [
                                            'FixedResponseConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Content' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'ContentType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'HttpCode' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'ForwardGroupConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'ServerGroupTuples' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'object',
                                                            'required' => false,
                                                            'properties' => [
                                                                'ServerGroupId' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'Weight' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'required' => false,
                                                                    'minimum' => '0',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'ServerGroupStickySession' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'type' => 'boolean',
                                                                'required' => false,
                                                            ],
                                                            'Timeout' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'InsertHeaderConfig' => [
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
                                                    'ValueType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'Order' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => true,
                                            ],
                                            'RedirectConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Host' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'HttpCode' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Path' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Port' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Protocol' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Query' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'RewriteConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Host' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Path' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Query' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'Type' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'TrafficLimitConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'QPS' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'PerIpQps' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'TrafficMirrorConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'TargetType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'MirrorGroupConfig' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'ServerGroupTuples' => [
                                                                'type' => 'array',
                                                                'required' => false,
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'required' => false,
                                                                    'properties' => [
                                                                        'ServerGroupId' => [
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
                                            'RemoveHeaderConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'CorsConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'AllowOrigin' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'AllowMethods' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'AllowHeaders' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'ExposeHeaders' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'AllowCredentials' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'MaxAge' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'minItems' => 1,
                                    'maxItems' => 100,
                                ],
                                'RuleConditions' => [
                                    'type' => 'array',
                                    'required' => true,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => true,
                                        'properties' => [
                                            'CookieConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
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
                                                        'maxItems' => 50,
                                                    ],
                                                ],
                                            ],
                                            'HeaderConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'maxItems' => 50,
                                                    ],
                                                ],
                                            ],
                                            'HostConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'maxItems' => 50,
                                                    ],
                                                ],
                                            ],
                                            'MethodConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'maxItems' => 10,
                                                    ],
                                                ],
                                            ],
                                            'PathConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'maxItems' => 50,
                                                    ],
                                                ],
                                            ],
                                            'QueryStringConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
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
                                                        'maxItems' => 50,
                                                    ],
                                                ],
                                            ],
                                            'ResponseHeaderConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ResponseStatusCodeConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Type' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'SourceIpConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
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
                                    'minItems' => 1,
                                    'maxItems' => 100,
                                ],
                                'RuleName' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Direction' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Tag' => [
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
                        'minItems' => 1,
                        'maxItems' => 100,
                    ],
                ],
            ],
        ],
        'DeleteRule' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteRules' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RuleIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 100,
                    ],
                ],
            ],
        ],
        'UpdateRuleAttribute' => [
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
                    'name' => 'RuleId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RuleConditions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'CookieConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
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
                                'HeaderConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'HostConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'MethodConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'PathConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'QueryStringConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
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
                                'Type' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ResponseStatusCodeConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'ResponseHeaderConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Values' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'SourceIpConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Values' => [
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
                        'minItems' => 1,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'RuleActions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'FixedResponseConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Content' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ContentType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'HttpCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'ForwardGroupConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ServerGroupTuples' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'ServerGroupId' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Weight' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ServerGroupStickySession' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Enabled' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Timeout' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'InsertHeaderConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'CoverEnabled' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ValueType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'Order' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'RedirectConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Host' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'HttpCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Path' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Port' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Protocol' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Query' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'RewriteConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Host' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Path' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Query' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'TrafficLimitConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'QPS' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'PerIpQps' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'TrafficMirrorConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'TargetType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MirrorGroupConfig' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'ServerGroupTuples' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'ServerGroupId' => [
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
                                'RemoveHeaderConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'CorsConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'AllowOrigin' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'AllowMethods' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'AllowHeaders' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'ExposeHeaders' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'AllowCredentials' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MaxAge' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 100,
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
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateRulesAttribute' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'Priority' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'RuleName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'RuleActions' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => true,
                                        'properties' => [
                                            'FixedResponseConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Content' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'ContentType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'HttpCode' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'ForwardGroupConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'ServerGroupTuples' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'object',
                                                            'required' => false,
                                                            'properties' => [
                                                                'ServerGroupId' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'Weight' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'required' => false,
                                                                    'minimum' => '0',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'ServerGroupStickySession' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'Enabled' => [
                                                                'type' => 'boolean',
                                                                'required' => false,
                                                            ],
                                                            'Timeout' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'InsertHeaderConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'CoverEnabled' => [
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                    ],
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Value' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'ValueType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'Order' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => true,
                                            ],
                                            'RedirectConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Host' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'HttpCode' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Path' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Port' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Protocol' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Query' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'RewriteConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Host' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Path' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Query' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'Type' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'TrafficLimitConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'QPS' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                    'PerIpQps' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'TrafficMirrorConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'TargetType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'MirrorGroupConfig' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'ServerGroupTuples' => [
                                                                'type' => 'array',
                                                                'required' => false,
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'required' => false,
                                                                    'properties' => [
                                                                        'ServerGroupId' => [
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
                                            'RemoveHeaderConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'CorsConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'AllowOrigin' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'AllowMethods' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'AllowHeaders' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'ExposeHeaders' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'AllowCredentials' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'MaxAge' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'RuleConditions' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => true,
                                        'properties' => [
                                            'CookieConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
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
                                            'HeaderConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'HostConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'MethodConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'PathConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'QueryStringConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
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
                                            'ResponseHeaderConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ResponseStatusCodeConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Type' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'SourceIpConfig' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Values' => [
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
                                'RuleId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListRules' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RuleIds',
                    'in' => 'query',
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
                    'name' => 'ListenerIds',
                    'in' => 'query',
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
                    'name' => 'LoadBalancerIds',
                    'in' => 'query',
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
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
        'AssociateAdditionalCertificatesWithListener' => [
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
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Certificates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'CertificateId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 15,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DissociateAdditionalCertificatesFromListener' => [
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
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Certificates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'CertificateId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 15,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListListenerCertificates' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CertificateType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertificateIds',
                    'in' => 'query',
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
            ],
        ],
        'DetachCommonBandwidthPackageFromLoadBalancer' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BandwidthPackageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AttachCommonBandwidthPackageToLoadBalancer' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BandwidthPackageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DisableLoadBalancerAccessLog' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EnableLoadBalancerAccessLog' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LogProject',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LogStore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateHealthCheckTemplate' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckTemplateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'HealthCheckConnectPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckCodes',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'HealthCheckInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckMethod',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckProtocol',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckHttpVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthyThreshold',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UnhealthyThreshold',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
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
        'GetHealthCheckTemplateAttribute' => [
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
                    'name' => 'HealthCheckTemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteHealthCheckTemplates' => [
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
                    'name' => 'HealthCheckTemplateIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateHealthCheckTemplateAttribute' => [
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
                [
                    'PrivateKey' => [],
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
                    'name' => 'HealthCheckTemplateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckConnectPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckCodes',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'HealthCheckInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '300',
                    ],
                ],
                [
                    'name' => 'HealthCheckPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckMethod',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckProtocol',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckHttpVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthyThreshold',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UnhealthyThreshold',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HealthCheckTemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListHealthCheckTemplates' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'HealthCheckTemplateIds',
                    'in' => 'query',
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
                    'name' => 'HealthCheckTemplateNames',
                    'in' => 'query',
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
                    'name' => 'Tag',
                    'in' => 'query',
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
        'ApplyHealthCheckTemplateToServerGroup' => [
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
                    'name' => 'HealthCheckTemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ServerGroupId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSecurityPolicy' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TLSVersions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
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
                    'name' => 'SecurityPolicyName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Ciphers',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'DeleteSecurityPolicy' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateSecurityPolicyAttribute' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TLSVersions',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Ciphers',
                    'in' => 'query',
                    'style' => 'flat',
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
                [
                    'name' => 'SecurityPolicyName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSecurityPolicies' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'SecurityPolicyNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'SecurityPolicyIds',
                    'in' => 'query',
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
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'ListSecurityPolicyRelations' => [
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
                    'name' => 'SecurityPolicyIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 5,
                    ],
                ],
            ],
        ],
        'ListSystemSecurityPolicies' => [
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
            'parameters' => [],
        ],
        'AddEntriesToAcl' => [
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
                    'name' => 'AclId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AclEntries',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Description' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Entry' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAcl' => [
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
                    'name' => 'AclName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                    ],
                ],
            ],
        ],
        'DeleteAcl' => [
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
                    'name' => 'AclId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAclAttribute' => [
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
                    'name' => 'ClientToken',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AclName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAcls' => [
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
                    'name' => 'AclIds',
                    'in' => 'query',
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
                    'name' => 'AclNames',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'Tag',
                    'in' => 'query',
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
                    ],
                ],
            ],
        ],
        'ListAclEntries' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'AclId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AssociateAclsWithListener' => [
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
                    'name' => 'AclIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AclType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAclRelations' => [
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
                    'name' => 'AclIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 5,
                    ],
                ],
            ],
        ],
        'DissociateAclsFromListener' => [
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
                    'name' => 'AclIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RemoveEntriesFromAcl' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AclId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Entries',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'MoveResourceGroup' => [
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
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListTagKeys' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'in' => 'query',
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
            ],
        ],
        'ListTagValues' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'TagResources' => [
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
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
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
                        'minItems' => 1,
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'UnTagResources' => [
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
                    'in' => 'query',
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
                    'name' => 'TagKey',
                    'in' => 'query',
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
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAsynJobs' => [
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
                    'name' => 'JobIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyCapacityReservation' => [
            'path' => '',
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
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResetCapacityReservation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'enum' => [
                            'true',
                            'false',
                        ],
                    ],
                ],
                [
                    'name' => 'MinimumLoadBalancerCapacity',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CapacityUnits' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeCapacityReservation' => [
            'path' => '',
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
                    'name' => 'LoadBalancerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAScripts' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AScripts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'AScriptName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Enabled' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'ScriptContent' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ExtAttributes' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'AttributeKey' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'AttributeValue' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                        ],
                                    ],
                                ],
                                'AScriptId' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ExtAttributeEnabled' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAScripts' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ListenerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AScripts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'AScriptName' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Position' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Enabled' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'ScriptContent' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ExtAttributes' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'AttributeKey' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'AttributeValue' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'ExtAttributeEnabled' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAScripts' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AScriptIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                        'minItems' => 1,
                        'maxItems' => 10,
                    ],
                ],
            ],
        ],
        'ListAScripts' => [
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ListenerIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'AScriptIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'AScriptNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
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
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'alb.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'alb.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'alb.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-jva',
            'endpoint' => 'alb.cn-zhengzhou-jva.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'alb.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'alb.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'alb.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'alb.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'alb.cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'alb.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'alb.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'alb.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'alb.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan-lr',
            'endpoint' => 'alb.cn-wuhan-lr.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'alb.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'alb.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'alb.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'alb.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'alb.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'alb.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'alb.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'alb.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'alb.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'alb.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'alb.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'alb.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'alb.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'alb.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'alb.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'alb.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'alb.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'alb.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'alb.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'alb.me-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan-acdr-1',
            'endpoint' => 'alb.cn-heyuan-acdr-1.aliyuncs.com',
        ],
        [
            'regionId' => 'na-south-1',
            'endpoint' => 'alb.na-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-southeast-1',
            'endpoint' => 'alb.us-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu-gic-1',
            'endpoint' => 'alb.cn-wulanchabu-gic-1.aliyuncs.com',
        ],
    ],
];