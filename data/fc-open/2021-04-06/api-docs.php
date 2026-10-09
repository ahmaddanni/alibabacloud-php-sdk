<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'FC',
        'product' => 'FC-Open',
        'version' => '2021-04-06',
    ],
    'components' => [
        'schemas' => [
            'AccelerationInfo' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AsyncConfigMeta' => [
                'type' => 'object',
                'properties' => [
                    'serviceName' => [
                        'type' => 'string',
                    ],
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AvailableAZ' => [
                'type' => 'object',
                'properties' => [
                    'availableAZs' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BatchWindow' => [
                'type' => 'object',
                'properties' => [
                    'CountBasedWindow' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TimeBasedWindow' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'CDNEventsTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'eventName' => [
                        'type' => 'string',
                    ],
                    'eventVersion' => [
                        'type' => 'string',
                    ],
                    'notes' => [
                        'type' => 'string',
                    ],
                    'filter' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'array',
                            'items' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'CertConfig' => [
                'type' => 'object',
                'properties' => [
                    'certName' => [
                        'type' => 'string',
                    ],
                    'certificate' => [
                        'type' => 'string',
                    ],
                    'privateKey' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Code' => [
                'type' => 'object',
                'properties' => [
                    'ossBucketName' => [
                        'type' => 'string',
                    ],
                    'ossObjectName' => [
                        'type' => 'string',
                    ],
                    'zipFile' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CustomContainerConfig' => [
                'type' => 'object',
                'properties' => [
                    'args' => [
                        'type' => 'string',
                    ],
                    'command' => [
                        'type' => 'string',
                    ],
                    'image' => [
                        'type' => 'string',
                    ],
                    'accelerationType' => [
                        'type' => 'string',
                    ],
                    'instanceID' => [
                        'type' => 'string',
                    ],
                    'webServerMode' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CustomContainerConfigInfo' => [
                'type' => 'object',
                'properties' => [
                    'args' => [
                        'type' => 'string',
                    ],
                    'command' => [
                        'type' => 'string',
                    ],
                    'image' => [
                        'type' => 'string',
                    ],
                    'accelerationType' => [
                        'type' => 'string',
                    ],
                    'accelerationInfo' => [
                        '$ref' => '#/components/schemas/AccelerationInfo',
                    ],
                    'instanceID' => [
                        'type' => 'string',
                    ],
                    'webServerMode' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CustomDNS' => [
                'type' => 'object',
                'properties' => [
                    'nameServers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'searches' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'dnsOptions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DNSOption',
                        ],
                    ],
                ],
            ],
            'CustomHealthCheckConfig' => [
                'type' => 'object',
                'properties' => [
                    'httpGetUrl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'successThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'CustomRuntimeConfig' => [
                'type' => 'object',
                'properties' => [
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'args' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'DNSOption' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeadLetterQueue' => [
                'type' => 'object',
                'properties' => [
                    'Arn' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeliveryOption' => [
                'type' => 'object',
                'properties' => [
                    'mode' => [
                        'type' => 'string',
                        'enum' => [
                            'event-driven',
                            'event-streaming',
                        ],
                    ],
                    'eventSchema' => [
                        'type' => 'string',
                    ],
                    'concurrency' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Destination' => [
                'type' => 'object',
                'properties' => [
                    'destination' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DestinationConfig' => [
                'type' => 'object',
                'properties' => [
                    'onSuccess' => [
                        '$ref' => '#/components/schemas/Destination',
                    ],
                    'onFailure' => [
                        '$ref' => '#/components/schemas/Destination',
                    ],
                ],
            ],
            'Error' => [
                'type' => 'object',
                'properties' => [
                    'errorCode' => [
                        'type' => 'string',
                    ],
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ErrorInfo' => [
                'type' => 'object',
                'properties' => [
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                    'stackTrace' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EventBridgeTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'triggerEnable' => [
                        'type' => 'boolean',
                    ],
                    'asyncInvocationType' => [
                        'type' => 'boolean',
                    ],
                    'eventRuleFilterPattern' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'eventSourceConfig' => [
                        '$ref' => '#/components/schemas/EventSourceConfig',
                        'required' => true,
                    ],
                    'eventSinkConfig' => [
                        '$ref' => '#/components/schemas/EventSinkConfig',
                    ],
                    'runOptions' => [
                        '$ref' => '#/components/schemas/RunOptions',
                    ],
                ],
            ],
            'EventSinkConfig' => [
                'type' => 'object',
                'properties' => [
                    'deliveryOption' => [
                        '$ref' => '#/components/schemas/DeliveryOption',
                    ],
                ],
            ],
            'EventSourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'eventSourceType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'eventSourceParameters' => [
                        '$ref' => '#/components/schemas/EventSourceParameters',
                    ],
                ],
            ],
            'EventSourceParameters' => [
                'type' => 'object',
                'properties' => [
                    'sourceMNSParameters' => [
                        '$ref' => '#/components/schemas/SourceMNSParameters',
                    ],
                    'sourceRocketMQParameters' => [
                        '$ref' => '#/components/schemas/SourceRocketMQParameters',
                    ],
                    'sourceRabbitMQParameters' => [
                        '$ref' => '#/components/schemas/SourceRabbitMQParameters',
                    ],
                    'sourceKafkaParameters' => [
                        '$ref' => '#/components/schemas/SourceKafkaParameters',
                    ],
                    'sourceDTSParameters' => [
                        '$ref' => '#/components/schemas/SourceDTSParameters',
                    ],
                    'sourceMQTTParameters' => [
                        '$ref' => '#/components/schemas/SourceMQTTParameters',
                    ],
                ],
            ],
            'HTTPTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'authType' => [
                        'type' => 'string',
                        'enum' => [
                            'anonymous',
                            'function',
                        ],
                    ],
                    'methods' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'enum' => [
                                'HEAD',
                                'GET',
                                'POST',
                                'PUT',
                                'DELETE',
                                'PATCH',
                                'OPTIONS',
                            ],
                        ],
                    ],
                    'disableURLInternet' => [
                        'type' => 'boolean',
                    ],
                    'authConfig' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceLifecycleConfig' => [
                'type' => 'object',
                'properties' => [
                    'preFreeze' => [
                        '$ref' => '#/components/schemas/LifecycleHook',
                    ],
                    'preStop' => [
                        '$ref' => '#/components/schemas/LifecycleHook',
                    ],
                ],
            ],
            'JWTAuthConfig' => [
                'type' => 'object',
                'properties' => [
                    'jwks' => [
                        'type' => 'string',
                    ],
                    'tokenLookup' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'claimPassBy' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'whiteList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'blackList' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JaegerConfig' => [
                'type' => 'object',
                'properties' => [
                    'endpoint' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JobConfig' => [
                'type' => 'object',
                'properties' => [
                    'maxRetryTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'triggerInterval' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'JobLogConfig' => [
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'type' => 'string',
                    ],
                    'logstore' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Layer' => [
                'type' => 'object',
                'properties' => [
                    'layerName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        '$ref' => '#/components/schemas/LayerCode',
                    ],
                    'codeSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'codeChecksum' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'string',
                    ],
                    'acl' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'arn' => [
                        'type' => 'string',
                    ],
                    'arnV2' => [
                        'type' => 'string',
                    ],
                    'license' => [
                        'type' => 'string',
                    ],
                    'compatibleRuntime' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'LayerCode' => [
                'type' => 'object',
                'properties' => [
                    'repositoryType' => [
                        'type' => 'string',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LifecycleHook' => [
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'LogConfig' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                    ],
                    'project' => [
                        'type' => 'string',
                    ],
                    'enableRequestMetrics' => [
                        'type' => 'boolean',
                    ],
                    'enableInstanceMetrics' => [
                        'type' => 'boolean',
                    ],
                    'logBeginRule' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LogTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'sourceConfig' => [
                        '$ref' => '#/components/schemas/SourceConfig',
                    ],
                    'jobConfig' => [
                        '$ref' => '#/components/schemas/JobConfig',
                    ],
                    'functionParameter' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/JobLogConfig',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'MeteringConfig' => [
                'type' => 'object',
                'properties' => [
                    'payerId' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/LogConfig',
                    ],
                ],
            ],
            'MnsTopicTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'filterTag' => [
                        'type' => 'string',
                    ],
                    'notifyContentFormat' => [
                        'type' => 'string',
                    ],
                    'notifyStrategy' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NASConfig' => [
                'type' => 'object',
                'properties' => [
                    'groupId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'mountPoints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'mountDir' => [
                                    'type' => 'string',
                                ],
                                'serverAddr' => [
                                    'type' => 'string',
                                ],
                                'enableTLS' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                    'userId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'OSSMountConfig' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'mountPoints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'bucketName' => [
                                    'type' => 'string',
                                ],
                                'mountDir' => [
                                    'type' => 'string',
                                ],
                                'readOnly' => [
                                    'type' => 'boolean',
                                ],
                                'endpoint' => [
                                    'type' => 'string',
                                ],
                                'bucketPath' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'OSSTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'events' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'filter' => [
                        '$ref' => '#/components/schemas/OSSTriggerFilter',
                    ],
                ],
            ],
            'OSSTriggerFilter' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        '$ref' => '#/components/schemas/OSSTriggerKey',
                    ],
                ],
            ],
            'OSSTriggerKey' => [
                'type' => 'object',
                'properties' => [
                    'prefix' => [
                        'type' => 'string',
                    ],
                    'suffix' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OnDemandConfig' => [
                'type' => 'object',
                'properties' => [
                    'resource' => [
                        'type' => 'string',
                    ],
                    'maximumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'OpenReservedCapacity' => [
                'type' => 'object',
                'properties' => [
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'cu' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'deadline' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                    ],
                    'isRefunded' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OutputCodeLocation' => [
                'type' => 'object',
                'properties' => [
                    'repositoryType' => [
                        'type' => 'string',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PathConfig' => [
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'methods' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'enum' => [
                                'HEAD',
                                'GET',
                                'POST',
                                'PUT',
                                'DELETE',
                                'PATCH',
                            ],
                        ],
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'serviceName' => [
                        'type' => 'string',
                    ],
                    'rewriteConfig' => [
                        '$ref' => '#/components/schemas/RewriteConfig',
                    ],
                ],
            ],
            'PolicyItem' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Header',
                            'Cookie',
                            'Param',
                        ],
                    ],
                    'key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'operator' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            '>',
                            '<',
                            '>=',
                            '<=',
                            '=',
                            '!=',
                            'in',
                            'percent',
                        ],
                    ],
                ],
            ],
            'PreFreeze' => [
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PreStop' => [
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'RdsTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'subscriptionObjects' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'retry' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'concurrency' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'eventFormat' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Resource' => [
                'type' => 'object',
                'properties' => [
                    'resourceArn' => [
                        'type' => 'string',
                    ],
                    'tags' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'RetryStrategy' => [
                'type' => 'object',
                'properties' => [
                    'PushRetryStrategy' => [
                        'type' => 'string',
                    ],
                    'MaximumEventAgeInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MaximumRetryAttempts' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'RewriteConfig' => [
                'type' => 'object',
                'properties' => [
                    'equalRules' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'match' => [
                                    'type' => 'string',
                                ],
                                'replacement' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'wildcardRules' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'match' => [
                                    'type' => 'string',
                                ],
                                'replacement' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'regexRules' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'match' => [
                                    'type' => 'string',
                                ],
                                'replacement' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'RouteConfig' => [
                'type' => 'object',
                'properties' => [
                    'routes' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PathConfig',
                        ],
                    ],
                ],
            ],
            'RoutePolicy' => [
                'type' => 'object',
                'properties' => [
                    'condition' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'policyItems' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/PolicyItem',
                            'required' => true,
                        ],
                    ],
                ],
            ],
            'RunOptions' => [
                'type' => 'object',
                'properties' => [
                    'batchWindow' => [
                        '$ref' => '#/components/schemas/BatchWindow',
                    ],
                    'retryStrategy' => [
                        '$ref' => '#/components/schemas/RetryStrategy',
                    ],
                    'deadLetterQueue' => [
                        '$ref' => '#/components/schemas/DeadLetterQueue',
                    ],
                    'maximumTasks' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'errorsTolerance' => [
                        'type' => 'string',
                    ],
                    'mode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScheduledActions' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'string',
                    ],
                    'endTime' => [
                        'type' => 'string',
                    ],
                    'target' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'scheduleExpression' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourceDTSParameters' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'BrokerUrl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Topic' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Sid' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Username' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Password' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'InitCheckPoint' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'TaskId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SourceKafkaParameters' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Topic' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ConsumerGroup' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'OffsetReset' => [
                        'type' => 'string',
                    ],
                    'Network' => [
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
            'SourceMNSParameters' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'QueueName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'IsBase64Decode' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'SourceMQTTParameters' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Topic' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SourceRabbitMQParameters' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'VirtualHostName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'QueueName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SourceRocketMQParameters' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Topic' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Tag' => [
                        'type' => 'string',
                    ],
                    'Offset' => [
                        'type' => 'string',
                    ],
                    'Timestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GroupID' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'InstanceEndpoint' => [
                        'type' => 'string',
                    ],
                    'InstanceUsername' => [
                        'type' => 'string',
                    ],
                    'InstancePassword' => [
                        'type' => 'string',
                    ],
                    'FilterType' => [
                        'type' => 'string',
                    ],
                    'FilterSql' => [
                        'type' => 'string',
                    ],
                    'AuthType' => [
                        'type' => 'string',
                    ],
                    'InstanceVpcId' => [
                        'type' => 'string',
                    ],
                    'InstanceVSwitchIds' => [
                        'type' => 'string',
                    ],
                    'InstanceSecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'InstanceNetwork' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StatefulAsyncInvocation' => [
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'serviceName' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'invocationId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'startedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'destinationStatus' => [
                        'type' => 'string',
                    ],
                    'invocationErrorMessage' => [
                        'type' => 'string',
                    ],
                    'invocationPayload' => [
                        'type' => 'string',
                    ],
                    'alreadyRetriedTimes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'events' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/StatefulAsyncInvocationEvent',
                        ],
                    ],
                    'durationMs' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'returnPayload' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StatefulAsyncInvocationEvent' => [
                'type' => 'object',
                'properties' => [
                    'eventId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'timestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'eventDetail' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TLSConfig' => [
                'type' => 'object',
                'properties' => [
                    'minVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'cipherSuites' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'maxVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TargetTrackingPolicies' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'string',
                    ],
                    'endTime' => [
                        'type' => 'string',
                    ],
                    'metricType' => [
                        'type' => 'string',
                    ],
                    'metricTarget' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'minCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'maxCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TimeTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'payload' => [
                        'type' => 'string',
                    ],
                    'cronExpression' => [
                        'type' => 'string',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'TracingConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'params' => [
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                    ],
                ],
            ],
            'Trigger' => [
                'type' => 'object',
                'properties' => [
                    'triggerName' => [
                        'type' => 'string',
                    ],
                    'invocationRole' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'sourceArn' => [
                        'type' => 'string',
                    ],
                    'targetArn' => [
                        'type' => 'string',
                    ],
                    'triggerConfig' => [
                        'type' => 'string',
                    ],
                    'triggerType' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                    ],
                    'triggerId' => [
                        'type' => 'string',
                    ],
                    'domainName' => [
                        'type' => 'string',
                    ],
                    'urlInternet' => [
                        'type' => 'string',
                    ],
                    'urlIntranet' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VPCConfig' => [
                'type' => 'object',
                'properties' => [
                    'securityGroupId' => [
                        'type' => 'string',
                    ],
                    'vSwitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'vpcId' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VendorConfig' => [
                'type' => 'object',
                'properties' => [
                    'meteringConfig' => [
                        '$ref' => '#/components/schemas/MeteringConfig',
                    ],
                ],
            ],
            'WAFConfig' => [
                'type' => 'object',
                'properties' => [
                    'enableWAF' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListReservedCapacities' => [
            'path' => '/2021-04-06/reserved-capacities',
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
                    'name' => 'nextToken',
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
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/2021-04-06/regions',
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
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'zh-CN',
                            'en-US',
                            'ja',
                        ],
                    ],
                ],
            ],
        ],
        'GetAccountSettings' => [
            'path' => '/2021-04-06/account-settings',
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
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateService' => [
            'path' => '/2021-04-06/services',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'internetAccess' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'logConfig' => [
                                '$ref' => '#/components/schemas/LogConfig',
                                'required' => false,
                            ],
                            'nasConfig' => [
                                '$ref' => '#/components/schemas/NASConfig',
                                'required' => false,
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'vpcConfig' => [
                                '$ref' => '#/components/schemas/VPCConfig',
                                'required' => false,
                            ],
                            'tracingConfig' => [
                                '$ref' => '#/components/schemas/TracingConfig',
                                'required' => false,
                            ],
                            'ossMountConfig' => [
                                '$ref' => '#/components/schemas/OSSMountConfig',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteService' => [
            'path' => '/2021-04-06/services/{serviceName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateService' => [
            'path' => '/2021-04-06/services/{serviceName}',
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
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceName',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'internetAccess' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'logConfig' => [
                                '$ref' => '#/components/schemas/LogConfig',
                                'required' => false,
                            ],
                            'nasConfig' => [
                                '$ref' => '#/components/schemas/NASConfig',
                                'required' => false,
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vpcConfig' => [
                                '$ref' => '#/components/schemas/VPCConfig',
                                'required' => false,
                            ],
                            'tracingConfig' => [
                                '$ref' => '#/components/schemas/TracingConfig',
                                'required' => false,
                            ],
                            'ossMountConfig' => [
                                '$ref' => '#/components/schemas/OSSMountConfig',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListServices' => [
            'path' => '/2021-04-06/services',
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
                    'name' => 'limit',
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
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetService' => [
            'path' => '/2021-04-06/services/{serviceName}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteServiceVersion' => [
            'path' => '/2021-04-06/services/{serviceName}/versions/{versionId}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PublishServiceVersion' => [
            'path' => '/2021-04-06/services/{serviceName}/versions',
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
                    'name' => 'serviceName',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListServiceVersions' => [
            'path' => '/2021-04-06/services/{serviceName}/versions',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'direction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTrigger' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
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
                            'invocationRole' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'qualifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sourceArn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'triggerConfig' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'triggerName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'triggerType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTrigger' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateTrigger' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
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
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'triggerName',
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
                            'invocationRole' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'qualifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'triggerConfig' => [
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
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTrigger' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers/{triggerName}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'triggerName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTriggers' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/triggers',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateCustomDomain' => [
            'path' => '/2021-04-06/custom-domains',
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
                            'domainName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'protocol' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'routeConfig' => [
                                '$ref' => '#/components/schemas/RouteConfig',
                                'required' => false,
                            ],
                            'certConfig' => [
                                '$ref' => '#/components/schemas/CertConfig',
                                'required' => false,
                            ],
                            'tlsConfig' => [
                                '$ref' => '#/components/schemas/TLSConfig',
                                'required' => false,
                            ],
                            'wafConfig' => [
                                '$ref' => '#/components/schemas/WAFConfig',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteCustomDomain' => [
            'path' => '/2021-04-06/custom-domains/{domainName}',
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
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateCustomDomain' => [
            'path' => '/2021-04-06/custom-domains/{domainName}',
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
                    'name' => 'domainName',
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
                            'protocol' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'routeConfig' => [
                                '$ref' => '#/components/schemas/RouteConfig',
                                'required' => false,
                            ],
                            'certConfig' => [
                                '$ref' => '#/components/schemas/CertConfig',
                                'required' => false,
                            ],
                            'tlsConfig' => [
                                '$ref' => '#/components/schemas/TLSConfig',
                                'required' => false,
                            ],
                            'wafConfig' => [
                                '$ref' => '#/components/schemas/WAFConfig',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCustomDomain' => [
            'path' => '/2021-04-06/custom-domains/{domainName}',
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
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListCustomDomains' => [
            'path' => '/2021-04-06/custom-domains',
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
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAlias' => [
            'path' => '/2021-04-06/services/{serviceName}/aliases',
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
                    'name' => 'serviceName',
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
                            'additionalVersionWeight' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                            ],
                            'aliasName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'versionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resolvePolicy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'routePolicy' => [
                                '$ref' => '#/components/schemas/RoutePolicy',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAlias' => [
            'path' => '/2021-04-06/services/{serviceName}/aliases/{aliasName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAlias' => [
            'path' => '/2021-04-06/services/{serviceName}/aliases/{aliasName}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'aliasName',
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
                            'additionalVersionWeight' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'versionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resolvePolicy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'routePolicy' => [
                                '$ref' => '#/components/schemas/RoutePolicy',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAlias' => [
            'path' => '/2021-04-06/services/{serviceName}/aliases/{aliasName}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'aliasName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAliases' => [
            'path' => '/2021-04-06/services/{serviceName}/aliases',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateFunction' => [
            'path' => '/2021-04-06/services/{serviceName}/functions',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'function',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'code' => [
                                '$ref' => '#/components/schemas/Code',
                                'required' => false,
                            ],
                            'customContainerConfig' => [
                                '$ref' => '#/components/schemas/CustomContainerConfig',
                                'required' => false,
                            ],
                            'layers' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'functionName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'handler' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'initializationTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'initializer' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'memorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'runtime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'caPort' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'environmentVariables' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'instanceConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'instanceSoftConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'customRuntimeConfig' => [
                                '$ref' => '#/components/schemas/CustomRuntimeConfig',
                                'required' => false,
                            ],
                            'instanceLifecycleConfig' => [
                                '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                                'required' => false,
                            ],
                            'customDNS' => [
                                '$ref' => '#/components/schemas/CustomDNS',
                                'required' => false,
                            ],
                            'customHealthCheckConfig' => [
                                '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                                'required' => false,
                            ],
                            'cpu' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'diskSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteFunction' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}',
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
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateFunction' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}',
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
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionUpdateFields',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'code' => [
                                '$ref' => '#/components/schemas/Code',
                                'required' => false,
                            ],
                            'customContainerConfig' => [
                                '$ref' => '#/components/schemas/CustomContainerConfig',
                                'required' => false,
                            ],
                            'layers' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'environmentVariables' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'handler' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'memorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'runtime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'initializationTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'initializer' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'caPort' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'InstanceConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'instanceSoftConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instanceLifecycleConfig' => [
                                '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                                'required' => false,
                            ],
                            'customDNS' => [
                                '$ref' => '#/components/schemas/CustomDNS',
                                'required' => false,
                            ],
                            'customRuntimeConfig' => [
                                '$ref' => '#/components/schemas/CustomRuntimeConfig',
                                'required' => false,
                            ],
                            'customHealthCheckConfig' => [
                                '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                                'required' => false,
                            ],
                            'cpu' => [
                                'type' => 'number',
                                'format' => 'float',
                                'required' => false,
                            ],
                            'diskSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetFunction' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetFunctionCode' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/code',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListFunctions' => [
            'path' => '/2021-04-06/services/{serviceName}/functions',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'InvokeFunction' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/invocations',
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
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'byte',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Stateful-Async-Invocation-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Stateful-Async-Invocation-Enable',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutFunctionAsyncInvokeConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-config',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
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
                            'destinationConfig' => [
                                '$ref' => '#/components/schemas/DestinationConfig',
                                'required' => false,
                            ],
                            'maxAsyncEventAgeInSeconds' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'maxAsyncRetryAttempts' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'statefulInvocation' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteFunctionAsyncInvokeConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-config',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetFunctionAsyncInvokeConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-config',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListFunctionAsyncInvokeConfigs' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/async-invoke-configs',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccountID',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                ],
            ],
        ],
        'DeleteFunctionOnDemandConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/on-demand-config',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetFunctionOnDemandConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/on-demand-config',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListOnDemandConfigs' => [
            'path' => '/2021-04-06/on-demand-configs',
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
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutFunctionOnDemandConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/on-demand-config',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
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
                            'maximumInstanceCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetProvisionConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/provision-config',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListProvisionConfigs' => [
            'path' => '/2021-04-06/provision-configs',
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
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                [
                    'name' => 'serviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutProvisionConfig' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/provision-config',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
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
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'scheduledActions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/ScheduledActions',
                                    'required' => false,
                                ],
                            ],
                            'targetTrackingPolicies' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/TargetTrackingPolicies',
                                    'required' => false,
                                ],
                            ],
                            'alwaysAllocateCPU' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopStatefulAsyncInvocation' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/stateful-async-invocations/{invocationId}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'invocationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListStatefulAsyncInvocationFunctions' => [
            'path' => '/2021-04-06/stateful-async-invocation-functions',
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
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '100',
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
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetStatefulAsyncInvocation' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/stateful-async-invocations/{invocationId}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'invocationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListStatefulAsyncInvocations' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/stateful-async-invocations',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'startedTimeBegin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startedTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sortOrderByTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'invocationIdPrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'includePayload',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Code-Checksum',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Log-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Invocation-Type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLayerVersion' => [
            'path' => '/2021-04-06/layers/{layerName}/versions',
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
                    'name' => 'layerName',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'compatibleRuntime' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Code' => [
                                '$ref' => '#/components/schemas/Code',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteLayerVersion' => [
            'path' => '/2021-04-06/layers/{layerName}/versions/{version}',
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
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLayers' => [
            'path' => '/2021-04-06/layers',
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
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'public',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'official',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLayerVersions' => [
            'path' => '/2021-04-06/layers/{layerName}/versions',
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
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLayerVersion' => [
            'path' => '/2021-04-06/layers/{layerName}/versions/{version}',
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
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutLayerACL' => [
            'path' => '/2021-04-06/layers/{layerName}/acl',
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
                    'name' => 'layerName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'public',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListEventSources' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/event-sources',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeregisterEventSource' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/event-sources/{sourceArn}',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sourceArn',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RegisterEventSource' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/event-sources',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
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
                            'sourceArn' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateVpcBinding' => [
            'path' => '/2021-04-06/services/{serviceName}/bindings',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'serviceName',
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
                            'vpcId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteVpcBinding' => [
            'path' => '/2021-04-06/services/{serviceName}/bindings/{vpcId}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'vpcId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListVpcBindings' => [
            'path' => '/2021-04-06/services/{serviceName}/bindings',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetResourceTags' => [
            'path' => '/2021-04-06/tag',
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
                    'name' => 'resourceArn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTaggedResources' => [
            'path' => '/2021-04-06/tags',
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
                    'name' => 'nextToken',
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
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TagResource' => [
            'path' => '/2021-04-06/tag',
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
                            'resourceArn' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'tags' => [
                                'type' => 'object',
                                'required' => true,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UntagResource' => [
            'path' => '/2021-04-06/tag',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'resourceArn' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'tagKeys' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'all' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListInstances' => [
            'path' => '/2021-04-06/services/{serviceName}/functions/{functionName}/instances',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'qualifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'minItems' => 1,
                        'maxItems' => 1000,
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
                    'name' => 'X-Fc-Account-Id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Date',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'X-Fc-Trace-Id',
                    'in' => 'header',
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
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'fc.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'fc.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'fc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'fc.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'fc.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'fc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'fc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'fc.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'fc.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'fc.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'fc.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'fc.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'fc.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'fc.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'fc.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'fc.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'fc.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'fc.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'fc.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'fc.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'account-id.cn-hangzhou-finance.fc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'fc.ap-southeast-7.aliyuncs.com',
        ],
    ],
];