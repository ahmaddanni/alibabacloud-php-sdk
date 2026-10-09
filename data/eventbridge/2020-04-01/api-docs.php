<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'eventbridge',
        'version' => '2020-04-01',
    ],
    'components' => [
        'schemas' => [
            'BaiLianAgentTransformParameters' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationId' => [
                        'type' => 'string',
                    ],
                    'Prompt' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ApiKey' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RequestPerMinute' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TokenPerMinute' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DashScopeTransformParameters' => [
                'type' => 'object',
                'properties' => [
                    'Model' => [
                        'type' => 'string',
                    ],
                    'ApiKey' => [
                        'type' => 'string',
                    ],
                    'StructuredOutputJsonSchema' => [
                        'type' => 'string',
                    ],
                    'RequestPerMinute' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TokenPerMinute' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Messages' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Role' => [
                                    'type' => 'string',
                                ],
                                'Form' => [
                                    'type' => 'string',
                                ],
                                'Value' => [
                                    'type' => 'string',
                                ],
                                'Template' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'EmbeddingTransformParameters' => [
                'type' => 'object',
                'properties' => [
                    'EmbeddingModel' => [
                        'type' => 'string',
                    ],
                    'ApiKey' => [
                        'type' => 'string',
                    ],
                    'EmbeddingData' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'SinkApiDestinationParameters' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'HeaderParameters' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'BodyParameters' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'QueryStringParameters' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'SinkBaiLianParameters' => [
                'type' => 'object',
                'properties' => [
                    'Before' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Context' => [
                        'type' => 'any',
                    ],
                    'ApplicationType' => [
                        'type' => 'string',
                    ],
                    'Op' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Partition' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Extend' => [
                        'type' => 'any',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'After' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Offset' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'SinkDataWorksTriggerParameters' => [
                'type' => 'object',
                'properties' => [
                    'Enable' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SinkHttpsParameters' => [
                'type' => 'object',
                'properties' => [
                    'URL' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Method' => [
                        'type' => 'string',
                    ],
                    'Body' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Token' => [
                        'type' => 'string',
                    ],
                    'NetworkType' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SinkOSSParameters' => [
                'type' => 'object',
                'properties' => [
                    'BucketName' => [
                        'type' => 'string',
                    ],
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                    ],
                    'RoleArn' => [
                        'type' => 'string',
                    ],
                    'RotateSizeBytes' => [
                        'type' => 'string',
                    ],
                    'RotateIntervalMs' => [
                        'type' => 'string',
                    ],
                    'PathFormat' => [
                        'type' => 'string',
                    ],
                    'CompressionType' => [
                        'type' => 'string',
                    ],
                    'TaskConcurrency' => [
                        'type' => 'string',
                    ],
                    'TimeZone' => [
                        'type' => 'string',
                    ],
                    'SSLEnabled' => [
                        'type' => 'boolean',
                    ],
                    'ContentTransform' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'SinkRabbitMQMetaParameters' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                    ],
                    'VirtualHostName' => [
                        'type' => 'string',
                    ],
                    'Username' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'NetworkType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SinkRabbitMQMsgSyncParameters' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                    ],
                    'VirtualHostName' => [
                        'type' => 'string',
                    ],
                    'Body' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'MessageId' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Properties' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Exchange' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'RoutingKey' => [
                        'type' => 'object',
                        'properties' => [
                            'Form' => [
                                'type' => 'string',
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Template' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'MaxHops' => [
                        'type' => 'string',
                    ],
                    'Username' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'NetworkType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourceMySQLParameters' => [
                'type' => 'object',
                'properties' => [
                    'IncludeSchemaChanges' => [
                        'type' => 'string',
                    ],
                    'User' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'string',
                    ],
                    'SnapshotMode' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'NetworkType' => [
                        'type' => 'string',
                    ],
                    'TableNames' => [
                        'type' => 'string',
                    ],
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'HostName' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourcePostgreSQLParameters' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'HostName' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'User' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'SchemaName' => [
                        'type' => 'string',
                    ],
                    'TableNames' => [
                        'type' => 'string',
                    ],
                    'NetworkType' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'SnapshotMode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourceRabbitMQMetaParameters' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                    ],
                    'VirtualHostName' => [
                        'type' => 'string',
                    ],
                    'Regex' => [
                        'type' => 'string',
                    ],
                    'Username' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'NetworkType' => [
                        'type' => 'string',
                    ],
                    'MaxHops' => [
                        'type' => 'string',
                    ],
                    'OrderConsume' => [
                        'type' => 'string',
                    ],
                    'InnerNameSuffix' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourceRabbitMQMsgSyncParameters' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                    ],
                    'VirtualHostName' => [
                        'type' => 'string',
                    ],
                    'OrderConsume' => [
                        'type' => 'string',
                    ],
                    'BodyDataType' => [
                        'type' => 'string',
                    ],
                    'PrefetchCount' => [
                        'type' => 'string',
                    ],
                    'Username' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'NetworkType' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateEventBus' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'DeleteEventBus' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateEventBus' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'GetEventBus' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListEventBuses' => [
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
                    'name' => 'NamePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
            ],
        ],
        'QueryEvent' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryEventTraces' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryTracedEventByEventId' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventSource',
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
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryTracedEvents' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'EventSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EventType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MatchedRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAliyunOfficialEventSources' => [
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
            'parameters' => [],
        ],
        'ListUserDefinedEventSources' => [
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
                    'name' => 'NamePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
            ],
        ],
        'CreateEventSource' => [
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
                    'name' => 'EventSourceName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LinkedExternalSource',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExternalSourceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'byte',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExternalSourceConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EventBusName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceMNSParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QueueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsBase64Decode' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceRocketMQParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Tag' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Offset' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Timestamp' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'GroupID' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceNetwork' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceVpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceVSwitchIds' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceSecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AuthType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceEndpoint' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceUsername' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstancePassword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceRabbitMQParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VirtualHostName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QueueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceSLSParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Project' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'LogStore' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ConsumePosition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceHttpEventParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Method' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SecurityConfig' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Ip' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Referer' => [
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
                [
                    'name' => 'SourceScheduledEventParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Schedule' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TimeZone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserData' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceKafkaParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ConsumerGroup' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OffsetReset' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MaximumTasks' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Network' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VSwitchIds' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceOSSEventParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'EventTypes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'StsRoleArn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MatchRules' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Prefix' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Suffix' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Name' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'MatchState' => [
                                                'type' => 'boolean',
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
        'DeleteEventSource' => [
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
                    'name' => 'EventBusName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EventSourceName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateEventSource' => [
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
                    'name' => 'EventSourceName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LinkedExternalSource',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExternalSourceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExternalSourceConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EventBusName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceMNSParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QueueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsBase64Decode' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceRocketMQParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Tag' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Offset' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Timestamp' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'GroupID' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceNetwork' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceVpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceVSwitchIds' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceSecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AuthType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceEndpoint' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceUsername' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstancePassword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceRabbitMQParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VirtualHostName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QueueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceSLSParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Project' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'LogStore' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ConsumePosition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceScheduledEventParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Schedule' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TimeZone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserData' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceHttpEventParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Method' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SecurityConfig' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Ip' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Referer' => [
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
                [
                    'name' => 'SourceKafkaParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ConsumerGroup' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OffsetReset' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MaximumTasks' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Network' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VSwitchIds' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'SourceOSSEventParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'EventTypes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'StsRoleArn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MatchRules' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Suffix' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'MatchState' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'Prefix' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Name' => [
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
        'DeleteTargets' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'TargetIds',
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
            ],
        ],
        'PutTargets' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'Targets',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Endpoint' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PushRetryStrategy' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DeadLetterQueue' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Arn' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Network' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'VpcId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'VSwitchIds' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SecurityGroupId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'ErrorsTolerance' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ParamList' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'ResourceKey' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'ConcurrentConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Concurrency' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
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
        'CreateRule' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FilterPattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventTargets',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Endpoint' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PushRetryStrategy' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DeadLetterQueue' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Arn' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Network' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'VpcId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'VSwitchIds' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SecurityGroupId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'ErrorsTolerance' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ParamList' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'ResourceKey' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'ConcurrentConfig' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Concurrency' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
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
        'DeleteRule' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'DisableRule' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'EnableRule' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'UpdateRule' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FilterPattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetRule' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'ListRules' => [
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
                    'name' => 'RuleNamePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListEventStreamings' => [
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
                    'name' => 'NamePrefix',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'repeatList',
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
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'SourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SinkArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteEventStreaming' => [
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
                    'name' => 'EventStreamingName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'PauseEventStreaming' => [
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
                    'name' => 'EventStreamingName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartEventStreaming' => [
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
                    'name' => 'EventStreamingName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetEventStreaming' => [
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
                    'name' => 'EventStreamingName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'UpdateEventStreaming' => [
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
                    'name' => 'EventStreamingName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 255,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FilterPattern',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SourceMNSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'IsBase64Decode' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConsumerGroup' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OffsetReset' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'PublicNetwork',
                                            'Default',
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ValueDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceRocketMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Tag' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Offset' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'GroupID' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Timestamp' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'AuthType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceVpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceVSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceSecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceNetwork' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BodyDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'FilterType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'FilterSql' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topics' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'SourceApacheRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topics' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceMQTTParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BodyDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceDTSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'TaskId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BrokerUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Sid' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InitCheckPoint' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceSLSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RoleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourcePrometheusParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ClusterId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'DataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Labels' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'RoleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExternalLabels' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceCustomizedKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceCustomizedKafkaConnectorParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ConnectorPackageUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConnectorParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Name' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Config' => [
                                                'type' => 'object',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'WorkerParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceApacheKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Bootstraps' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConsumerGroup' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OffsetReset' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ValueDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityProtocol' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslMechanism' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslUser' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslPassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SslTruststoreCertificates' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceOSSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RoleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BucketName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LoadMode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LoadFormat' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceEventBusParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'EventBusName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'EventRuleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceOpenSourceRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Endpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BodyDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'AuthType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceMySQLParameters' => [
                                '$ref' => '#/components/schemas/SourceMySQLParameters',
                                'required' => false,
                            ],
                            'SourcePostgreSQLParameters' => [
                                '$ref' => '#/components/schemas/SourcePostgreSQLParameters',
                                'required' => false,
                            ],
                            'SourceRabbitMQMetaParameters' => [
                                '$ref' => '#/components/schemas/SourceRabbitMQMetaParameters',
                                'required' => false,
                            ],
                            'SourceRabbitMQMsgSyncParameters' => [
                                '$ref' => '#/components/schemas/SourceRabbitMQMsgSyncParameters',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Sink',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SinkMNSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'QueueName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'IsBase64Encode' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkFcParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ServiceName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'FunctionName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Concurrency' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Qualifier' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InvocationType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'DataFormat' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'TargetType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Exchange' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoutingKey' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'QueueName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'MessageId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Properties' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'CompressionType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Headers' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Acks' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Key' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Value' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkApacheKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Bootstraps' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Acks' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Key' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Value' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'CompressionType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityProtocol' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslMechanism' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslUser' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'NetworkType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Headers' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SaslPassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SslTruststoreCertificates' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkRocketMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Properties' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Keys' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Tags' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Network' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'DeliveryOrderType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ShardingKey' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkDorisParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'QueryEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'FeHttpEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'BeHttpEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'UserName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Password' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Database' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Table' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'NetworkType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ConsumeTimestamp' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Group' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkApacheRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ConsumeTimestamp' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Group' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkSLSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Project' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'LogStore' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoleName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ContentType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ContentSchema' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkFnfParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'FlowName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ExecutionName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Input' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoleName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkPrometheusParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'URL' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'HeaderParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'AuthorizationType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Username' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Password' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Data' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'NetworkType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkDataHubParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Project' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'TopicType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'TopicSchema' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoleName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ContentType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ContentSchema' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkCustomizedKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkCustomizedKafkaConnectorParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ConnectorPackageUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConnectorParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Name' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Config' => [
                                                'type' => 'object',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'WorkerParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkDashVectorParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Collection' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ApiKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Operation' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PrimaryKeyId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Partition' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Vector' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'DashVectorSchemaParameters' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Form' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Value' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Template' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                                'Type' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Form' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Value' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Template' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                                'Value' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Form' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Value' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Template' => [
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
                            'SinkOpenSourceRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Endpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'TargetType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Exchange' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'AuthType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'RoutingKey' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'MessageId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Properties' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkBaiLianParameters' => [
                                '$ref' => '#/components/schemas/SinkBaiLianParameters',
                                'required' => false,
                            ],
                            'SinkDataWorksTriggerParameters' => [
                                '$ref' => '#/components/schemas/SinkDataWorksTriggerParameters',
                                'required' => false,
                            ],
                            'SinkHttpsParameters' => [
                                '$ref' => '#/components/schemas/SinkHttpsParameters',
                                'required' => false,
                            ],
                            'SinkApiDestinationParameters' => [
                                '$ref' => '#/components/schemas/SinkApiDestinationParameters',
                                'required' => false,
                            ],
                            'SinkOSSParameters' => [
                                '$ref' => '#/components/schemas/SinkOSSParameters',
                                'required' => false,
                            ],
                            'SinkRabbitMQMetaParameters' => [
                                '$ref' => '#/components/schemas/SinkRabbitMQMetaParameters',
                                'required' => false,
                            ],
                            'SinkRabbitMQMsgSyncParameters' => [
                                '$ref' => '#/components/schemas/SinkRabbitMQMsgSyncParameters',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'RunOptions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MaximumTasks' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ErrorsTolerance' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RetryStrategy' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'PushRetryStrategy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MaximumEventAgeInSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'MaximumRetryAttempts' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'DeadLetterQueue' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Arn' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'BatchWindow' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'CountBasedWindow' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'TimeBasedWindow' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'BusinessOption' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'BusinessMode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MinCapacityUnitCount' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'MaxCapacityUnitCount' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Throttling' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Transforms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Arn' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DashScopeTransformParameters' => [
                                    '$ref' => '#/components/schemas/DashScopeTransformParameters',
                                    'required' => false,
                                ],
                                'BaiLianAgentTransformParameters' => [
                                    '$ref' => '#/components/schemas/BaiLianAgentTransformParameters',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateEventStreaming' => [
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
                    'name' => 'EventStreamingName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 255,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FilterPattern',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SourceMNSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'IsBase64Decode' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConsumerGroup' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OffsetReset' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'PublicNetwork',
                                            'Default',
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ValueDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceRocketMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Tag' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Offset' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'GroupID' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Timestamp' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'FilterType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'FilterSql' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'AuthType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceVpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceVSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceSecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceNetwork' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BodyDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topics' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'SourceApacheRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topics' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceMQTTParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BodyDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceDTSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'TaskId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BrokerUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Sid' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InitCheckPoint' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceSLSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Project' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LogStore' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConsumePosition' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'RoleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourcePrometheusParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RegionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ClusterId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'DataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Labels' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'RoleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExternalLabels' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceCustomizedKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceCustomizedKafkaConnectorParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ConnectorPackageUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'WorkerParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                    'ConnectorParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Name' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Config' => [
                                                'type' => 'object',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SourceApacheKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Bootstraps' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConsumerGroup' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OffsetReset' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ValueDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityProtocol' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslMechanism' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslUser' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslPassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SslTruststoreCertificates' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceOSSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'RoleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BucketName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LoadMode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LoadFormat' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceOpenSourceRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Endpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'BodyDataType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'AuthType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceEventBusParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'EventBusName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'EventRuleName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SourceMySQLParameters' => [
                                '$ref' => '#/components/schemas/SourceMySQLParameters',
                                'required' => false,
                            ],
                            'SourcePostgreSQLParameters' => [
                                '$ref' => '#/components/schemas/SourcePostgreSQLParameters',
                                'required' => false,
                            ],
                            'SourceRabbitMQMetaParameters' => [
                                '$ref' => '#/components/schemas/SourceRabbitMQMetaParameters',
                                'required' => false,
                            ],
                            'SourceRabbitMQMsgSyncParameters' => [
                                '$ref' => '#/components/schemas/SourceRabbitMQMsgSyncParameters',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Sink',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SinkMNSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'QueueName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'IsBase64Encode' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'TargetType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Exchange' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoutingKey' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'QueueName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'MessageId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Properties' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Acks' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Key' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Value' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Headers' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'CompressionType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkApacheKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Bootstraps' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Acks' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Key' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Value' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Headers' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityProtocol' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslMechanism' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SaslUser' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SslTruststoreCertificates' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'CompressionType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'NetworkType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SaslPassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkFcParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ServiceName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'FunctionName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Concurrency' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Qualifier' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InvocationType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'DataFormat' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkRocketMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Properties' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Keys' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Tags' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Network' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'DeliveryOrderType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ShardingKey' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkDorisParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'QueryEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'FeHttpEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'BeHttpEndpoint' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'UserName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Password' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Database' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Table' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'NetworkType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ConsumeTimestamp' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Group' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkApacheRocketMQCheckpointParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ConsumeTimestamp' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Group' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'InstanceEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceUsername' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstancePassword' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkSLSParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Project' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'LogStore' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoleName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ContentType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ContentSchema' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkDataHubParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Project' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Topic' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'TopicType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'TopicSchema' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoleName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkFnfParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'FlowName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ExecutionName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Input' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'RoleName' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkPrometheusParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'URL' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'HeaderParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'AuthorizationType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Username' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Password' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Data' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'NetworkType' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VpcId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'VSwitchId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkCustomizedKafkaParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkCustomizedKafkaConnectorParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ConnectorPackageUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ConnectorParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Name' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Config' => [
                                                'type' => 'object',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'WorkerParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'SinkDashVectorParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Collection' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ApiKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Operation' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PrimaryKeyId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Partition' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Vector' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'DashVectorSchemaParameters' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Name' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Form' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Value' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Template' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                                'Type' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Form' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Value' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Template' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                                'Value' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Form' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Value' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Template' => [
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
                            'SinkOpenSourceRabbitMQParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Endpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VirtualHostName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'TargetType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Exchange' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'QueueName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'NetworkType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'AuthType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'RoutingKey' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Body' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'MessageId' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Properties' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Form' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Value' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Template' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SinkBaiLianParameters' => [
                                '$ref' => '#/components/schemas/SinkBaiLianParameters',
                                'required' => false,
                            ],
                            'SinkDataWorksTriggerParameters' => [
                                '$ref' => '#/components/schemas/SinkDataWorksTriggerParameters',
                                'required' => false,
                            ],
                            'SinkHttpsParameters' => [
                                '$ref' => '#/components/schemas/SinkHttpsParameters',
                                'required' => false,
                            ],
                            'SinkApiDestinationParameters' => [
                                '$ref' => '#/components/schemas/SinkApiDestinationParameters',
                                'required' => false,
                            ],
                            'SinkOSSParameters' => [
                                '$ref' => '#/components/schemas/SinkOSSParameters',
                                'required' => false,
                            ],
                            'SinkRabbitMQMetaParameters' => [
                                '$ref' => '#/components/schemas/SinkRabbitMQMetaParameters',
                                'required' => false,
                            ],
                            'SinkRabbitMQMsgSyncParameters' => [
                                '$ref' => '#/components/schemas/SinkRabbitMQMsgSyncParameters',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'RunOptions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MaximumTasks' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ErrorsTolerance' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RetryStrategy' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'PushRetryStrategy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MaximumEventAgeInSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'MaximumRetryAttempts' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'DeadLetterQueue' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Arn' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Network' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'VSwitchIds' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'BatchWindow' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'CountBasedWindow' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'TimeBasedWindow' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'BusinessOption' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'BusinessMode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MinCapacityUnitCount' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'MaxCapacityUnitCount' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Throttling' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Transforms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Arn' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DashScopeTransformParameters' => [
                                    '$ref' => '#/components/schemas/DashScopeTransformParameters',
                                    'required' => false,
                                ],
                                'BaiLianAgentTransformParameters' => [
                                    '$ref' => '#/components/schemas/BaiLianAgentTransformParameters',
                                    'required' => false,
                                ],
                                'EmbeddingTransformParameters' => [
                                    '$ref' => '#/components/schemas/EmbeddingTransformParameters',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'repeatList',
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
                        'maxItems' => 21,
                    ],
                ],
            ],
        ],
        'UpdateApiDestination' => [
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
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 255,
                    ],
                ],
                [
                    'name' => 'ApiDestinationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'ConnectionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'HttpApiParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Endpoint' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 127,
                            ],
                            'Method' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateApiDestination' => [
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
                    'name' => 'ApiDestinationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'ConnectionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 255,
                    ],
                ],
                [
                    'name' => 'HttpApiParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Endpoint' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 127,
                            ],
                            'Method' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateConnection' => [
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
                    'name' => 'ConnectionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 255,
                    ],
                ],
                [
                    'name' => 'NetworkParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'NetworkType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VswitcheId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AuthParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AuthorizationType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ApiKeyAuthParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ApiKeyName' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                    'ApiKeyValue' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                ],
                            ],
                            'BasicAuthParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                ],
                            ],
                            'OAuthParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'AuthorizationEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                    'ClientParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'ClientID' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'maxLength' => 127,
                                            ],
                                            'ClientSecret' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'maxLength' => 127,
                                            ],
                                        ],
                                    ],
                                    'HttpMethod' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OAuthHttpParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'BodyParameters' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'IsValueSecret' => [
                                                            'type' => 'string',
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
                                                    ],
                                                ],
                                            ],
                                            'HeaderParameters' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'IsValueSecret' => [
                                                            'type' => 'string',
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
                                                    ],
                                                ],
                                            ],
                                            'QueryStringParameters' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'IsValueSecret' => [
                                                            'type' => 'string',
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
        'DeleteApiDestination' => [
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
                    'name' => 'ApiDestinationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteConnection' => [
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
                    'name' => 'ConnectionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetApiDestination' => [
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
                    'name' => 'ApiDestinationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetConnection' => [
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
                    'name' => 'ConnectionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListApiDestinations' => [
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
                    'name' => 'ApiDestinationNamePrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConnectionName',
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
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConnections' => [
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
                    'name' => 'ConnectionNamePrefix',
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
                        'format' => 'int64',
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
            ],
        ],
        'UpdateConnection' => [
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
                    'name' => 'ConnectionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 127,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 255,
                    ],
                ],
                [
                    'name' => 'NetworkParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'NetworkType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VswitcheId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AuthParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AuthorizationType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ApiKeyAuthParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ApiKeyName' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                    'ApiKeyValue' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                ],
                            ],
                            'BasicAuthParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Password' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                    'Username' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                ],
                            ],
                            'OAuthParameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'AuthorizationEndpoint' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'maxLength' => 127,
                                    ],
                                    'ClientParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'ClientID' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'maxLength' => 127,
                                            ],
                                            'ClientSecret' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'maxLength' => 127,
                                            ],
                                        ],
                                    ],
                                    'HttpMethod' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OAuthHttpParameters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'BodyParameters' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'IsValueSecret' => [
                                                            'type' => 'string',
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
                                                    ],
                                                ],
                                            ],
                                            'HeaderParameters' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'IsValueSecret' => [
                                                            'type' => 'string',
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
                                                    ],
                                                ],
                                            ],
                                            'QueryStringParameters' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'IsValueSecret' => [
                                                            'type' => 'string',
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
        'CreateServiceLinkedRoleForProduct' => [
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
                    'name' => 'ProductName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListTargets' => [
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
                    'name' => 'EventBusName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Arn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TestEventPattern' => [
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
                    'name' => 'Event',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventPattern',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EventCenterQueryEvents' => [
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
                    'name' => 'BusName',
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
                        'minimum' => '0',
                        'maximum' => '10000',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SchemaId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'QueryType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'timeseries',
                                    'table',
                                    'timeseries_and_table',
                                ],
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Breakdowns' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'Calculations' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Op' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enum' => [
                                                        'COUNT',
                                                        'SUM',
                                                        'AVG',
                                                        'COUNT_DISTINCT',
                                                        'MAX',
                                                        'MIN',
                                                        'P50',
                                                        'P90',
                                                        'P95',
                                                        'P99',
                                                    ],
                                                ],
                                                'Column' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Filters' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Column' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Op' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enum' => [
                                                        '=',
                                                        '!=',
                                                        '>',
                                                        '>=',
                                                        '<',
                                                        '<=',
                                                        'exists',
                                                        'does-not-exist',
                                                        'starts-with',
                                                        'does-not-start-with',
                                                        'contains',
                                                        'does-not-contain',
                                                        'in',
                                                        'not-in',
                                                        'text-match',
                                                    ],
                                                ],
                                                'Values' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'NestedFilterCombination' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enum' => [
                                                        'AND',
                                                        'OR',
                                                    ],
                                                ],
                                                'NestedFilters' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'Column' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'Op' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'enum' => [
                                                                    '=',
                                                                    '!=',
                                                                    '>',
                                                                    '>=',
                                                                    '<',
                                                                    '<=',
                                                                    'exists',
                                                                    'does-not-exist',
                                                                    'starts-with',
                                                                    'does-not-start-with',
                                                                    'contains',
                                                                    'does-not-contain',
                                                                    'in',
                                                                    'not-in',
                                                                    'text-match',
                                                                ],
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
                                                ],
                                            ],
                                        ],
                                    ],
                                    'FilterCombination' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'AND',
                                            'OR',
                                        ],
                                    ],
                                    'Granularity' => [
                                        'type' => 'integer',
                                        'required' => false,
                                    ],
                                    'Orders' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Op' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'enum' => [
                                                        'COUNT',
                                                        'SUM',
                                                        'AVG',
                                                        'COUNT_DISTINCT',
                                                        'MAX',
                                                        'MIN',
                                                        'P50',
                                                        'P90',
                                                        'P95',
                                                        'P99',
                                                    ],
                                                ],
                                                'Column' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Desc' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Offset' => [
                                        'type' => 'integer',
                                        'required' => false,
                                    ],
                                    'Limit' => [
                                        'type' => 'integer',
                                        'required' => false,
                                    ],
                                    'TimeRange' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'StartTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                        'minimum' => '946684800000',
                                    ],
                                    'EndTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                        'minimum' => '946684800000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CheckServiceLinkedRoleForProduct' => [
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
                    'name' => 'ProductName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TestEventSourceConfig' => [
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
                    'name' => 'SourceMySQLParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HostName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Port' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableNames' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'User' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Password' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NetworkType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VSwitchIds' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AllowedCIDRs' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DiscoverEventSource' => [
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
                    'name' => 'SourceMySQLParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'HostName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Port' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'User' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Password' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NetworkType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VSwitchIds' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Offset' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Limit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateEventStreamingBusinessOption' => [
            'path' => '',
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
                    'name' => 'EventStreamingName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 2,
                        'maxLength' => 255,
                    ],
                ],
                [
                    'name' => 'BusinessMode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MinCapacityUnitCount',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxCapacityUnitCount',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'eventbridge-console.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'eventbridge-console.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'eventbridge-console.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'eventbridge-console.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'eventbridge-console.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'eventbridge-console.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'eventbridge-console.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'eventbridge-console.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'eventbridge-console.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'eventbridge-console.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'eventbridge-console.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'eventbridge-console.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'eventbridge-console.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'eventbridge-console.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'eventbridge-console.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'eventbridge-console.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'eventbridge-console.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'eventbridge-console.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'eventbridge-console.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'eventbridge-console.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'eventbridge-console.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'eventbridge-console.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'eventbridge-console.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'eventbridge-console.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'eventbridge-console.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'eventbridge-console.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];