<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'AgentRun',
        'version' => '2025-09-10',
    ],
    'components' => [
        'schemas' => [
            'AgentRuntime' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeArn' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeVersion' => [
                        'type' => 'string',
                    ],
                    'artifactType' => [
                        'type' => 'string',
                        'enum' => [
                            'Code',
                            'Container',
                        ],
                    ],
                    'codeConfiguration' => [
                        '$ref' => '#/components/schemas/CodeConfiguration',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'protocolConfiguration' => [
                        '$ref' => '#/components/schemas/ProtocolConfiguration',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'memory' => [
                        'type' => 'integer',
                    ],
                    'port' => [
                        'type' => 'integer',
                    ],
                    'sessionConcurrencyLimitPerInstance' => [
                        'type' => 'integer',
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'healthCheckConfiguration' => [
                        '$ref' => '#/components/schemas/HealthCheckConfiguration',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'AgentRuntimeEndpoint' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointArn' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'targetVersion' => [
                        'type' => 'string',
                    ],
                    'routingConfiguration' => [
                        '$ref' => '#/components/schemas/RoutingConfiguration',
                    ],
                    'endpointPublicUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AgentRuntimeEndpointResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/AgentRuntimeEndpoint',
                    ],
                ],
            ],
            'AgentRuntimeResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/AgentRuntime',
                    ],
                ],
            ],
            'AgentRuntimeVersion' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeArn' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeId' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeVersion' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AgentRuntimeVersionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/AgentRuntimeVersion',
                    ],
                ],
            ],
            'AiFallbackConfig' => [
                'type' => 'object',
                'properties' => [
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AiFallbackServiceConfig',
                        ],
                    ],
                ],
            ],
            'AiFallbackServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'serviceId' => [
                        'type' => 'string',
                    ],
                    'targetModelName' => [
                        'type' => 'string',
                    ],
                    'passThroughModelName' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'AiServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'provider' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'enableHealthCheck' => [
                        'type' => 'boolean',
                    ],
                    'protocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'apiKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ApigLLMModel' => [
                'type' => 'object',
                'properties' => [
                    'modelId' => [
                        'type' => 'string',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'string',
                    ],
                    'modelsWeight' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'updateTime' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'targetId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ArmsConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enableArms' => [
                        'type' => 'boolean',
                    ],
                    'armsLicenseKey' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AttachPolicyConfig' => [
                'type' => 'object',
                'properties' => [
                    'className' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Browser' => [
                'type' => 'object',
                'properties' => [
                    'browserId' => [
                        'type' => 'string',
                    ],
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'CREATING',
                            'CREATE_FAILED',
                            'READY',
                            'DELETING',
                            'DELETED',
                            'DELETE_FAILED',
                        ],
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'recording' => [
                        '$ref' => '#/components/schemas/BrowserRecordingConfiguration',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserAutomationStream' => [
                'type' => 'object',
                'properties' => [
                    'streamEndpoint' => [
                        'type' => 'string',
                    ],
                    'streamStatus' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'browserType' => [
                        'type' => 'string',
                        'enum' => [
                            'CHROMIUM',
                            'FIREFOX',
                        ],
                    ],
                    'viewPort' => [
                        '$ref' => '#/components/schemas/ViewPortConfiguration',
                    ],
                    'userAgent' => [
                        'type' => 'string',
                    ],
                    'headless' => [
                        'type' => 'boolean',
                    ],
                    'enableExtension' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'BrowserLiveViewStream' => [
                'type' => 'object',
                'properties' => [
                    'streamEndpoint' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserOssLocation' => [
                'type' => 'object',
                'properties' => [
                    'bucket' => [
                        'type' => 'string',
                    ],
                    'prefix' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BrowserRecordingConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'ossLocation' => [
                        '$ref' => '#/components/schemas/BrowserOssLocation',
                    ],
                ],
            ],
            'BrowserResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Browser',
                    ],
                ],
            ],
            'BrowserSessionListOut' => [
                'type' => 'object',
                'properties' => [
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/BrowserSessionOut',
                        ],
                    ],
                ],
            ],
            'BrowserSessionOut' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'sessionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'browserId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'BrowserStreams' => [
                'type' => 'object',
                'properties' => [
                    'automationStream' => [
                        '$ref' => '#/components/schemas/BrowserAutomationStream',
                    ],
                    'liveViewStream' => [
                        '$ref' => '#/components/schemas/BrowserLiveViewStream',
                    ],
                ],
            ],
            'BrowserViewPort' => [
                'type' => 'object',
                'properties' => [
                    'height' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'width' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'CAPConfig' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'templateId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'CodeConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'zipFile' => [
                        'type' => 'string',
                    ],
                    'ossBucketName' => [
                        'type' => 'string',
                    ],
                    'ossObjectName' => [
                        'type' => 'string',
                    ],
                    'checksum' => [
                        'type' => 'string',
                    ],
                    'language' => [
                        'type' => 'string',
                        'enum' => [
                            'python3.10',
                            'python3.12',
                            'nodejs18',
                            'nodejs20',
                            'java8',
                            'java11',
                        ],
                    ],
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CodeInfo' => [
                'type' => 'object',
                'properties' => [
                    'ossBucketName' => [
                        'type' => 'string',
                    ],
                    'ossObjectName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeInterpreter' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterId' => [
                        'type' => 'string',
                    ],
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'READY',
                            'TERMINATED',
                        ],
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeInterpreterResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreter',
                    ],
                ],
            ],
            'CodeInterpreterSessionConfig' => [
                'type' => 'object',
                'properties' => [
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'environment' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'workingDirectory' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeInterpreterSessionListOut' => [
                'type' => 'object',
                'properties' => [
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CodeInterpreterSessionOut',
                        ],
                    ],
                ],
            ],
            'CodeInterpreterSessionOut' => [
                'type' => 'object',
                'properties' => [
                    'sessionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'codeInterpreterId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CommonResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        'type' => 'any',
                    ],
                ],
            ],
            'ContainerConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'image' => [
                        'type' => 'string',
                    ],
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'imageRegistryType' => [
                        'type' => 'string',
                        'enum' => [
                            'ACR',
                            'ACREE',
                            'CUSTOM',
                        ],
                    ],
                    'acrInstanceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateAgentRuntimeEndpointInput' => [
                'type' => 'object',
                'properties' => [
                    'targetVersion' => [
                        'type' => 'string',
                    ],
                    'agentRuntimeEndpointName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'routingConfiguration' => [
                        '$ref' => '#/components/schemas/RoutingConfiguration',
                    ],
                ],
            ],
            'CreateAgentRuntimeInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'artifactType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Code',
                            'Container',
                        ],
                    ],
                    'codeConfiguration' => [
                        '$ref' => '#/components/schemas/CodeConfiguration',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                        'required' => true,
                    ],
                    'protocolConfiguration' => [
                        '$ref' => '#/components/schemas/ProtocolConfiguration',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'sessionConcurrencyLimitPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'healthCheckConfiguration' => [
                        '$ref' => '#/components/schemas/HealthCheckConfiguration',
                    ],
                ],
            ],
            'CreateAgentRuntimeVersionInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateApigLLMModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CreateBrowserInput' => [
                'type' => 'object',
                'properties' => [
                    'browserName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                        'required' => true,
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1024',
                        'maximum' => '16384',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateCodeInterpreterInput' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '128',
                        'maximum' => '16384',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'minimum' => '2.0',
                        'maximum' => '16.0',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'credentialId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateCredentialInput' => [
                'type' => 'object',
                'properties' => [
                    'credentialName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'credentialAuthType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'jwt',
                            'api_key',
                            'basic',
                            'ak_sk',
                            'custom_header',
                        ],
                    ],
                    'credentialSourceType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'external_llm',
                            'external_tool',
                            'internal',
                        ],
                    ],
                    'credentialSecret' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'credentialPublicConfig' => [
                        '$ref' => '#/components/schemas/CredentialPublicConfig',
                    ],
                ],
            ],
            'CreateCredentialOutput' => [
                'type' => 'object',
                'properties' => [
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'credentialAuthType' => [
                        'type' => 'string',
                    ],
                    'credentialSourceType' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'credentialSecret' => [
                        'type' => 'string',
                    ],
                    'credentialPublicConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'relatedResources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RelatedResource',
                        ],
                    ],
                ],
            ],
            'CreateDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateGatewayInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'identityId' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/GatewayNetworkConfiguration',
                    ],
                ],
            ],
            'CreateGatewayTargetInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'targetConfiguration' => [
                        '$ref' => '#/components/schemas/TargetConfiguration',
                    ],
                ],
            ],
            'CreateModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateModelProxyInput' => [
                'type' => 'object',
                'properties' => [
                    'modelProxyName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'modelType' => [
                        'type' => 'string',
                    ],
                    'proxyMode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'proxyConfig' => [
                        '$ref' => '#/components/schemas/ProxyConfig',
                        'required' => true,
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'serviceRegionId' => [
                        'type' => 'string',
                    ],
                    'litellmVersion' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'armsConfiguration' => [
                        '$ref' => '#/components/schemas/ArmsConfiguration',
                    ],
                ],
            ],
            'CreateModelServiceInput' => [
                'type' => 'object',
                'properties' => [
                    'modelServiceName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'modelType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'provider' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'providerSettings' => [
                        '$ref' => '#/components/schemas/ProviderSettings',
                        'required' => true,
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'modelInfoConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ModelInfoConfig',
                        ],
                    ],
                ],
            ],
            'CreateSandboxInput' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sandboxIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '21600',
                    ],
                    'sandboxId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateTemplateInput' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'templateType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Browser',
                            'CodeInterpreter',
                            'AllInOnePreview',
                            'AllInOne',
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                        'required' => true,
                    ],
                    'credentialConfiguration' => [
                        '$ref' => '#/components/schemas/CredentialConfiguration',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'sandboxIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '21600',
                    ],
                    'sandboxTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => true,
                        'minimum' => '1',
                        'maximum' => '21600',
                    ],
                    'armsConfiguration' => [
                        '$ref' => '#/components/schemas/ArmsConfiguration',
                    ],
                    'ossConfiguration' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/OssConfiguration',
                        ],
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'templateConfiguration' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
            'CreateToolData' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateToolInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'function_call',
                            'mcp',
                        ],
                    ],
                    'sourceType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'template',
                            'custom',
                            'schema',
                        ],
                    ],
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'CAPConfig' => [
                        '$ref' => '#/components/schemas/CAPConfig',
                    ],
                ],
            ],
            'CreateToolOutput' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CreateToolData',
                    ],
                ],
            ],
            'Credential' => [
                'type' => 'object',
                'properties' => [
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'credentialAuthType' => [
                        'type' => 'string',
                    ],
                    'credentialSourceType' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'credentialSecret' => [
                        'type' => 'string',
                    ],
                    'credentialPublicConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'relatedResources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RelatedResource',
                        ],
                    ],
                ],
            ],
            'CredentialConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'credentialName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CredentialListItem' => [
                'type' => 'object',
                'properties' => [
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'credentialAuthType' => [
                        'type' => 'string',
                    ],
                    'credentialSourceType' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'relatedResourceCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'CredentialPublicConfig' => [
                'type' => 'object',
                'properties' => [
                    'headerKey' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'authType' => [
                        'type' => 'string',
                        'enum' => [
                            'static_jwks',
                            'remote_jwks',
                        ],
                    ],
                    'remoteConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'uri' => [
                                'type' => 'string',
                            ],
                            'timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'users' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'username' => [
                                    'type' => 'string',
                                ],
                                'password' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'authConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CredentialResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Credential',
                    ],
                ],
            ],
            'CustomRuntimeConfig' => [
                'type' => 'object',
                'properties' => [
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
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
            'DeleteBrowserOut' => [
                'type' => 'object',
                'properties' => [
                    'browserId' => [
                        'type' => 'string',
                    ],
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeleteBrowserResult' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Browser',
                    ],
                ],
            ],
            'DeleteCodeInterpreterOut' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterId' => [
                        'type' => 'string',
                    ],
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeleteCodeInterpreterResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreter',
                    ],
                ],
            ],
            'DeleteModelProxyResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ModelProxy',
                    ],
                ],
            ],
            'DeleteModelServiceResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ModelService',
                    ],
                ],
            ],
            'DeleteSandboxResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Sandbox',
                    ],
                ],
            ],
            'DeleteTemplateResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Template',
                    ],
                ],
            ],
            'DeregisterServiceInput' => [
                'type' => 'object',
                'properties' => [
                    'serviceName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'DomainInfo' => [
                'type' => 'object',
                'properties' => [
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ErrorResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FCLinkConfig' => [
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Gateway' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'internetUrl' => [
                        'type' => 'string',
                    ],
                    'intranetUrl' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GatewayNetworkConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'networkMode' => [
                        'type' => 'string',
                    ],
                    'vpcId' => [
                        'type' => 'string',
                    ],
                    'vswitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'GetBrowserSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/BrowserSessionOut',
                    ],
                ],
            ],
            'GetCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreterSessionOut',
                    ],
                ],
            ],
            'GetCredentialOutput' => [
                'type' => 'object',
                'properties' => [
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'credentialAuthType' => [
                        'type' => 'string',
                    ],
                    'credentialSourceType' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'credentialSecret' => [
                        'type' => 'string',
                    ],
                    'credentialPublicConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'relatedResources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RelatedResource',
                        ],
                    ],
                ],
            ],
            'GetToolOutput' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ToolInfo',
                    ],
                ],
            ],
            'GrayTrafficWeight' => [
                'type' => 'object',
                'properties' => [
                    'version' => [
                        'type' => 'string',
                    ],
                    'weight' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                ],
            ],
            'HealthCheckConfig' => [
                'type' => 'object',
                'properties' => [
                    'httpGetUrl' => [
                        'type' => 'string',
                        'maximum' => '2048',
                    ],
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '0',
                        'maximum' => '120',
                    ],
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '3',
                    ],
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'successThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                ],
            ],
            'HealthCheckConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'httpGetUrl' => [
                        'type' => 'string',
                        'maximum' => '2048',
                    ],
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '0',
                        'maximum' => '120',
                    ],
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '3',
                    ],
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                    'successThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '120',
                    ],
                ],
            ],
            'LLMAPIConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'removeBasePathOnForward' => [
                        'type' => 'boolean',
                    ],
                    'basePath' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'modelCategory' => [
                        'type' => 'string',
                    ],
                    'aiProtocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'deployConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LLMDeployConfig',
                        ],
                    ],
                    'attachPolicyConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AttachPolicyConfig',
                        ],
                    ],
                ],
            ],
            'LLMDeployConfig' => [
                'type' => 'object',
                'properties' => [
                    'backendScene' => [
                        'type' => 'string',
                    ],
                    'autoDeploy' => [
                        'type' => 'boolean',
                    ],
                    'gatewayType' => [
                        'type' => 'string',
                    ],
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TargetServiceConfig',
                        ],
                    ],
                    'policyConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PolicyConfig',
                        ],
                    ],
                    'customDomainIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ListAgentRuntimeEndpointsInput' => [
                'type' => 'object',
                'properties' => [
                    'endpointName' => [
                        'type' => 'string',
                    ],
                    'statuses' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeEndpointsOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AgentRuntimeEndpoint',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'total' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeEndpointsResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListAgentRuntimeEndpointsOutput',
                    ],
                ],
            ],
            'ListAgentRuntimeVersionsInput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeVersionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AgentRuntimeVersion',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'total' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimeVersionsResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListAgentRuntimeVersionsOutput',
                    ],
                ],
            ],
            'ListAgentRuntimesInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'statuses' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimesOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AgentRuntime',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'total' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListAgentRuntimesResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListAgentRuntimesOutput',
                    ],
                ],
            ],
            'ListBrowserSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/BrowserSessionListOut',
                    ],
                ],
            ],
            'ListBrowsersInput' => [
                'type' => 'object',
                'properties' => [
                    'browserName' => [
                        'type' => 'string',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                    ],
                ],
            ],
            'ListBrowsersOutput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Browser',
                        ],
                    ],
                ],
            ],
            'ListBrowsersResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListBrowsersOutput',
                    ],
                ],
            ],
            'ListCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreterSessionListOut',
                    ],
                ],
            ],
            'ListCodeInterpretersInput' => [
                'type' => 'object',
                'properties' => [
                    'codeInterpreterName' => [
                        'type' => 'string',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'minimum' => '1',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'minimum' => '1',
                    ],
                ],
            ],
            'ListCodeInterpretersOutput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CodeInterpreter',
                        ],
                    ],
                ],
            ],
            'ListCodeInterpretersResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListCodeInterpretersOutput',
                    ],
                ],
            ],
            'ListCredentialsOutput' => [
                'type' => 'object',
                'properties' => [
                    'total' => [
                        'type' => 'string',
                    ],
                    'pageSize' => [
                        'type' => 'string',
                    ],
                    'pageNumber' => [
                        'type' => 'string',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CredentialListItem',
                        ],
                    ],
                ],
            ],
            'ListCredentialsResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListCredentialsOutput',
                    ],
                ],
            ],
            'ListDomainsOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DomainInfo',
                        ],
                    ],
                    'pageNumber' => [
                        'type' => 'string',
                    ],
                    'pageSize' => [
                        'type' => 'string',
                    ],
                    'totalCount' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListGatewaysOutput' => [
                'type' => 'object',
                'properties' => [
                    'items' => [
                        '$ref' => '#/components/schemas/Gateway',
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ListModelProxiesOutput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ModelProxy',
                        ],
                    ],
                ],
            ],
            'ListModelProxiesResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListModelProxiesOutput',
                    ],
                ],
            ],
            'ListModelServicesOutput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ModelService',
                        ],
                    ],
                ],
            ],
            'ListModelServicesResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListModelServicesOutput',
                    ],
                ],
            ],
            'ListSandboxesOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                    ],
                    'items' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Sandbox',
                        ],
                    ],
                ],
            ],
            'ListSandboxesResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListSandboxesOutput',
                    ],
                ],
            ],
            'ListTemplatesOutput' => [
                'type' => 'object',
                'properties' => [
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'items' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Template',
                        ],
                    ],
                ],
            ],
            'ListTemplatesResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ListTemplatesOutput',
                    ],
                ],
            ],
            'ListToolsOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ToolListItem',
                        ],
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'pageNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'LogConfiguration' => [
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
            'MCPAPI' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolId' => [
                        'type' => 'string',
                    ],
                    'match' => [
                        '$ref' => '#/components/schemas/MCPMatch',
                    ],
                    'backendConfig' => [
                        '$ref' => '#/components/schemas/MCPBackendConfig',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'exposedUriPath' => [
                        'type' => 'string',
                    ],
                    'mcpStatisticsEnable' => [
                        'type' => 'boolean',
                    ],
                    'toolsConfig' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPAPIConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'toolId' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'exposedUriPath' => [
                        'type' => 'string',
                    ],
                    'mcpStatisticsEnable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'MCPBackendConfig' => [
                'type' => 'object',
                'properties' => [
                    'scene' => [
                        'type' => 'string',
                    ],
                    'services' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/MCPServiceConfig',
                        ],
                    ],
                ],
            ],
            'MCPMatch' => [
                'type' => 'object',
                'properties' => [
                    'path' => [
                        '$ref' => '#/components/schemas/MCPPathMatch',
                    ],
                ],
            ],
            'MCPPathMatch' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPServerConfig' => [
                'type' => 'object',
                'properties' => [
                    'transportType' => [
                        'type' => 'string',
                    ],
                    'serverUrl' => [
                        'type' => 'string',
                    ],
                    'ssePath' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'serviceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Model' => [
                'type' => 'object',
                'properties' => [
                    'modelId' => [
                        'type' => 'string',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'string',
                    ],
                    'modelsWeight' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'updateTime' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'targetId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelFeatures' => [
                'type' => 'object',
                'properties' => [
                    'vision' => [
                        'type' => 'boolean',
                    ],
                    'agentThought' => [
                        'type' => 'boolean',
                    ],
                    'toolCall' => [
                        'type' => 'boolean',
                    ],
                    'multiToolCall' => [
                        'type' => 'boolean',
                    ],
                    'streamToolCall' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ModelInfoConfig' => [
                'type' => 'object',
                'properties' => [
                    'modelName' => [
                        'type' => 'string',
                    ],
                    'modelFeatures' => [
                        '$ref' => '#/components/schemas/ModelFeatures',
                    ],
                    'modelProperties' => [
                        '$ref' => '#/components/schemas/ModelProperties',
                    ],
                    'modelParameterRules' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ModelParameterRule',
                        ],
                    ],
                ],
            ],
            'ModelParameterRule' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'default' => [
                        'type' => 'any',
                    ],
                    'min' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'max' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'required' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ModelProperties' => [
                'type' => 'object',
                'properties' => [
                    'contextSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ModelProxy' => [
                'type' => 'object',
                'properties' => [
                    'modelProxyId' => [
                        'type' => 'string',
                    ],
                    'modelProxyName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'modelType' => [
                        'type' => 'string',
                    ],
                    'proxyMode' => [
                        'type' => 'string',
                    ],
                    'proxyConfig' => [
                        '$ref' => '#/components/schemas/ProxyConfig',
                    ],
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'serviceRegionId' => [
                        'type' => 'string',
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'litellmVersion' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                ],
            ],
            'ModelProxyResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ModelProxy',
                    ],
                ],
            ],
            'ModelService' => [
                'type' => 'object',
                'properties' => [
                    'modelServiceName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'modelType' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'providerSettings' => [
                        '$ref' => '#/components/schemas/ProviderSettings',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'modelInfoConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ModelInfoConfig',
                        ],
                    ],
                    'modelServiceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelServiceResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/ModelService',
                    ],
                ],
            ],
            'NetworkConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'networkMode' => [
                        'type' => 'string',
                        'enum' => [
                            'PUBLIC',
                            'PRIVATE',
                            'PUBLIC_AND_PRIVATE',
                        ],
                    ],
                    'vpcId' => [
                        'type' => 'string',
                    ],
                    'securityGroupId' => [
                        'type' => 'string',
                    ],
                    'vswitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'OssConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'bucketName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'prefix' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'mountPoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'permission' => [
                        'type' => 'string',
                        'enum' => [
                            'READ_ONLY',
                            'READ_WRITE',
                        ],
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PaginationInfo' => [
                'type' => 'object',
                'properties' => [
                    'page' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'limit' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'total' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'totalPages' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PolicyConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'aiFallbackConfig' => [
                        '$ref' => '#/components/schemas/AiFallbackConfig',
                    ],
                ],
            ],
            'ProtocolConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'HTTP',
                            'MCP',
                        ],
                    ],
                ],
            ],
            'ProviderSettings' => [
                'type' => 'object',
                'properties' => [
                    'baseUrl' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'modelNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ProxyConfig' => [
                'type' => 'object',
                'properties' => [
                    'policies' => [
                        'type' => 'object',
                        'properties' => [
                            'requestTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'numRetries' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'cache' => [
                                'type' => 'boolean',
                            ],
                            'concurrencyLimit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'fallbacks' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'modelServiceName' => [
                                            'type' => 'string',
                                        ],
                                        'modelName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'endpoints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'modelServiceName' => [
                                    'type' => 'string',
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'baseUrl' => [
                                    'type' => 'string',
                                ],
                                'modelNames' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'PublishRuntimeVersionInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'publisher' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RecordingConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'ossLocation' => [
                        '$ref' => '#/components/schemas/OssConfiguration',
                    ],
                ],
            ],
            'RegisterServiceInput' => [
                'type' => 'object',
                'properties' => [
                    'tenantId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'serviceName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'serviceType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'protocol' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'HTTP',
                            'MCP-SSE',
                            'MCP-STREAMABLE-HTTP',
                        ],
                    ],
                    'serviceBackendEndpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'resourceName' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RelatedResource' => [
                'type' => 'object',
                'properties' => [
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'resourceName' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                        'enum' => [
                            'litellm',
                            'model',
                            'runtime',
                            'template',
                            'model',
                        ],
                    ],
                ],
            ],
            'RelatedWorkload' => [
                'type' => 'object',
                'properties' => [
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'resourceName' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RoutingConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'versionWeights' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VersionWeight',
                        ],
                    ],
                ],
            ],
            'Sandbox' => [
                'type' => 'object',
                'properties' => [
                    'sandboxId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'templateId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'templateName' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'READY',
                            'TERMINATED',
                        ],
                    ],
                    'createdAt' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'sandboxIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '21600',
                    ],
                    'endedAt' => [
                        'type' => 'string',
                    ],
                    'sandboxArn' => [
                        'type' => 'string',
                    ],
                    'sandboxIdleTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'metadata' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'SandboxHealthCheckOut' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'OK',
                        ],
                    ],
                ],
            ],
            'SandboxHealthCheckResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/SandboxHealthCheckOut',
                    ],
                ],
            ],
            'SandboxResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Sandbox',
                        'required' => true,
                    ],
                ],
            ],
            'ServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'aiServiceConfig' => [
                        '$ref' => '#/components/schemas/AiServiceConfig',
                    ],
                ],
            ],
            'ServiceResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        'type' => 'any',
                    ],
                ],
            ],
            'StartBrowserSessionInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StartBrowserSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/BrowserSessionOut',
                    ],
                ],
            ],
            'StartCodeInterpreterSessionInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StartCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/CodeInterpreterSessionOut',
                    ],
                ],
            ],
            'StopCodeInterpreterSessionResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StopSandboxResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Sandbox',
                    ],
                ],
            ],
            'Target' => [
                'type' => 'object',
                'properties' => [
                    'targetType' => [
                        'type' => 'string',
                    ],
                    'llmConfig' => [
                        '$ref' => '#/components/schemas/LLMAPIConfiguration',
                    ],
                    'mcpAPI' => [
                        '$ref' => '#/components/schemas/MCPAPI',
                    ],
                ],
            ],
            'TargetConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'targetType' => [
                        'type' => 'string',
                    ],
                    'llmAPIConfig' => [
                        '$ref' => '#/components/schemas/LLMAPIConfiguration',
                    ],
                    'mcpAPIConfig' => [
                        '$ref' => '#/components/schemas/MCPAPIConfiguration',
                    ],
                ],
            ],
            'TargetServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'weight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modelName' => [
                        'type' => 'string',
                    ],
                    'modelNamePattern' => [
                        'type' => 'string',
                    ],
                    'modelId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Template' => [
                'type' => 'object',
                'properties' => [
                    'templateId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'templateName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'templateVersion' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'templateArn' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'lastUpdatedAt' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'templateType' => [
                        'type' => 'string',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'credentialConfiguration' => [
                        '$ref' => '#/components/schemas/CredentialConfiguration',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'sandboxIdleTimeoutInSeconds' => [
                        'type' => 'string',
                    ],
                    'sandboxTTLInSeconds' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'resourceName' => [
                        'type' => 'string',
                    ],
                    'mcpOptions' => [
                        'type' => 'object',
                        'properties' => [
                            'transport' => [
                                'type' => 'string',
                            ],
                            'enabledTools' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'mcpState' => [
                        'type' => 'object',
                        'properties' => [
                            'status' => [
                                'type' => 'string',
                            ],
                            'statusReason' => [
                                'type' => 'string',
                            ],
                            'accessEndpoint' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'templateConfiguration' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'ossConfiguration' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/OssConfiguration',
                        ],
                    ],
                ],
            ],
            'TemplateResult' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/Template',
                        'required' => true,
                    ],
                ],
            ],
            'ToolInfo' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'schema' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'CAPConfig' => [
                        '$ref' => '#/components/schemas/CAPConfig',
                    ],
                ],
            ],
            'ToolListItem' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'schema' => [
                        'type' => 'string',
                    ],
                    'CAPConfig' => [
                        '$ref' => '#/components/schemas/CAPConfig',
                    ],
                ],
            ],
            'TriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'authType' => [
                        'type' => 'string',
                    ],
                    'methods' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UpdateAgentRuntimeEndpointInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeEndpointName' => [
                        'type' => 'string',
                    ],
                    'targetVersion' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'routingConfiguration' => [
                        '$ref' => '#/components/schemas/RoutingConfiguration',
                    ],
                ],
            ],
            'UpdateAgentRuntimeInput' => [
                'type' => 'object',
                'properties' => [
                    'agentRuntimeName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'artifactType' => [
                        'type' => 'string',
                        'enum' => [
                            'Code',
                            'Container',
                        ],
                    ],
                    'codeConfiguration' => [
                        '$ref' => '#/components/schemas/CodeConfiguration',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'protocolConfiguration' => [
                        '$ref' => '#/components/schemas/ProtocolConfiguration',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'sessionConcurrencyLimitPerInstance' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'sessionIdleTimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'healthCheckConfiguration' => [
                        '$ref' => '#/components/schemas/HealthCheckConfiguration',
                    ],
                ],
            ],
            'UpdateApigLLMModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UpdateCredentialInput' => [
                'type' => 'object',
                'properties' => [
                    'credentialSecret' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'credentialPublicConfig' => [
                        '$ref' => '#/components/schemas/CredentialPublicConfig',
                    ],
                ],
            ],
            'UpdateCredentialOutput' => [
                'type' => 'object',
                'properties' => [
                    'credentialId' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'credentialAuthType' => [
                        'type' => 'string',
                    ],
                    'credentialSourceType' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'credentialSecret' => [
                        'type' => 'string',
                    ],
                    'credentialPublicConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                    'relatedResources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RelatedResource',
                        ],
                    ],
                ],
            ],
            'UpdateDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateModelInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'address' => [
                        'type' => 'string',
                    ],
                    'apiKey' => [
                        'type' => 'string',
                    ],
                    'models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'desc' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateModelProxyInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'proxyConfig' => [
                        '$ref' => '#/components/schemas/ProxyConfig',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'armsConfiguration' => [
                        '$ref' => '#/components/schemas/ArmsConfiguration',
                    ],
                ],
            ],
            'UpdateModelServiceInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'credentialName' => [
                        'type' => 'string',
                    ],
                    'providerSettings' => [
                        '$ref' => '#/components/schemas/ProviderSettings',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'modelInfoConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ModelInfoConfig',
                        ],
                    ],
                    'statusReason' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateTargetConfigurationInput' => [
                'type' => 'object',
                'properties' => [
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'targetConfiguration' => [
                        '$ref' => '#/components/schemas/TargetConfiguration',
                    ],
                ],
            ],
            'UpdateTemplateInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'containerConfiguration' => [
                        '$ref' => '#/components/schemas/ContainerConfiguration',
                    ],
                    'credentialConfiguration' => [
                        '$ref' => '#/components/schemas/CredentialConfiguration',
                    ],
                    'networkConfiguration' => [
                        '$ref' => '#/components/schemas/NetworkConfiguration',
                    ],
                    'logConfiguration' => [
                        '$ref' => '#/components/schemas/LogConfiguration',
                    ],
                    'executionRoleArn' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'sandboxIdleTimeoutInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'minimum' => '1',
                        'maximum' => '21600',
                    ],
                    'sandboxTTLInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => true,
                        'minimum' => '1',
                        'maximum' => '21600',
                    ],
                    'armsConfiguration' => [
                        '$ref' => '#/components/schemas/ArmsConfiguration',
                    ],
                    'ossConfiguration' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/OssConfiguration',
                        ],
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'templateConfiguration' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
            'UpdateToolData' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'toolType' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateToolInput' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateToolOutput' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        '$ref' => '#/components/schemas/UpdateToolData',
                    ],
                ],
            ],
            'VersionWeight' => [
                'type' => 'object',
                'properties' => [
                    'version' => [
                        'type' => 'string',
                    ],
                    'weight' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                ],
            ],
            'ViewPortConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'height' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'width' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateAgentRuntimeInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
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
                        '$ref' => '#/components/schemas/UpdateAgentRuntimeInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAgentRuntime' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAgentRuntimes' => [
            'path' => '/2025-09-10/agents/runtimes',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeName',
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
                    'name' => 'searchMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
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
                        '$ref' => '#/components/schemas/CreateAgentRuntimeEndpointInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAgentRuntimeEndpoints' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endpointName',
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
                [
                    'name' => 'searchMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints/{agentRuntimeEndpointId}',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeEndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints/{agentRuntimeEndpointId}',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeEndpointId',
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
                        '$ref' => '#/components/schemas/UpdateAgentRuntimeEndpointInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAgentRuntimeEndpoint' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/endpoints/{agentRuntimeEndpointId}',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'agentRuntimeEndpointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PublishRuntimeVersion' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/versions',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
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
                        '$ref' => '#/components/schemas/PublishRuntimeVersionInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAgentRuntimeVersions' => [
            'path' => '/2025-09-10/agents/runtimes/{agentRuntimeId}/versions',
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
            'parameters' => [
                [
                    'name' => 'agentRuntimeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
        'CreateCodeInterpreter' => [
            'path' => '/2025-09-10/agents/code-interpreters',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateCodeInterpreterInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCodeInterpreters' => [
            'path' => '/2025-09-10/agents/code-interpreters',
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
            'parameters' => [
                [
                    'name' => 'codeInterpreterName',
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
        'GetCodeInterpreter' => [
            'path' => '/2025-09-10/agents/code-interpreters/{codeInterpreterId}',
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
            'parameters' => [
                [
                    'name' => 'codeInterpreterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteCodeInterpreter' => [
            'path' => '/2025-09-10/agents/code-interpreters/{codeInterpreterId}',
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
            'parameters' => [
                [
                    'name' => 'codeInterpreterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateBrowser' => [
            'path' => '/2025-09-10/agents/browsers',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateBrowserInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListBrowsers' => [
            'path' => '/2025-09-10/agents/browsers',
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
            'parameters' => [
                [
                    'name' => 'browserName',
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
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetBrowser' => [
            'path' => '/2025-09-10/agents/browsers/{browserId}',
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
            'parameters' => [
                [
                    'name' => 'browserId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteBrowser' => [
            'path' => '/2025-09-10/agents/browsers/{browserId}',
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
            'parameters' => [
                [
                    'name' => 'browserId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCredential' => [
            'path' => '/2025-09-10/agents/credentials/{credentialName}',
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
            'parameters' => [
                [
                    'name' => 'credentialName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateCredential' => [
            'path' => '/2025-09-10/agents/credentials/{credentialName}',
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
            'parameters' => [
                [
                    'name' => 'credentialName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateCredentialInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListCredentials' => [
            'path' => '/2025-09-10/agents/credentials',
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
            'parameters' => [
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
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'credentialAuthType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'jwt',
                            'api_key',
                            'basic',
                            'ak_sk',
                            'custom_header',
                        ],
                    ],
                ],
                [
                    'name' => 'credentialSourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'internal',
                            'external',
                            'external_llm',
                            'external_tool',
                        ],
                    ],
                ],
                [
                    'name' => 'credentialName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'provider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'enabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateCredential' => [
            'path' => '/2025-09-10/agents/credentials',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateCredentialInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteCredential' => [
            'path' => '/2025-09-10/agents/credentials/{credentialName}',
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
            'parameters' => [
                [
                    'name' => 'credentialName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSandbox' => [
            'path' => '/2025-09-10/sandboxes/{sandboxId}',
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
            'parameters' => [
                [
                    'name' => 'sandboxId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ActivateTemplateMCP' => [
            'path' => '/2025-09-10/templates/{templateName}/mcp/activate',
            'methods' => [
                'patch',
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
                            'enabledTools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'transport' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'sse',
                                    'streamable-http',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'templateName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopTemplateMCP' => [
            'path' => '/2025-09-10/templates/{templateName}/mcp/stop',
            'methods' => [
                'patch',
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
                    'name' => 'templateName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteModelService' => [
            'path' => '/2025-09-10/agents/model-services/{modelServiceName}',
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
                    'name' => 'modelServiceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListModelServices' => [
            'path' => '/2025-09-10/agents/model-services',
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
                    'name' => 'modelType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'provider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'providerType',
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
        'CreateSandbox' => [
            'path' => '/2025-09-10/sandboxes',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateSandboxInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListSandboxes' => [
            'path' => '/2025-09-10/sandboxes',
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
            'parameters' => [
                [
                    'name' => 'templateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'templateType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListModelProviders' => [
            'path' => '/2025-09-10/agents/model-providers',
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
                    'name' => 'modelType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'provider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'modelName',
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
        'DeleteModelProxy' => [
            'path' => '/2025-09-10/agents/model-proxies/{modelProxyName}',
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
                    'name' => 'modelProxyName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetModelService' => [
            'path' => '/2025-09-10/agents/model-services/{modelServiceName}',
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
                    'name' => 'modelServiceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAccessToken' => [
            'path' => '/2025-09-10/agents/accessToken',
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
            'parameters' => [
                [
                    'name' => 'resourceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'runtime',
                            'litellm',
                            'tool',
                            'template',
                            'sandbox',
                        ],
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetModelProxy' => [
            'path' => '/2025-09-10/agents/model-proxies/{modelProxyName}',
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
                    'name' => 'modelProxyName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateModelProxy' => [
            'path' => '/2025-09-10/agents/model-proxies',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateModelProxyInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListModelProxies' => [
            'path' => '/2025-09-10/agents/model-proxies',
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
                    'name' => 'proxyMode',
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
        'StopSandbox' => [
            'path' => '/2025-09-10/sandboxes/{sandboxId}/stop',
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
            'parameters' => [
                [
                    'name' => 'sandboxId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateModelService' => [
            'path' => '/2025-09-10/agents/model-services/{modelServiceName}',
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
                    'name' => 'modelServiceName',
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
                        '$ref' => '#/components/schemas/UpdateModelServiceInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTemplates' => [
            'path' => '/2025-09-10/templates',
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
            'parameters' => [
                [
                    'name' => 'templateType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Browser',
                            'CodeInterpreter',
                            'AllInOne',
                        ],
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
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'templateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTemplate' => [
            'path' => '/2025-09-10/templates/{templateName}',
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
            'parameters' => [
                [
                    'name' => 'templateName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTemplate' => [
            'path' => '/2025-09-10/templates/{templateName}',
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
            'parameters' => [
                [
                    'name' => 'templateName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateTemplate' => [
            'path' => '/2025-09-10/templates',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateTemplateInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateModelService' => [
            'path' => '/2025-09-10/agents/model-services',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateModelServiceInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateTemplate' => [
            'path' => '/2025-09-10/templates/{templateName}',
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
            'parameters' => [
                [
                    'name' => 'templateName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateTemplateInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateModelProxy' => [
            'path' => '/2025-09-10/agents/model-proxies/{modelProxyName}',
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
                    'name' => 'modelProxyName',
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
                        '$ref' => '#/components/schemas/UpdateModelProxyInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteSandbox' => [
            'path' => '/2025-09-10/sandboxes/{sandboxId}',
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
                    'name' => 'sandboxId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}',
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
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RetrieveMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/records',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'query' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'userId' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'namespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'metadata' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'memory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'topk' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'from' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'to' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'store' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMemorySession' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions/{sessionId}',
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
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}',
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
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListMemory' => [
            'path' => '/2025-09-10/agents/memories',
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
                    'name' => 'pattern',
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
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMemoryEvent' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions/{sessionId}/events/{eventId}',
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
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'eventId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMemorySessions' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions',
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
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
        'UpdateMemory' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}',
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
                    'name' => 'memoryName',
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
                            'shortTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'longTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'strategy' => [
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
        'CreateMemoryEvent' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/events',
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
                    'name' => 'memoryName',
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
                            'events' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'userId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'sessionId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'eventId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'metadata' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'any',
                                            ],
                                        ],
                                        'message' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
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
        'ListMemoryEvent' => [
            'path' => '/2025-09-10/agents/memories/{memoryName}/sessions/{sessionId}/events',
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
                    'name' => 'memoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
        'CreateMemory' => [
            'path' => '/2025-09-10/agents/memories',
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
                            'shortTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'longTtl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'strategy' => [
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
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'agentrun.cn-hangzhou.aliyuncs.com',
        ],
    ],
];