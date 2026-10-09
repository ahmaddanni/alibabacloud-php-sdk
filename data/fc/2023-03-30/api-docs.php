<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'FC',
        'product' => 'FC',
        'version' => '2023-03-30',
    ],
    'components' => [
        'schemas' => [
            'AccelerationInfo' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'Alias' => [
                'type' => 'object',
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
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'versionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'AsyncConfig' => [
                'type' => 'object',
                'properties' => [
                    'asyncTask' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'destinationConfig' => [
                        '$ref' => '#/components/schemas/DestinationConfig',
                        'required' => false,
                    ],
                    'functionArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
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
                ],
            ],
            'AsyncTask' => [
                'type' => 'object',
                'properties' => [
                    'alreadyRetriedTimes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'destinationStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'durationMs' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'events' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/AsyncTaskEvent',
                        ],
                    ],
                    'functionArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'instanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'qualifier' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'returnPayload' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'startedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'taskErrorMessage' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'taskId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'taskPayload' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'AsyncTaskEvent' => [
                'type' => 'object',
                'properties' => [
                    'eventDetail' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'eventId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'timestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'AuthConfig' => [
                'type' => 'object',
                'properties' => [
                    'authInfo' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'authType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'BatchWindow' => [
                'type' => 'object',
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
            'CDNTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'eventName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'eventVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'filter' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'array',
                            'items' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'notes' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CertConfig' => [
                'type' => 'object',
                'properties' => [
                    'certName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'certificate' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 20480,
                    ],
                    'privateKey' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 4096,
                    ],
                ],
            ],
            'ChangeResourceGroupInput' => [
                'type' => 'object',
                'properties' => [
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'newResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ChangeResourceGroupOutput' => [
                'type' => 'object',
                'properties' => [
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'newResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'oldResourceGroupId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConcurrencyConfig' => [
                'type' => 'object',
                'properties' => [
                    'functionArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'reservedConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'CookieSessionAffinityConfig' => [
                'type' => 'object',
                'properties' => [
                    'sessionIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionConcurrencyPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'disableSessionIdReuse' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CreateAliasInput' => [
                'type' => 'object',
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
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'versionId' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 10,
                    ],
                ],
            ],
            'CreateCustomDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        '$ref' => '#/components/schemas/AuthConfig',
                        'required' => false,
                    ],
                    'certConfig' => [
                        '$ref' => '#/components/schemas/CertConfig',
                        'required' => false,
                    ],
                    'domainName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                    'protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'routeConfig' => [
                        '$ref' => '#/components/schemas/RouteConfig',
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
            'CreateFunctionInput' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        '$ref' => '#/components/schemas/InputCodeLocation',
                        'required' => false,
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'customContainerConfig' => [
                        '$ref' => '#/components/schemas/CustomContainerConfig',
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
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'diskSize' => [
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
                    'functionName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'gpuConfig' => [
                        '$ref' => '#/components/schemas/GPUConfig',
                        'required' => false,
                    ],
                    'handler' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'instanceLifecycleConfig' => [
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                        'required' => false,
                    ],
                    'internetAccess' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'layers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/LogConfig',
                        'required' => false,
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                        'required' => false,
                    ],
                    'ossMountConfig' => [
                        '$ref' => '#/components/schemas/OSSMountConfig',
                        'required' => false,
                    ],
                    'role' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 300,
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
                    'tracingConfig' => [
                        '$ref' => '#/components/schemas/TracingConfig',
                        'required' => false,
                    ],
                    'vpcConfig' => [
                        '$ref' => '#/components/schemas/VPCConfig',
                        'required' => false,
                    ],
                    'tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'disableOndemand' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'sessionAffinity' => [
                        'type' => 'string',
                    ],
                    'enableLongLiving' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'instanceIsolationMode' => [
                        'type' => 'string',
                        'enum' => [
                            'SHARE',
                            'REQUEST_EXCLUSIVE',
                            'SESSION_EXCLUSIVE',
                        ],
                    ],
                    'sessionAffinityConfig' => [
                        'type' => 'string',
                    ],
                    'idleTimeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'disableInjectCredentials' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Env',
                            'Request',
                            'All',
                        ],
                    ],
                    'polarFsConfig' => [
                        '$ref' => '#/components/schemas/PolarFsConfig',
                    ],
                ],
            ],
            'CreateLayerVersionInput' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        '$ref' => '#/components/schemas/InputCodeLocation',
                        'required' => false,
                    ],
                    'compatibleRuntime' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'license' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CreateSessionInput' => [
                'type' => 'object',
                'properties' => [
                    'sessionTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                    ],
                    'sessionId' => [
                        'type' => 'string',
                        'minLength' => 0,
                        'maxLength' => 64,
                    ],
                    'disableSessionIdReuse' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CreateTriggerInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'invocationRole' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 300,
                    ],
                    'qualifier' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sourceArn' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 300,
                    ],
                    'triggerConfig' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'triggerName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'triggerType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'CreateVpcBindingInput' => [
                'type' => 'object',
                'properties' => [
                    'vpcId' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                    ],
                ],
            ],
            'CustomContainerConfig' => [
                'type' => 'object',
                'properties' => [
                    'accelerationInfo' => [
                        '$ref' => '#/components/schemas/AccelerationInfo',
                        'required' => false,
                    ],
                    'accelerationType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'acrInstanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'command' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'entrypoint' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'healthCheckConfig' => [
                        '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                        'required' => false,
                    ],
                    'image' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'registryConfig' => [
                        '$ref' => '#/components/schemas/RegistryConfig',
                        'required' => false,
                    ],
                    'resolvedImageUri' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CustomDNS' => [
                'type' => 'object',
                'properties' => [
                    'dnsOptions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/DNSOption',
                        ],
                    ],
                    'nameServers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'searches' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CustomDomain' => [
                'type' => 'object',
                'properties' => [
                    'accountId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'apiVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'authConfig' => [
                        '$ref' => '#/components/schemas/AuthConfig',
                        'required' => false,
                    ],
                    'certConfig' => [
                        '$ref' => '#/components/schemas/CertConfig',
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'domainName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'routeConfig' => [
                        '$ref' => '#/components/schemas/RouteConfig',
                        'required' => false,
                    ],
                    'subdomainCount' => [
                        'type' => 'string',
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
            'CustomHealthCheckConfig' => [
                'type' => 'object',
                'properties' => [
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'httpGetUrl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'successThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'CustomRuntimeConfig' => [
                'type' => 'object',
                'properties' => [
                    'args' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'command' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'healthCheckConfig' => [
                        '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                        'required' => false,
                    ],
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'DNSOption' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'value' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                ],
            ],
            'DeadLetterQueue' => [
                'type' => 'object',
                'properties' => [
                    'Arn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'DeliveryOption' => [
                'type' => 'object',
                'properties' => [
                    'concurrency' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'eventSchema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'DescribeRegionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'Regions' => [
                        'type' => 'object',
                        'properties' => [
                            'Region' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'type' => 'string',
                                        ],
                                        'LocalName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Destination' => [
                'type' => 'object',
                'properties' => [
                    'destination' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 512,
                    ],
                ],
            ],
            'DestinationConfig' => [
                'type' => 'object',
                'properties' => [
                    'onFailure' => [
                        '$ref' => '#/components/schemas/Destination',
                        'required' => false,
                    ],
                    'onSuccess' => [
                        '$ref' => '#/components/schemas/Destination',
                        'required' => false,
                    ],
                ],
            ],
            'ElasticConfigStatus' => [
                'type' => 'object',
                'properties' => [
                    'residentPoolId' => [
                        'type' => 'string',
                    ],
                    'functionArn' => [
                        'type' => 'string',
                    ],
                    'currentInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'currentError' => [
                        'type' => 'string',
                    ],
                    'minInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'scheduledPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScheduledPolicy',
                        ],
                    ],
                    'scalingPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingPolicy',
                        ],
                    ],
                    'targetInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'EqualRule' => [
                'type' => 'object',
                'properties' => [
                    'match' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 256,
                    ],
                    'replacement' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 256,
                    ],
                ],
            ],
            'Error' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Message' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RequestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'EventBridgeTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'asyncInvocationType' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'eventRuleFilterPattern' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'eventSinkConfig' => [
                        '$ref' => '#/components/schemas/EventSinkConfig',
                        'required' => false,
                    ],
                    'eventSourceConfig' => [
                        '$ref' => '#/components/schemas/EventSourceConfig',
                        'required' => false,
                    ],
                    'runOptions' => [
                        '$ref' => '#/components/schemas/RunOptions',
                        'required' => false,
                    ],
                    'triggerEnable' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'EventSinkConfig' => [
                'type' => 'object',
                'properties' => [
                    'deliveryOption' => [
                        '$ref' => '#/components/schemas/DeliveryOption',
                        'required' => false,
                    ],
                ],
            ],
            'EventSourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'eventSourceParameters' => [
                        '$ref' => '#/components/schemas/EventSourceParameters',
                        'required' => false,
                    ],
                    'eventSourceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'EventSourceParameters' => [
                'type' => 'object',
                'properties' => [
                    'sourceDTSParameters' => [
                        '$ref' => '#/components/schemas/SourceDTSParameters',
                        'required' => false,
                    ],
                    'sourceKafkaParameters' => [
                        '$ref' => '#/components/schemas/SourceKafkaParameters',
                        'required' => false,
                    ],
                    'sourceMNSParameters' => [
                        '$ref' => '#/components/schemas/SourceMNSParameters',
                        'required' => false,
                    ],
                    'sourceMQTTParameters' => [
                        '$ref' => '#/components/schemas/SourceMQTTParameters',
                        'required' => false,
                    ],
                    'sourceRabbitMQParameters' => [
                        '$ref' => '#/components/schemas/SourceRabbitMQParameters',
                        'required' => false,
                    ],
                    'sourceRocketMQParameters' => [
                        '$ref' => '#/components/schemas/SourceRocketMQParameters',
                        'required' => false,
                    ],
                ],
            ],
            'Filter' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        '$ref' => '#/components/schemas/Key',
                        'required' => false,
                    ],
                ],
            ],
            'Function' => [
                'type' => 'object',
                'properties' => [
                    'codeChecksum' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'codeSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'customContainerConfig' => [
                        '$ref' => '#/components/schemas/CustomContainerConfig',
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
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'diskSize' => [
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
                    'functionArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'functionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'functionName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'gpuConfig' => [
                        '$ref' => '#/components/schemas/GPUConfig',
                        'required' => false,
                    ],
                    'handler' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'instanceLifecycleConfig' => [
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                        'required' => false,
                    ],
                    'internetAccess' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastUpdateStatus' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastUpdateStatusReason' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastUpdateStatusReasonCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'layers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/FunctionLayer',
                        ],
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/LogConfig',
                        'required' => false,
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                        'required' => false,
                    ],
                    'ossMountConfig' => [
                        '$ref' => '#/components/schemas/OSSMountConfig',
                        'required' => false,
                    ],
                    'role' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'runtime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'state' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'stateReason' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'stateReasonCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'tracingConfig' => [
                        '$ref' => '#/components/schemas/TracingConfig',
                        'required' => false,
                    ],
                    'vpcConfig' => [
                        '$ref' => '#/components/schemas/VPCConfig',
                        'required' => false,
                    ],
                    'tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'disableOndemand' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'invocationRestriction' => [
                        '$ref' => '#/components/schemas/FunctionRestriction',
                    ],
                    'sessionAffinity' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'enableLongLiving' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'instanceIsolationMode' => [
                        'type' => 'string',
                        'enum' => [
                            'SHARE',
                            'SESSION_EXCLUSIVE',
                            'REQUEST_EXCLUSIVE',
                        ],
                    ],
                    'sessionAffinityConfig' => [
                        'type' => 'string',
                    ],
                    'idleTimeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'disableInjectCredentials' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Env',
                            'Request',
                            'All',
                        ],
                    ],
                    'polarFsConfig' => [
                        '$ref' => '#/components/schemas/PolarFsConfig',
                    ],
                ],
            ],
            'FunctionLayer' => [
                'type' => 'object',
                'properties' => [
                    'arn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'FunctionRestriction' => [
                'type' => 'object',
                'properties' => [
                    'reason' => [
                        'type' => 'string',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                    ],
                    'disable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'GPUConfig' => [
                'type' => 'object',
                'properties' => [
                    'gpuMemorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'gpuType' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 128,
                    ],
                ],
            ],
            'GetInstanceLifecycleEventsOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'events' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/InstanceEventItem',
                        ],
                    ],
                ],
            ],
            'GetResourceTagsOutput' => [
                'type' => 'object',
                'properties' => [
                    'resouceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'resourceArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'tags' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'GetScalingConfigStatusOutput' => [
                'type' => 'object',
                'properties' => [],
            ],
            'HTTPTrigger' => [
                'type' => 'object',
                'properties' => [
                    'urlInternet' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'urlIntranet' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'HTTPTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'authType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'disableURLInternet' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'methods' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'HeaderFieldSessionAffinityConfig' => [
                'type' => 'object',
                'properties' => [
                    'sessionIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionConcurrencyPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'affinityHeaderFieldName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'disableSessionIdReuse' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'InputCodeLocation' => [
                'type' => 'object',
                'properties' => [
                    'checksum' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ossBucketName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 3,
                        'maxLength' => 63,
                    ],
                    'ossObjectName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'zipFile' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'InstanceEventItem' => [
                'type' => 'object',
                'properties' => [
                    'level' => [
                        'type' => 'string',
                    ],
                    'children' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/InstanceEventItem',
                        ],
                    ],
                    'time' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceInfo' => [
                'type' => 'object',
                'properties' => [
                    'versionId' => [
                        'type' => 'string',
                    ],
                    'instanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'createdTimeMs' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'destroyedTimeMs' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceLifecycleConfig' => [
                'type' => 'object',
                'properties' => [
                    'initializer' => [
                        '$ref' => '#/components/schemas/LifecycleHook',
                        'required' => false,
                    ],
                    'preStop' => [
                        '$ref' => '#/components/schemas/LifecycleHook',
                        'required' => false,
                    ],
                ],
            ],
            'JobConfig' => [
                'type' => 'object',
                'properties' => [
                    'maxRetryTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'triggerInterval' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'Key' => [
                'type' => 'object',
                'properties' => [
                    'prefix' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'suffix' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'Layer' => [
                'type' => 'object',
                'properties' => [
                    'acl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'code' => [
                        '$ref' => '#/components/schemas/OutputCodeLocation',
                        'required' => false,
                    ],
                    'codeChecksum' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'codeSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'compatibleRuntime' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'createTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'layerName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'layerVersionArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'license' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'version' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'LifecycleHook' => [
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 128,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ListAliasesOutput' => [
                'type' => 'object',
                'properties' => [
                    'aliases' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Alias',
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ListAsyncInvokeConfigOutput' => [
                'type' => 'object',
                'properties' => [
                    'configs' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/AsyncConfig',
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ListAsyncTaskOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'tasks' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/AsyncTask',
                        ],
                    ],
                ],
            ],
            'ListConcurrencyConfigsOutput' => [
                'type' => 'object',
                'properties' => [
                    'configs' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ConcurrencyConfig',
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ListCustomDomainOutput' => [
                'type' => 'object',
                'properties' => [
                    'customDomains' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/CustomDomain',
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ListElasticConfigsOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                    ],
                    'elasticConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ElasticConfigStatus',
                        ],
                    ],
                ],
            ],
            'ListFunctionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'functions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Function',
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ListInstancesOutput' => [
                'type' => 'object',
                'properties' => [
                    'instances' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/InstanceInfo',
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListLayerVersionOutput' => [
                'type' => 'object',
                'properties' => [
                    'layers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Layer',
                        ],
                    ],
                    'nextVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'ListLayersOutput' => [
                'type' => 'object',
                'properties' => [
                    'layers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Layer',
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ListProvisionConfigsOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'provisionConfigs' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ProvisionConfig',
                        ],
                    ],
                ],
            ],
            'ListResidentResourcePoolsOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                    ],
                    'residentResourcePools' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResidentResourcePool',
                        ],
                    ],
                ],
            ],
            'ListScalingConfigStatusOutput' => [
                'type' => 'object',
                'properties' => [],
            ],
            'ListScalingConfigsOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                    ],
                    'scalingConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingConfigStatus',
                        ],
                    ],
                ],
            ],
            'ListSessionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                    ],
                    'sessions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Session',
                        ],
                    ],
                ],
            ],
            'ListTagResourcesOutput' => [
                'type' => 'object',
                'properties' => [
                    'NextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RequestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'TagResources' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/TagResource',
                        ],
                    ],
                ],
            ],
            'ListTaggedResourcesOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'resources' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Resource',
                        ],
                    ],
                ],
            ],
            'ListTriggersOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'triggers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Trigger',
                        ],
                    ],
                ],
            ],
            'ListVersionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'direction' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'versions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Version',
                        ],
                    ],
                ],
            ],
            'ListVpcBindingsOutput' => [
                'type' => 'object',
                'properties' => [
                    'vpcIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'LogConfig' => [
                'type' => 'object',
                'properties' => [
                    'enableInstanceMetrics' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'enableRequestMetrics' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'logBeginRule' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 63,
                    ],
                    'project' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 63,
                    ],
                ],
            ],
            'MCPSSESessionAffinityConfig' => [
                'type' => 'object',
                'properties' => [
                    'sseEndpointPath' => [
                        'type' => 'string',
                    ],
                    'sessionConcurrencyPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MCPStreamableSessionAffinityConfig' => [
                'type' => 'object',
                'properties' => [
                    'sessionTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionConcurrencyPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MNSTopicTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'filterTag' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'notifyContentFormat' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'notifyStrategy' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'NASConfig' => [
                'type' => 'object',
                'properties' => [
                    'groupId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'mountPoints' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/NASMountConfig',
                        ],
                        'maxItems' => 5,
                    ],
                    'userId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'NASMountConfig' => [
                'type' => 'object',
                'properties' => [
                    'enableTLS' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'mountDir' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                    'serverAddr' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 128,
                    ],
                ],
            ],
            'OSSMountConfig' => [
                'type' => 'object',
                'properties' => [
                    'mountPoints' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/OSSMountPoint',
                        ],
                        'maxItems' => 5,
                    ],
                ],
            ],
            'OSSMountPoint' => [
                'type' => 'object',
                'properties' => [
                    'bucketName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 3,
                        'maxLength' => 64,
                    ],
                    'bucketPath' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 128,
                    ],
                    'endpoint' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 128,
                    ],
                    'mountDir' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 2,
                        'maxLength' => 64,
                    ],
                    'readOnly' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'OSSTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'events' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'filter' => [
                        '$ref' => '#/components/schemas/Filter',
                        'required' => false,
                    ],
                ],
            ],
            'OutputCodeLocation' => [
                'type' => 'object',
                'properties' => [
                    'location' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'repositoryType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'OutputFuncCode' => [
                'type' => 'object',
                'properties' => [
                    'checksum' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'url' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'PathConfig' => [
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'methods' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'path' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 2048,
                    ],
                    'qualifier' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'rewriteConfig' => [
                        '$ref' => '#/components/schemas/RewriteConfig',
                        'required' => false,
                    ],
                ],
            ],
            'PolarFsConfig' => [
                'type' => 'object',
                'properties' => [
                    'groupId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'userId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'mountPoints' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PolarFsMountConfig',
                        ],
                    ],
                ],
            ],
            'PolarFsMountConfig' => [
                'type' => 'object',
                'properties' => [
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'mountDir' => [
                        'type' => 'string',
                    ],
                    'remoteDir' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ProvisionConfig' => [
                'type' => 'object',
                'properties' => [
                    'scheduledActions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ScheduledAction',
                        ],
                    ],
                    'currentError' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'defaultTarget' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'current' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'alwaysAllocateCPU' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'alwaysAllocateGPU' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'targetTrackingPolicies' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/TargetTrackingPolicy',
                        ],
                    ],
                    'functionArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'target' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'PublishVersionInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                ],
            ],
            'PutAsyncInvokeConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'asyncTask' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
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
                ],
            ],
            'PutConcurrencyInput' => [
                'type' => 'object',
                'properties' => [
                    'reservedConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'PutElasticConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'minInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'residentPoolId' => [
                        'type' => 'string',
                    ],
                    'scheduledPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScheduledPolicy',
                        ],
                    ],
                    'scalingPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingPolicy',
                        ],
                    ],
                ],
            ],
            'PutProvisionConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'scheduledActions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ScheduledAction',
                        ],
                    ],
                    'defaultTarget' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'alwaysAllocateCPU' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'alwaysAllocateGPU' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'targetTrackingPolicies' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/TargetTrackingPolicy',
                        ],
                    ],
                    'target' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => true,
                        'required' => true,
                    ],
                ],
            ],
            'PutScalingConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'residentPoolId' => [
                        'type' => 'string',
                    ],
                    'minInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'enableOnDemandScaling' => [
                        'type' => 'boolean',
                    ],
                    'scheduledPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScheduledPolicy',
                        ],
                    ],
                    'horizontalScalingPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingPolicy',
                        ],
                    ],
                ],
            ],
            'PutScalingConfigOutput' => [
                'type' => 'object',
                'properties' => [],
            ],
            'RegexRule' => [
                'type' => 'object',
                'properties' => [
                    'match' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 256,
                    ],
                    'replacement' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 256,
                    ],
                ],
            ],
            'RegistryAuthConfig' => [
                'type' => 'object',
                'properties' => [
                    'password' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'userName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'RegistryCertConfig' => [
                'type' => 'object',
                'properties' => [
                    'insecure' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'rootCaCertBase64' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'RegistryConfig' => [
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        '$ref' => '#/components/schemas/RegistryAuthConfig',
                        'required' => false,
                    ],
                    'certConfig' => [
                        '$ref' => '#/components/schemas/RegistryCertConfig',
                        'required' => false,
                    ],
                    'networkConfig' => [
                        '$ref' => '#/components/schemas/RegistryNetworkConfig',
                        'required' => false,
                    ],
                ],
            ],
            'RegistryNetworkConfig' => [
                'type' => 'object',
                'properties' => [
                    'securityGroupId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'vSwitchId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'vpcId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ResidentConfig' => [
                'type' => 'object',
                'properties' => [
                    'poolId' => [
                        'type' => 'string',
                    ],
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ResidentResourceAllocation' => [
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'type' => 'string',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'instanceCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalCpuCores' => [
                        'type' => 'number',
                        'format' => 'double',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalMemorySize' => [
                        'type' => 'number',
                        'format' => 'double',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalGpuMemorySize' => [
                        'type' => 'number',
                        'format' => 'double',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalDiskSize' => [
                        'type' => 'number',
                        'format' => 'double',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'instanceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResidentResourceAllocationStatus' => [
                'type' => 'object',
                'properties' => [
                    'lastAllocatedTime' => [
                        'type' => 'string',
                    ],
                    'lastAllocation' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResidentResourceAllocation',
                        ],
                    ],
                ],
            ],
            'ResidentResourceCapacity' => [
                'type' => 'object',
                'properties' => [
                    'totalGpuCards' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalMemorySize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalDiskSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalGpuMemorySize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'totalCpuCores' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'gpuType' => [
                        'type' => 'string',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                ],
            ],
            'ResidentResourcePool' => [
                'type' => 'object',
                'properties' => [
                    'residentResourcePoolName' => [
                        'type' => 'string',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'expireTime' => [
                        'type' => 'string',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'resourcePoolConfig' => [
                        '$ref' => '#/components/schemas/ResidentResourceCapacity',
                        'deprecated' => false,
                    ],
                    'residentResourcePoolId' => [
                        'type' => 'string',
                    ],
                    'resourcePoolCapacity' => [
                        '$ref' => '#/components/schemas/ResidentResourceCapacity',
                        'deprecated' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'deprecated' => false,
                        'pattern' => '',
                    ],
                    'allocationStatus' => [
                        '$ref' => '#/components/schemas/ResidentResourceAllocationStatus',
                        'deprecated' => false,
                    ],
                ],
            ],
            'Resource' => [
                'type' => 'object',
                'properties' => [
                    'resouceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'resourceArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'tags' => [
                        'type' => 'object',
                        'required' => false,
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
                        'required' => false,
                    ],
                ],
            ],
            'RewriteConfig' => [
                'type' => 'object',
                'properties' => [
                    'equalRules' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/EqualRule',
                        ],
                    ],
                    'regexRules' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/RegexRule',
                        ],
                    ],
                    'wildcardRules' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WildcardRule',
                        ],
                    ],
                ],
            ],
            'RouteConfig' => [
                'type' => 'object',
                'properties' => [
                    'routes' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/PathConfig',
                        ],
                    ],
                ],
            ],
            'RunOptions' => [
                'type' => 'object',
                'properties' => [
                    'batchWindow' => [
                        '$ref' => '#/components/schemas/BatchWindow',
                        'required' => false,
                    ],
                    'deadLetterQueue' => [
                        '$ref' => '#/components/schemas/DeadLetterQueue',
                        'required' => false,
                    ],
                    'errorsTolerance' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'mode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'retryStrategy' => [
                        '$ref' => '#/components/schemas/RetryStrategy',
                        'required' => false,
                    ],
                ],
            ],
            'SLSTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'functionParameter' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'jobConfig' => [
                        '$ref' => '#/components/schemas/JobConfig',
                        'required' => false,
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/SLSTriggerLogConfig',
                        'required' => false,
                    ],
                    'sourceConfig' => [
                        '$ref' => '#/components/schemas/SourceConfig',
                        'required' => false,
                    ],
                ],
            ],
            'SLSTriggerLogConfig' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'project' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ScalingConfigStatus' => [
                'type' => 'object',
                'properties' => [
                    'functionArn' => [
                        'type' => 'string',
                    ],
                    'residentPoolId' => [
                        'type' => 'string',
                    ],
                    'minInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'currentInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'currentError' => [
                        'type' => 'string',
                    ],
                    'targetInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'enableOnDemandScaling' => [
                        'type' => 'boolean',
                    ],
                    'scheduledPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScheduledPolicy',
                        ],
                    ],
                    'horizontalScalingPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingPolicy',
                        ],
                    ],
                ],
            ],
            'ScalingPolicy' => [
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
                        'format' => 'float',
                    ],
                    'minInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'maxInstances' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timeZone' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScalingStatus' => [
                'type' => 'object',
                'properties' => [
                    'currentError' => [
                        'type' => 'string',
                    ],
                    'resourceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ScheduledAction' => [
                'type' => 'object',
                'properties' => [
                    'endTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'scheduleExpression' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'startTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'target' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'timeZone' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScheduledPolicy' => [
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
                    'timeZone' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Session' => [
                'type' => 'object',
                'properties' => [
                    'sessionId' => [
                        'type' => 'string',
                    ],
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'sessionAffinityType' => [
                        'type' => 'string',
                    ],
                    'sessionTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                    ],
                    'sessionStatus' => [
                        'type' => 'string',
                    ],
                    'containerId' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                    ],
                    'disableSessionIdReuse' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'SourceDTSParameters' => [
                'type' => 'object',
                'properties' => [
                    'BrokerUrl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InitCheckPoint' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Password' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RegionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Sid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'TaskId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Topic' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Username' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'SourceKafkaParameters' => [
                'type' => 'object',
                'properties' => [
                    'ConsumerGroup' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Network' => [
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
                    'SecurityGroupId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Topic' => [
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
            'SourceMNSParameters' => [
                'type' => 'object',
                'properties' => [
                    'IsBase64Decode' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'QueueName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RegionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'SourceMQTTParameters' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RegionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Topic' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'SourceRabbitMQParameters' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'QueueName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RegionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'VirtualHostName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'SourceRocketMQParameters' => [
                'type' => 'object',
                'properties' => [
                    'AuthType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'FilterType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'GroupID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceEndpoint' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceNetwork' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstancePassword' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceSecurityGroupId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceUsername' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceVSwitchIds' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'InstanceVpcId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Offset' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RegionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Tag' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Timestamp' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Topic' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'TLSConfig' => [
                'type' => 'object',
                'properties' => [
                    'cipherSuites' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'maxVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'minVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'Tag' => [
                'type' => 'object',
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
            'TagResource' => [
                'type' => 'object',
                'properties' => [
                    'ResourceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'TagKey' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'TagValue' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'TagResourceInput' => [
                'type' => 'object',
                'properties' => [
                    'resourceArn' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
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
            'TagResourcesInput' => [
                'type' => 'object',
                'properties' => [
                    'ResourceId' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Tag' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                ],
            ],
            'TargetTrackingPolicy' => [
                'type' => 'object',
                'properties' => [
                    'endTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'maxCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'metricTarget' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'metricType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'minCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'startTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'timeZone' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TimerTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'cronExpression' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'enable' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'payload' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'TracingConfig' => [
                'type' => 'object',
                'properties' => [
                    'params' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'Trigger' => [
                'type' => 'object',
                'properties' => [
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'httpTrigger' => [
                        '$ref' => '#/components/schemas/HTTPTrigger',
                        'required' => false,
                    ],
                    'invocationRole' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
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
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'targetArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'triggerConfig' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'triggerId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'triggerName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'triggerType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'UpdateAliasInput' => [
                'type' => 'object',
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
                        'maxLength' => 256,
                    ],
                    'versionId' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 10,
                    ],
                ],
            ],
            'UpdateCustomDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        '$ref' => '#/components/schemas/AuthConfig',
                        'required' => false,
                    ],
                    'certConfig' => [
                        '$ref' => '#/components/schemas/CertConfig',
                        'required' => false,
                    ],
                    'protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'routeConfig' => [
                        '$ref' => '#/components/schemas/RouteConfig',
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
            'UpdateFunctionInput' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        '$ref' => '#/components/schemas/InputCodeLocation',
                        'required' => false,
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'customContainerConfig' => [
                        '$ref' => '#/components/schemas/CustomContainerConfig',
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
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'diskSize' => [
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
                    'gpuConfig' => [
                        '$ref' => '#/components/schemas/GPUConfig',
                        'required' => false,
                    ],
                    'handler' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'instanceLifecycleConfig' => [
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                        'required' => false,
                    ],
                    'internetAccess' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'layers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/LogConfig',
                        'required' => false,
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                        'required' => false,
                    ],
                    'ossMountConfig' => [
                        '$ref' => '#/components/schemas/OSSMountConfig',
                        'required' => false,
                    ],
                    'role' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 300,
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
                    'tracingConfig' => [
                        '$ref' => '#/components/schemas/TracingConfig',
                        'required' => false,
                    ],
                    'vpcConfig' => [
                        '$ref' => '#/components/schemas/VPCConfig',
                        'required' => false,
                    ],
                    'disableOndemand' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'sessionAffinity' => [
                        'type' => 'string',
                    ],
                    'enableLongLiving' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'instanceIsolationMode' => [
                        'type' => 'string',
                        'enum' => [
                            'SHARE',
                            'REQUEST_EXCLUSIVE',
                            'SESSION_EXCLUSIVE',
                        ],
                    ],
                    'sessionAffinityConfig' => [
                        'type' => 'string',
                    ],
                    'idleTimeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'disableInjectCredentials' => [
                        'type' => 'string',
                        'enum' => [
                            'None',
                            'Env',
                            'Request',
                            'All',
                        ],
                    ],
                    'polarFsConfig' => [
                        '$ref' => '#/components/schemas/PolarFsConfig',
                    ],
                ],
            ],
            'UpdateResidentResourcePoolInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'useScaling' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'UpdateSessionInput' => [
                'type' => 'object',
                'properties' => [
                    'sessionTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'disableSessionIdReuse' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'UpdateTriggerInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'invocationRole' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 300,
                    ],
                    'qualifier' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'triggerConfig' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'VPCConfig' => [
                'type' => 'object',
                'properties' => [
                    'securityGroupId' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 50,
                    ],
                    'vSwitchIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 10,
                    ],
                    'vpcId' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 50,
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Version' => [
                'type' => 'object',
                'properties' => [
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'versionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'WAFConfig' => [
                'type' => 'object',
                'properties' => [
                    'enableWAF' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WildcardRule' => [
                'type' => 'object',
                'properties' => [
                    'match' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 256,
                    ],
                    'replacement' => [
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 256,
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ChangeResourceGroup' => [
            'path' => '/2023-03-30/resource-groups',
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
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/ChangeResourceGroupInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/2023-03-30/regions',
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
        'CreateCustomDomain' => [
            'path' => '/2023-03-30/custom-domains',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateCustomDomainInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteCustomDomain' => [
            'path' => '/2023-03-30/custom-domains/{domainName}',
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
            ],
        ],
        'GetCustomDomain' => [
            'path' => '/2023-03-30/custom-domains/{domainName}',
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
            ],
        ],
        'ListCustomDomains' => [
            'path' => '/2023-03-30/custom-domains',
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
            ],
        ],
        'UpdateCustomDomain' => [
            'path' => '/2023-03-30/custom-domains/{domainName}',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateCustomDomainInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteFunctionVersion' => [
            'path' => '/2023-03-30/functions/{functionName}/versions/{versionId}',
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
                    'name' => 'functionName',
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
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetFunctionCode' => [
            'path' => '/2023-03-30/functions/{functionName}/code',
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
            ],
        ],
        'ListFunctionVersions' => [
            'path' => '/2023-03-30/functions/{functionName}/versions',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'direction',
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
            ],
        ],
        'PublishFunctionVersion' => [
            'path' => '/2023-03-30/functions/{functionName}/versions',
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
                        '$ref' => '#/components/schemas/PublishVersionInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateFunction' => [
            'path' => '/2023-03-30/functions',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateFunctionInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteFunction' => [
            'path' => '/2023-03-30/functions/{functionName}',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetFunction' => [
            'path' => '/2023-03-30/functions/{functionName}',
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
            ],
        ],
        'ListFunctions' => [
            'path' => '/2023-03-30/functions',
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
                    'name' => 'fcVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'v3',
                            'v2',
                        ],
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
                            '$ref' => '#/components/schemas/Tag',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'runtime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gpuType',
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
                    'name' => 'functionName',
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
            ],
        ],
        'InvokeFunction' => [
            'path' => '/2023-03-30/functions/{functionName}/invocations',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
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
                    'name' => 'x-fc-invocation-type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-fc-log-type',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-fc-async-task-id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateFunction' => [
            'path' => '/2023-03-30/functions/{functionName}',
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
                        '$ref' => '#/components/schemas/UpdateFunctionInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EnableFunctionInvocation' => [
            'path' => '/2023-03-30/functions/{functionName}/invoke/enable',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DisableFunctionInvocation' => [
            'path' => '/2023-03-30/functions/{functionName}/invoke/disable',
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
                            'reason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'abortOngoingRequest' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAlias' => [
            'path' => '/2023-03-30/functions/{functionName}/aliases/{aliasName}',
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
                    'name' => 'functionName',
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
            ],
        ],
        'GetAlias' => [
            'path' => '/2023-03-30/functions/{functionName}/aliases/{aliasName}',
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
                    'name' => 'functionName',
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
            ],
        ],
        'ListAliases' => [
            'path' => '/2023-03-30/functions/{functionName}/aliases',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'UpdateAlias' => [
            'path' => '/2023-03-30/functions/{functionName}/aliases/{aliasName}',
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
                    'name' => 'functionName',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateAliasInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAlias' => [
            'path' => '/2023-03-30/functions/{functionName}/aliases',
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
                        '$ref' => '#/components/schemas/CreateAliasInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateTrigger' => [
            'path' => '/2023-03-30/functions/{functionName}/triggers',
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
                        '$ref' => '#/components/schemas/CreateTriggerInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteTrigger' => [
            'path' => '/2023-03-30/functions/{functionName}/triggers/{triggerName}',
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
            ],
        ],
        'GetTrigger' => [
            'path' => '/2023-03-30/functions/{functionName}/triggers/{triggerName}',
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
            ],
        ],
        'ListTriggers' => [
            'path' => '/2023-03-30/functions/{functionName}/triggers',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'UpdateTrigger' => [
            'path' => '/2023-03-30/functions/{functionName}/triggers/{triggerName}',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateTriggerInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAsyncInvokeConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/async-invoke-config',
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
            'parameters' => [
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
            ],
        ],
        'GetAsyncInvokeConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/async-invoke-config',
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
            ],
        ],
        'ListAsyncInvokeConfigs' => [
            'path' => '/2023-03-30/async-invoke-configs',
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
                    'name' => 'functionName',
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
            ],
        ],
        'PutAsyncInvokeConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/async-invoke-config',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/PutAsyncInvokeConfigInput',
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
            ],
        ],
        'DeleteProvisionConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/provision-config',
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
            'parameters' => [
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
            ],
        ],
        'GetProvisionConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/provision-config',
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
            ],
        ],
        'ListProvisionConfigs' => [
            'path' => '/2023-03-30/provision-configs',
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
                    'name' => 'functionName',
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
            ],
        ],
        'PutProvisionConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/provision-config',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/PutProvisionConfigInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteConcurrencyConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/concurrency',
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
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetConcurrencyConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/concurrency',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListConcurrencyConfigs' => [
            'path' => '/2023-03-30/concurrency-configs',
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
                    'name' => 'functionName',
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
            ],
        ],
        'PutConcurrencyConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/concurrency',
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
                        '$ref' => '#/components/schemas/PutConcurrencyInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateLayerVersion' => [
            'path' => '/2023-03-30/layers/{layerName}/versions',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateLayerVersionInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteLayerVersion' => [
            'path' => '/2023-03-30/layers/{layerName}/versions/{version}',
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
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLayerVersion' => [
            'path' => '/2023-03-30/layers/{layerName}/versions/{version}',
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
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLayerVersionByArn' => [
            'path' => '/2023-03-30/layerarn/{arn}',
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
                    'name' => 'arn',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListLayerVersions' => [
            'path' => '/2023-03-30/layers/{layerName}/versions',
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
            ],
        ],
        'ListLayers' => [
            'path' => '/2023-03-30/layers',
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
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'official',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutLayerACL' => [
            'path' => '/2023-03-30/layers/{layerName}/acl',
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
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'acl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [],
                    ],
                ],
            ],
        ],
        'ListInstances' => [
            'path' => '/2023-03-30/functions/{functionName}/instances',
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
                    'name' => 'withAllActive',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceStatus',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'enum' => [
                                'Running',
                                'Terminating',
                                'Destroyed',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'startTimeMs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'endTimeMs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                    'name' => 'limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instanceIds',
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
        'ListVpcBindings' => [
            'path' => '/2023-03-30/functions/{functionName}/vpc-bindings',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateVpcBinding' => [
            'path' => '/2023-03-30/functions/{functionName}/vpc-bindings',
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
                        '$ref' => '#/components/schemas/CreateVpcBindingInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteVpcBinding' => [
            'path' => '/2023-03-30/functions/{functionName}/vpc-bindings/{vpcId}',
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
                    'name' => 'functionName',
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
            ],
        ],
        'TagResources' => [
            'path' => '/2023-03-30/tags-v2',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/TagResourcesInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
            'path' => '/2023-03-30/tags-v2',
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
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
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
                [
                    'name' => 'NextToken',
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
            ],
        ],
        'UntagResources' => [
            'path' => '/2023-03-30/tags-v2',
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
        'GetAsyncTask' => [
            'path' => '/2023-03-30/functions/{functionName}/async-tasks/{taskId}',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'taskId',
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
            ],
        ],
        'ListAsyncTasks' => [
            'path' => '/2023-03-30/functions/{functionName}/async-tasks',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'includePayload',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopAsyncTask' => [
            'path' => '/2023-03-30/functions/{functionName}/async-tasks/{taskId}/stop',
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
            'parameters' => [
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'taskId',
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
            ],
        ],
        'CreateSession' => [
            'path' => '/2023-03-30/functions/{functionName}/sessions',
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
                    'name' => 'functionName',
                    'in' => 'path',
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
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateSessionInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSession' => [
            'path' => '/2023-03-30/functions/{functionName}/sessions/{sessionId}',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
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
            ],
        ],
        'UpdateSession' => [
            'path' => '/2023-03-30/functions/{functionName}/sessions/{sessionId}',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
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
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateSessionInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSessions' => [
            'path' => '/2023-03-30/functions/{functionName}/sessions',
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
                    'name' => 'functionName',
                    'in' => 'path',
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
                    'name' => 'limit',
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteSession' => [
            'path' => '/2023-03-30/functions/{functionName}/sessions/{sessionId}',
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
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
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
            ],
        ],
        'PutScalingConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/scaling-config',
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
                    'name' => 'functionName',
                    'in' => 'path',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/PutScalingConfigInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteScalingConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/scaling-config',
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
                    'name' => 'functionName',
                    'in' => 'path',
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
            ],
        ],
        'GetScalingConfig' => [
            'path' => '/2023-03-30/functions/{functionName}/scaling-config',
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
                    'name' => 'functionName',
                    'in' => 'path',
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
            ],
        ],
        'ListScalingConfigs' => [
            'path' => '/2023-03-30/scaling-configs',
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
                    'name' => 'functionName',
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
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'fcv3.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'fcv3.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'fcv3.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'fcv3.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'fcv3.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'fcv3.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'fcv3.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'fcv3.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'fcv3.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'fcv3.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'fcv3.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'fcv3.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'fcv3.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'fcv3.ap-southeast-5.aliyuncs.com	',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'fcv3.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'fcv3.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'fcv3.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'fcv3.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'fcv3.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cn-hangzhou-finance.fc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cn-shanghai-finance-1.fc.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'fcv3.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'me-central-1.fc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan-acdr-1',
            'endpoint' => 'cn-heyuan-acdr-1.fc.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'fcv3.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'fcv3.ap-northeast-2.aliyuncs.com',
        ],
    ],
];