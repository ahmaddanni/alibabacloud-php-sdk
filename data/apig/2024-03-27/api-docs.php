<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'APIG',
        'version' => '2024-03-27',
    ],
    'components' => [
        'schemas' => [
            'AgentServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'protocols' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'address' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'dashScopeConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'appCredentials' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'apiKey' => [
                                            'type' => 'string',
                                        ],
                                        'appId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'enableHealthCheck' => [
                        'type' => 'boolean',
                    ],
                    'provider' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'difyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'botType' => [
                                'type' => 'string',
                            ],
                            'apiKey' => [
                                'type' => 'string',
                            ],
                        ],
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
                    'paiEASServiceConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'workspaceId' => [
                                'type' => 'string',
                            ],
                            'serviceId' => [
                                'type' => 'string',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'endpointType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'bedrockServiceConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'awsRegion' => [
                                'type' => 'string',
                            ],
                            'awsAccessKey' => [
                                'type' => 'string',
                            ],
                            'awsSecretKey' => [
                                'type' => 'string',
                            ],
                        ],
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
                    'ApiKeyGenerateMode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AkSkIdentityConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'generateMode' => [
                        'type' => 'string',
                    ],
                    'ak' => [
                        'type' => 'string',
                    ],
                    'sk' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ApiKeyIdentityConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'apikeySource' => [
                        'type' => 'object',
                        'properties' => [
                            'source' => [
                                'type' => 'string',
                            ],
                            'value' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'credentials' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'generateMode' => [
                                    'type' => 'string',
                                ],
                                'apikey' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'ApiRouteConflictInfo' => [
                'type' => 'object',
                'properties' => [
                    'domainInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'domainId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'conflicts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'resourceType' => [
                                    'type' => 'string',
                                ],
                                'resourceId' => [
                                    'type' => 'string',
                                ],
                                'resourceName' => [
                                    'type' => 'string',
                                ],
                                'environmentInfo' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'environmentId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'details' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'level' => [
                                                'type' => 'string',
                                            ],
                                            'conflictingMatch' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'operationInfo' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'operationId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'name' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                    'match' => [
                                                        '$ref' => '#/components/schemas/HttpRouteMatch',
                                                    ],
                                                ],
                                            ],
                                            'detectedMatch' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'operationInfo' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'operationId' => [
                                                                'type' => 'string',
                                                            ],
                                                            'name' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                    'match' => [
                                                        '$ref' => '#/components/schemas/HttpRouteMatch',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'routeInfo' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'routeId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Attachment' => [
                'type' => 'object',
                'properties' => [
                    'policyAttachmentId' => [
                        'type' => 'string',
                    ],
                    'attachResourceIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'attachResourceType' => [
                        'type' => 'string',
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AuthConfig' => [
                'type' => 'object',
                'properties' => [
                    'authType' => [
                        'type' => 'string',
                    ],
                    'authMode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AuthorizationResourceInfo' => [
                'type' => 'object',
                'properties' => [
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'parentResourceId' => [
                        'type' => 'string',
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Backend' => [
                'type' => 'object',
                'properties' => [
                    'scene' => [
                        'type' => 'string',
                    ],
                    'services' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'serviceId' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'protocol' => [
                                    'type' => 'string',
                                ],
                                'port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CheckServiceLinkedRoleResult' => [
                'type' => 'object',
                'properties' => [
                    'existed' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ConsumerConfig' => [
                'type' => 'object',
                'properties' => [
                    'consumerId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConsumerInfo' => [
                'type' => 'object',
                'properties' => [
                    'consumerId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'DashboardFilter' => [
                'type' => 'object',
                'properties' => [
                    'routeName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DomainInfo' => [
                'type' => 'object',
                'properties' => [
                    'domainId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'createFrom' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'forceHttps' => [
                        'type' => 'boolean',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'mTLSEnabled' => [
                        'type' => 'boolean',
                    ],
                    'clientCACert' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EnvironmentInfo' => [
                'type' => 'object',
                'properties' => [
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'gatewayInfo' => [
                        '$ref' => '#/components/schemas/GatewayInfo',
                    ],
                    'subDomainInfos' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SubDomainInfo',
                        ],
                    ],
                    'default' => [
                        'type' => 'boolean',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GatewayInfo' => [
                'type' => 'object',
                'properties' => [
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'vpcInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'vpcId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'engineVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GatewayLogConfig' => [
                'type' => 'object',
                'properties' => [
                    'slsConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enable' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'HttpApiApiInfo' => [
                'type' => 'object',
                'properties' => [
                    'httpApiId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'basePath' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'versionInfo' => [
                        '$ref' => '#/components/schemas/HttpApiVersionInfo',
                    ],
                    'ingressInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'sourceId' => [
                                'type' => 'string',
                            ],
                            'ingressClass' => [
                                'type' => 'string',
                            ],
                            'watchNamespace' => [
                                'type' => 'string',
                            ],
                            'environmentInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'environmentId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'k8sClusterInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'clusterId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'overrideIngressIp' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'enabelAuth' => [
                        'type' => 'boolean',
                    ],
                    'authConfig' => [
                        '$ref' => '#/components/schemas/AuthConfig',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'modelCategory' => [
                        'type' => 'string',
                    ],
                    'protocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'environments' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'environmentId' => [
                                    'type' => 'string',
                                ],
                                'backendScene' => [
                                    'type' => 'string',
                                ],
                                'backendType' => [
                                    'type' => 'string',
                                ],
                                'serviceConfigs' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'gatewayServiceId' => [
                                                'type' => 'string',
                                            ],
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'protocol' => [
                                                'type' => 'string',
                                            ],
                                            'port' => [
                                                'type' => 'string',
                                            ],
                                            'weight' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'version' => [
                                                'type' => 'string',
                                            ],
                                            'match' => [
                                                '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                            ],
                                            'serviceId' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'customDomains' => [
                                    'type' => 'array',
                                    'items' => [
                                        '$ref' => '#/components/schemas/HttpApiDomainInfo',
                                    ],
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'alias' => [
                                    'type' => 'string',
                                ],
                                'gatewayInfo' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'gatewayId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                                'deployStatus' => [
                                    'type' => 'string',
                                ],
                                'subDomains' => [
                                    'type' => 'array',
                                    'items' => [
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
                                            'networkType' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
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
                            '$ref' => '#/components/schemas/HttpApiDeployConfig',
                        ],
                    ],
                    'deployCntMap' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'deployedCnt' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Cnt' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                            ],
                        ],
                    ],
                    'agentProtocols' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'HttpApiBackendMatchCondition' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'operator' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiBackendMatchConditions' => [
                'type' => 'object',
                'properties' => [
                    'default' => [
                        'type' => 'boolean',
                    ],
                    'conditions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiBackendMatchCondition',
                        ],
                    ],
                ],
            ],
            'HttpApiDeployConfig' => [
                'type' => 'object',
                'properties' => [
                    'customDomainIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'backendScene' => [
                        'type' => 'string',
                    ],
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'serviceId' => [
                                    'type' => 'string',
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'modelNamePattern' => [
                                    'type' => 'string',
                                ],
                                'modelName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'policyConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'enable' => [
                                    'type' => 'boolean',
                                ],
                                'aiFallbackConfig' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'serviceConfigs' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'serviceId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'targetModelName' => [
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
                    'autoDeploy' => [
                        'type' => 'boolean',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'routeBackend' => [
                        '$ref' => '#/components/schemas/Backend',
                    ],
                    'customDomainInfos' => [
                        'type' => 'array',
                        'items' => [
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
                            ],
                        ],
                    ],
                    'subDomains' => [
                        'type' => 'array',
                        'items' => [
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
                                'networkType' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'gatewayInfo' => [
                        '$ref' => '#/components/schemas/GatewayInfo',
                    ],
                    'mock' => [
                        '$ref' => '#/components/schemas/HttpApiMockContract',
                    ],
                    'gatewayType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiDomainInfo' => [
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
                ],
            ],
            'HttpApiInfoByName' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'versionEnabled' => [
                        'type' => 'boolean',
                    ],
                    'versionedHttpApis' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiApiInfo',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'GatewayId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiMockContract' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'responseCode' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'responseContent' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiOperation' => [
                'type' => 'object',
                'properties' => [
                    'method' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'path' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'response' => [
                        '$ref' => '#/components/schemas/HttpApiResponseContract',
                    ],
                    'request' => [
                        '$ref' => '#/components/schemas/HttpApiRequestContract',
                    ],
                    'mock' => [
                        '$ref' => '#/components/schemas/HttpApiMockContract',
                    ],
                    'enableAuth' => [
                        'type' => 'boolean',
                    ],
                    'authConfig' => [
                        '$ref' => '#/components/schemas/AuthConfig',
                    ],
                    'deployConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiDeployConfig',
                        ],
                    ],
                ],
            ],
            'HttpApiOperationInfo' => [
                'type' => 'object',
                'properties' => [
                    'operationId' => [
                        'type' => 'string',
                    ],
                    'method' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'response' => [
                        '$ref' => '#/components/schemas/HttpApiResponseContract',
                    ],
                    'request' => [
                        '$ref' => '#/components/schemas/HttpApiRequestContract',
                    ],
                    'mock' => [
                        '$ref' => '#/components/schemas/HttpApiMockContract',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'enableAuth' => [
                        'type' => 'boolean',
                    ],
                    'authConfig' => [
                        '$ref' => '#/components/schemas/AuthConfig',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'deployConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiDeployConfig',
                        ],
                    ],
                ],
            ],
            'HttpApiParameter' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'required' => [
                        'type' => 'boolean',
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'defaultValue' => [
                        'type' => 'string',
                    ],
                    'exampleValue' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiPublishRevisionInfo' => [
                'type' => 'object',
                'properties' => [
                    'revisionId' => [
                        'type' => 'string',
                    ],
                    'environmentInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'environmentId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'alias' => [
                                'type' => 'string',
                            ],
                            'gatewayInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'gatewayId' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'subDomains' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiDomainInfo',
                        ],
                    ],
                    'customDomains' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiDomainInfo',
                        ],
                    ],
                    'backendScene' => [
                        'type' => 'string',
                    ],
                    'backendType' => [
                        'type' => 'string',
                    ],
                    'serviceConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'gatewayServiceId' => [
                                    'type' => 'string',
                                ],
                                'port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'protocol' => [
                                    'type' => 'string',
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                                'match' => [
                                    '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                ],
                            ],
                        ],
                    ],
                    'dnsConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'dnsList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'match' => [
                                    '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                ],
                            ],
                        ],
                    ],
                    'vipConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'endpoints' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'weight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'match' => [
                                    '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                ],
                            ],
                        ],
                    ],
                    'cloudProductConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'cloudProductType' => [
                                'type' => 'string',
                            ],
                            'functionConfigs' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'qualifier' => [
                                            'type' => 'string',
                                        ],
                                        'gatewayServiceId' => [
                                            'type' => 'string',
                                        ],
                                        'weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                        ],
                                    ],
                                ],
                            ],
                            'containerServiceConfigs' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'gatewayServiceId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'namespace' => [
                                            'type' => 'string',
                                        ],
                                        'protocol' => [
                                            'type' => 'string',
                                        ],
                                        'weight' => [
                                            'type' => 'string',
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                        ],
                                        'port' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'mseNacosConfigs' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'gatewayServiceId' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'namespace' => [
                                            'type' => 'string',
                                        ],
                                        'groupName' => [
                                            'type' => 'string',
                                        ],
                                        'weight' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'operations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiOperationInfo',
                        ],
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'isCurrentVersion' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'HttpApiRequestContract' => [
                'type' => 'object',
                'properties' => [
                    'headerParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiParameter',
                        ],
                    ],
                    'queryParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiParameter',
                        ],
                    ],
                    'pathParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HttpApiParameter',
                        ],
                    ],
                    'body' => [
                        'type' => 'object',
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                            ],
                            'example' => [
                                'type' => 'string',
                            ],
                            'contentType' => [
                                'type' => 'string',
                            ],
                            'jsonSchema' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'HttpApiResponseContract' => [
                'type' => 'object',
                'properties' => [
                    'contentType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'code' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'example' => [
                                    'type' => 'string',
                                ],
                                'description' => [
                                    'type' => 'string',
                                ],
                                'jsonSchema' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'HttpApiVersionConfig' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'scheme' => [
                        'type' => 'string',
                    ],
                    'headerName' => [
                        'type' => 'string',
                    ],
                    'queryName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpApiVersionInfo' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'scheme' => [
                        'type' => 'string',
                    ],
                    'headerName' => [
                        'type' => 'string',
                    ],
                    'queryName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpDubboTranscoder' => [
                'type' => 'object',
                'properties' => [
                    'dubboServiceName' => [
                        'type' => 'string',
                    ],
                    'dubboServiceVersion' => [
                        'type' => 'string',
                    ],
                    'dubboServiceGroup' => [
                        'type' => 'string',
                    ],
                    'mothedMapList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'dubboMothedName' => [
                                    'type' => 'string',
                                ],
                                'httpMothed' => [
                                    'type' => 'string',
                                ],
                                'mothedpath' => [
                                    'type' => 'string',
                                ],
                                'passThroughAllHeaders' => [
                                    'type' => 'string',
                                ],
                                'passThroughList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'paramMapsList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'extractKeySpec' => [
                                                'type' => 'string',
                                            ],
                                            'extractKey' => [
                                                'type' => 'string',
                                            ],
                                            'mappingType' => [
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
            'HttpRoute' => [
                'type' => 'object',
                'properties' => [
                    'routeId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'deployStatus' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'match' => [
                        '$ref' => '#/components/schemas/HttpRouteMatch',
                    ],
                    'backend' => [
                        '$ref' => '#/components/schemas/Backend',
                    ],
                    'environmentInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'environmentId' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'alias' => [
                                'type' => 'string',
                            ],
                            'gatewayInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'gatewayId' => [
                                        'type' => 'string',
                                    ],
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'subDomains' => [
                                'type' => 'array',
                                'items' => [
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
                                        'networkType' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'mcpServerInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'importInstanceId' => [
                                'type' => 'string',
                            ],
                            'importNamespace' => [
                                'type' => 'string',
                            ],
                            'importMcpServerId' => [
                                'type' => 'string',
                            ],
                            'createFromType' => [
                                'type' => 'string',
                            ],
                            'mcpServerConfig' => [
                                'type' => 'string',
                            ],
                            'mcpRouteConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'protocol' => [
                                        'type' => 'string',
                                    ],
                                    'exposedUriPath' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'domainInfos' => [
                        'type' => 'array',
                        'items' => [
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
                            ],
                        ],
                    ],
                    'gatewayStatus' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'builtin' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HttpRouteMatch' => [
                'type' => 'object',
                'properties' => [
                    'ignoreUriCase' => [
                        'type' => 'boolean',
                    ],
                    'path' => [
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
                    'headers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'value' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'methods' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'queryParams' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'value' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'JwtIdentityConfig' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'secretType' => [
                        'type' => 'string',
                    ],
                    'jwks' => [
                        'type' => 'string',
                    ],
                    'jwtTokenConfig' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'position' => [
                                'type' => 'string',
                            ],
                            'key' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'pass' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'jwtPayloadConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'payloadKeyName' => [
                                'type' => 'string',
                            ],
                            'payloadKeyValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'KMSConfig' => [
                'type' => 'object',
                'properties' => [
                    'kmsInstanceId' => [
                        'type' => 'string',
                    ],
                    'kmsKeyId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LabelDetail' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'McpServerConfig' => [
                'type' => 'object',
                'properties' => [],
            ],
            'ParentResourceInfo' => [
                'type' => 'object',
                'properties' => [
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'apiInfo' => [
                        '$ref' => '#/components/schemas/HttpApiApiInfo',
                    ],
                ],
            ],
            'PluginClassInfo' => [
                'type' => 'object',
                'properties' => [
                    'pluginClassId' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'mode' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'source' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                    'versionDescription' => [
                        'type' => 'string',
                    ],
                    'executeStage' => [
                        'type' => 'string',
                    ],
                    'executePriority' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'configExample' => [
                        'type' => 'string',
                    ],
                    'imageName' => [
                        'type' => 'string',
                    ],
                    'wasmLanguage' => [
                        'type' => 'string',
                    ],
                    'supportedMinGatewayVersion' => [
                        'type' => 'string',
                    ],
                    'wasmUrl' => [
                        'type' => 'string',
                    ],
                    'innerPlugin' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'PolicyClassInfo' => [
                'type' => 'object',
                'properties' => [
                    'classId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'direction' => [
                        'type' => 'string',
                    ],
                    'attachableResourceTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'executeStage' => [
                        'type' => 'string',
                    ],
                    'executePriority' => [
                        'type' => 'string',
                    ],
                    'enableLog' => [
                        'type' => 'boolean',
                    ],
                    'deprecated' => [
                        'type' => 'boolean',
                    ],
                    'configExample' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PolicyDetailInfo' => [
                'type' => 'object',
                'properties' => [
                    'policyId' => [
                        'type' => 'string',
                    ],
                    'classId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PolicyInfo' => [
                'type' => 'object',
                'properties' => [
                    'policyId' => [
                        'type' => 'string',
                    ],
                    'direction' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                    ],
                    'classAlias' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'string',
                    ],
                    'attachments' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Attachment',
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'executeStage' => [
                        'type' => 'string',
                    ],
                    'executePriority' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceInfo' => [
                'type' => 'object',
                'properties' => [
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'resourceName' => [
                        'type' => 'string',
                    ],
                    'resourceVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceStatistic' => [
                'type' => 'object',
                'properties' => [
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'resourceCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Service' => [
                'type' => 'object',
                'properties' => [
                    'serviceId' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'addresses' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ports' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'protocol' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'unhealthyEndpoints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'outlierEndpoints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'healthCheck' => [
                        '$ref' => '#/components/schemas/ServiceHealthCheck',
                    ],
                    'healthStatus' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'createTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'gatewayId' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'groupName' => [
                        'type' => 'string',
                    ],
                    'aiServiceConfig' => [
                        '$ref' => '#/components/schemas/AiServiceConfig',
                    ],
                    'labelDetails' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LabelDetail',
                        ],
                    ],
                    'agentServiceConfig' => [
                        '$ref' => '#/components/schemas/AgentServiceConfig',
                    ],
                    'expressType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ServiceHealthCheck' => [
                'type' => 'object',
                'properties' => [
                    'protocol' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'interval' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'healthyThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'unhealthyThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'httpPath' => [
                        'type' => 'string',
                    ],
                    'httpHost' => [
                        'type' => 'string',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ServiceLinkedRole' => [
                'type' => 'object',
                'properties' => [
                    'roleId' => [
                        'type' => 'string',
                    ],
                    'roleName' => [
                        'type' => 'string',
                    ],
                    'arn' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'assumeRolePolicyDocument' => [
                        'type' => 'string',
                    ],
                    'createDate' => [
                        'type' => 'string',
                    ],
                    'rolePrincipalName' => [
                        'type' => 'string',
                    ],
                    'isServiceLinkedRole' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SslCertMetaInfo' => [
                'type' => 'object',
                'properties' => [
                    'certIdentifier' => [
                        'type' => 'string',
                    ],
                    'isChainCompleted' => [
                        'type' => 'boolean',
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'domain' => [
                        'type' => 'string',
                    ],
                    'fingerprint' => [
                        'type' => 'string',
                    ],
                    'certName' => [
                        'type' => 'string',
                    ],
                    'certId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commonName' => [
                        'type' => 'string',
                    ],
                    'domainMatchCert' => [
                        'type' => 'boolean',
                    ],
                    'sans' => [
                        'type' => 'string',
                    ],
                    'notBeforeTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'notAfterTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'algorithm' => [
                        'type' => 'string',
                    ],
                    'keySize' => [
                        'type' => 'string',
                    ],
                    'issuer' => [
                        'type' => 'string',
                    ],
                    'serialNo' => [
                        'type' => 'string',
                    ],
                    'md5' => [
                        'type' => 'string',
                    ],
                    'sha2' => [
                        'type' => 'string',
                    ],
                    'signAlgorithm' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SubDomainInfo' => [
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
                    'networkType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TlsCipherSuitesConfig' => [
                'type' => 'object',
                'properties' => [
                    'configType' => [
                        'type' => 'string',
                    ],
                    'tlsCipherSuite' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'supportVersions' => [
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
        ],
    ],
    'apis' => [
        'ExportHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}/export',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ImportHttpApi' => [
            'path' => '/v1/http-apis/import',
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
                            'specContentBase64' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'specFileUrl' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'versionConfig' => [
                                '$ref' => '#/components/schemas/HttpApiVersionConfig',
                                'required' => false,
                            ],
                            'dryRun' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'strategy' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'SpecFirst',
                                    'SpecOnly',
                                    'ExistFirst',
                                ],
                            ],
                            'targetHttpApiId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'specOssConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'regionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'bucketName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'objectKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'deployConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiDeployConfig',
                                    'required' => false,
                                ],
                            ],
                            'mcpRouteId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeployHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}/deploy',
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
                    'name' => 'httpApiId',
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
                            'routeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'restApiConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'revisionId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'environment' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'environmentId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'customDomainIds' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                            'backendScene' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'serviceConfigs' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'serviceId' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'protocol' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'port' => [
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'required' => false,
                                                        ],
                                                        'weight' => [
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'required' => false,
                                                        ],
                                                        'version' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'match' => [
                                                            '$ref' => '#/components/schemas/HttpApiBackendMatchConditions',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'operationIds' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'gatewayId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'httpApiConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'gatewayId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'routeIds' => [
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
        ],
        'CreateHttpApi' => [
            'path' => '/v1/http-apis',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'protocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'HTTP',
                                        'HTTPS',
                                    ],
                                ],
                            ],
                            'basePath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'versionConfig' => [
                                '$ref' => '#/components/schemas/HttpApiVersionConfig',
                                'required' => false,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ingressConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'environmentId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'sourceId' => [
                                        'type' => 'string',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'ingressClass' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'watchNamespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'overrideIngressIp' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'clusterId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'aiProtocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'agentProtocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'deployConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiDeployConfig',
                                    'required' => false,
                                ],
                            ],
                            'enableAuth' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'authConfig' => [
                                '$ref' => '#/components/schemas/AuthConfig',
                                'required' => false,
                            ],
                            'modelCategory' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'removeBasePathOnForward' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'firstByteTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}',
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
                    'name' => 'httpApiId',
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
                            'protocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'HTTP',
                                        'HTTPS',
                                    ],
                                ],
                            ],
                            'basePath' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'versionConfig' => [
                                '$ref' => '#/components/schemas/HttpApiVersionConfig',
                                'required' => false,
                            ],
                            'ingressConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'environmentId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'sourceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ingressClass' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'watchNamespace' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'overrideIngressIp' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'aiProtocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'agentProtocols' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'deployConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiDeployConfig',
                                    'required' => false,
                                ],
                            ],
                            'enableAuth' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'authConfig' => [
                                '$ref' => '#/components/schemas/AuthConfig',
                                'required' => false,
                            ],
                            'onlyChangeConfig' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'removeBasePathOnForward' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'firstByteTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListHttpApis' => [
            'path' => '/v1/http-apis',
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
                    'name' => 'keyword',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'types',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withAuthPolicyInEnvironmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withConsumerInfoById',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withEnvironmentInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withPluginAttachmentByPluginId',
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
                    'name' => 'withEnvironmentInfoById',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withAuthPolicyList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withIngressInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withPolicyConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withAPIsPublishedToEnvironment',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UndeployHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}/undeploy',
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
                    'name' => 'httpApiId',
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
                            'routeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'operationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteHttpApi' => [
            'path' => '/v1/http-apis/{httpApiId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations',
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
                    'name' => 'httpApiId',
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
                            'operations' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiOperation',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations/{operationId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'operationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations/{operationId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'operationId',
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
                            'operation' => [
                                '$ref' => '#/components/schemas/HttpApiOperation',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListHttpApiOperations' => [
            'path' => '/v1/http-apis/{httpApiId}/operations',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'method',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pathLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nameLike',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withConsumerInEnvironmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withConsumerInfoById',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'consumerAuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withPluginAttachmentByPluginId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'forDeploy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'enableAuth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteHttpApiOperation' => [
            'path' => '/v1/http-apis/{httpApiId}/operations/{operationId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'operationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateMcpServer' => [
            'path' => '/v1/mcp-servers',
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
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'RealMCP',
                                    'AssemblyMCP',
                                ],
                            ],
                            'domainIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'match' => [
                                '$ref' => '#/components/schemas/HttpRouteMatch',
                                'required' => false,
                            ],
                            'backendConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'scene' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'services' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'protocol' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'port' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'weight' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'serviceId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'version' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'protocol' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'exposedUriPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'assembledSources' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'mcpServerName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'mcpServerId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'tools' => [
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
                            'mcpStatisticsEnable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'createFromType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'grayMcpServerConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'routeId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpRouteMatch',
                                            'required' => false,
                                        ],
                                        'backendConfig' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'scene' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'services' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'protocol' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'port' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                            'weight' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                            'serviceId' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'version' => [
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
        'UpdateMcpServer' => [
            'path' => '/v1/mcp-servers/{mcpServerId}',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domainIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'match' => [
                                '$ref' => '#/components/schemas/HttpRouteMatch',
                                'required' => false,
                            ],
                            'backendConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'scene' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'services' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'protocol' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'port' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'weight' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'serviceId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'version' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'exposedUriPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'assembledSources' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'mcpServerName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'mcpServerId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'tools' => [
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
                            'mcpStatisticsEnable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'RealMCP',
                                    'AssemblyMCP',
                                ],
                            ],
                            'protocol' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'HTTP',
                                    'HTTPS',
                                    'SSE',
                                    'StreamableHTTP',
                                ],
                            ],
                            'createFromType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'grayMcpServerConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'routeId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'match' => [
                                            '$ref' => '#/components/schemas/HttpRouteMatch',
                                            'required' => false,
                                        ],
                                        'backendConfig' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'scene' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'services' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'protocol' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'port' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                            'weight' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                            'serviceId' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'version' => [
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
                [
                    'name' => 'mcpServerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMcpServer' => [
            'path' => '/v1/mcp-servers/{mcpServerId}',
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
                    'name' => 'mcpServerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMcpServers' => [
            'path' => '/v1/mcp-servers',
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
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'nameLike',
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
                        'required' => true,
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
                    'name' => 'createFromTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'deployStatuses',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteMcpServer' => [
            'path' => '/v1/mcp-servers/{mcpServerId}',
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
                    'name' => 'mcpServerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeployMcpServer' => [
            'path' => '/v1/mcp-servers/{mcpServerId}/deploy',
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
                    'name' => 'mcpServerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UnDeployMcpServer' => [
            'path' => '/v1/mcp-servers/{mcpServerId}/undeploy',
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
                    'name' => 'mcpServerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateHttpApiRoute' => [
            'path' => '/v1/http-apis/{httpApiId}/routes',
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
                    'name' => 'httpApiId',
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
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domainIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'match' => [
                                '$ref' => '#/components/schemas/HttpRouteMatch',
                                'required' => false,
                            ],
                            'backendConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'scene' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'services' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'serviceId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'protocol' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'port' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'weight' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'version' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'deployConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiDeployConfig',
                                    'required' => false,
                                ],
                            ],
                            'mcpRouteConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'protocol' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'exposedUriPath' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'mcpStatisticsEnable' => [
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
        'UpdateHttpApiRoute' => [
            'path' => '/v1/http-apis/{httpApiId}/routes/{routeId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'routeId',
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
                            'domainIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'match' => [
                                '$ref' => '#/components/schemas/HttpRouteMatch',
                                'required' => false,
                            ],
                            'backendConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'scene' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'services' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'serviceId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'protocol' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'version' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'weight' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'port' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'deployConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/HttpApiDeployConfig',
                                    'required' => false,
                                ],
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'mcpRouteConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'protocol' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'exposedUriPath' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'mcpStatisticsEnable' => [
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
        'GetHttpApiRoute' => [
            'path' => '/v1/http-apis/{httpApiId}/routes/{routeId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'routeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteHttpApiRoute' => [
            'path' => '/v1/http-apis/{httpApiId}/routes/{routeId}',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'routeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListHttpApiRoutes' => [
            'path' => '/v1/http-apis/{httpApiId}/routes',
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
                    'name' => 'httpApiId',
                    'in' => 'path',
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
                    'name' => 'environmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'deployStatuses',
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
                    'name' => 'nameLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pathLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withConsumerInfoById',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'consumerAuthorizationRuleId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withAuthPolicyInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withPluginAttachmentByPluginId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'domainId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'forDeploy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetService' => [
            'path' => '/v1/services/{serviceId}',
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
                    'name' => 'serviceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateService' => [
            'path' => '/v1/services',
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
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceConfigs' => [
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
                                        'namespace' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'groupName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'addresses' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'qualifier' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'aiServiceConfig' => [
                                            '$ref' => '#/components/schemas/AiServiceConfig',
                                            'required' => false,
                                        ],
                                        'agentServiceConfig' => [
                                            '$ref' => '#/components/schemas/AgentServiceConfig',
                                            'required' => false,
                                        ],
                                        'dnsServers' => [
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
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListServices' => [
            'path' => '/v1/services',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sourceTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
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
        'DeleteService' => [
            'path' => '/v1/services/{serviceId}',
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
                    'name' => 'serviceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateServiceVersion' => [
            'path' => '/v1/services/{serviceId}/versions',
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
                    'name' => 'serviceId',
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
                            'labels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                            'required' => true,
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
        'UpdateServiceVersion' => [
            'path' => '/v1/services/{serviceId}/versions/{name}',
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
                    'name' => 'serviceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
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
                            'labels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                            'required' => true,
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
        'DeleteServiceVersion' => [
            'path' => '/v1/services/{serviceId}/versions/{name}',
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
                    'name' => 'serviceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateSource' => [
            'path' => '/v1/sources',
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
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'k8sSourceConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'clusterId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'authorizeSecurityGroupRules' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'securityGroupId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'portRanges' => [
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
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'nacosSourceConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'instanceId' => [
                                        'type' => 'string',
                                        'required' => false,
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
        'GetSource' => [
            'path' => '/v1/sources/{sourceId}',
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
                    'name' => 'sourceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteSource' => [
            'path' => '/v1/sources/{sourceId}',
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
                    'name' => 'sourceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateGateway' => [
            'path' => '/v1/gateways',
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
                                'required' => false,
                            ],
                            'chargeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'spec' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vpcId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'networkAccessConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'zoneConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'selectOption' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'vSwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'zones' => [
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
                                                'vSwitchId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'logConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'sls' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tag' => [
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
                            'gatewayEdition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateGatewayName' => [
            'path' => '/v1/gateways/{gatewayId}/name',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
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
            ],
        ],
        'UpdateGatewayFeature' => [
            'path' => '/v1/gateways/{gatewayId}/gateway-features/{name}',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
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
                            'value' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpgradeGateway' => [
            'path' => '/v1/gateways/{gatewayId}/upgrade',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetGateway' => [
            'path' => '/v1/gateways/{gatewayId}',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListGateways' => [
            'path' => '/v1/gateways',
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
                'application/x-www-form-urlencoded',
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'gatewayId',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayType',
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
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'AddGatewaySecurityGroupRule' => [
            'path' => '/v1/gateways/{gatewayId}/security-group-rules',
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
                    'name' => 'gatewayId',
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
                            'securityGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'portRanges' => [
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
                        ],
                    ],
                ],
            ],
        ],
        'DeleteGateway' => [
            'path' => '/v1/gateways/{gatewayId}',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteGatewaySecurityGroupRule' => [
            'path' => '/v1/gateways/{gatewayId}/security-group-rules/{securityGroupRuleId}',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'securityGroupRuleId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cascadingDelete',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListZones' => [
            'path' => '/v1/zones',
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
            'parameters' => [],
        ],
        'RestartGateway' => [
            'path' => '/v1/gateways/{gatewayId}/restart',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListGatewayFeatures' => [
            'path' => '/v1/gateways/{gatewayId}/gateway-features',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RemoveConsumerAuthorizationRule' => [
            'path' => '/v1/authorization-rules/{consumerAuthorizationRuleId}',
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
                    'name' => 'consumerAuthorizationRuleId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryConsumerAuthorizationRules' => [
            'path' => '/v1/authorization-rules',
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
                    'name' => 'apiNameLike',
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
                    'name' => 'consumerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'environmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'groupByApi',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'parentResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'consumerNameLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateConsumerAuthorizationRules' => [
            'path' => '/v1/authorization-rules',
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
                            'authorizationRules' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'consumerId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'resourceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'resourceIdentifier' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'resourceId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'environmentId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'resources' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'parentResourceId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'expireMode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'expireTimestamp' => [
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
        'BatchDeleteConsumerAuthorizationRule' => [
            'path' => '/v1/authorization-rules',
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
                    'name' => 'consumerAuthorizationRuleIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteConsumer' => [
            'path' => '/v1/consumers/{consumerId}',
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
                    'name' => 'consumerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConsumers' => [
            'path' => '/v1/consumers',
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
                    'name' => 'nameLike',
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
                    'name' => 'gatewayType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteConsumerAuthorizationRule' => [
            'path' => '/v1/consumers/{consumerId}/authorization-rules/{consumerAuthorizationRuleId}',
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
                    'name' => 'consumerAuthorizationRuleId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'consumerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateConsumer' => [
            'path' => '/v1/consumers',
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
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'jwtIdentityConfig' => [
                                '$ref' => '#/components/schemas/JwtIdentityConfig',
                                'required' => false,
                            ],
                            'akSkIdentityConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/AkSkIdentityConfig',
                                    'required' => false,
                                ],
                            ],
                            'apikeyIdentityConfig' => [
                                '$ref' => '#/components/schemas/ApiKeyIdentityConfig',
                                'required' => false,
                            ],
                            'enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'gatewayType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateConsumer' => [
            'path' => '/v1/consumers/{consumerId}',
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
                    'name' => 'consumerId',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'jwtIdentityConfig' => [
                                '$ref' => '#/components/schemas/JwtIdentityConfig',
                                'required' => false,
                            ],
                            'akSkIdentityConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/AkSkIdentityConfig',
                                    'required' => false,
                                ],
                            ],
                            'apikeyIdentityConfig' => [
                                '$ref' => '#/components/schemas/ApiKeyIdentityConfig',
                                'required' => false,
                            ],
                            'enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetConsumer' => [
            'path' => '/v1/consumers/{consumerId}',
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
                    'name' => 'consumerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateConsumerAuthorizationRule' => [
            'path' => '/v1/consumers/{consumerId}/authorization-rules',
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
                    'name' => 'consumerId',
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
                            'resourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'parentResourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'authorizationResourceInfos' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/AuthorizationResourceInfo',
                                    'required' => false,
                                ],
                            ],
                            'expireMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expireTimestamp' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateConsumerAuthorizationRule' => [
            'path' => '/v1/consumers/{consumerId}/authorization-rules/{consumerAuthorizationRuleId}',
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
                    'name' => 'consumerId',
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
                            'expireMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expireTimestamp' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'authorizationResourceInfos' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/AuthorizationResourceInfo',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'consumerAuthorizationRuleId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetConsumerAuthorizationRule' => [
            'path' => '/v1/consumers/{consumerId}/authorization-rules/{consumerAuthorizationRuleId}',
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
                    'name' => 'consumerAuthorizationRuleId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'consumerId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPolicies' => [
            'path' => '/v1/policies',
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
                    'name' => 'withAttachments',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'attachResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'attachResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'environmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withSystemPolicy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPolicyClasses' => [
            'path' => '/v1/policy-classes',
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
                    'name' => 'type',
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
                    'name' => 'attachResourceType',
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
                    'name' => 'attachResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreatePolicy' => [
            'path' => '/v2/policies',
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'className' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'ConcurrencyLimit',
                                    'RateLimit',
                                    'CircuitBreaker',
                                    'IpAccessControl',
                                    'Timeout',
                                    'Retry',
                                    'Cors',
                                    'FlowCopy',
                                    'HeaderModify',
                                    'HttpRewrite',
                                    'Fallback',
                                    'DirectResponse',
                                    'Redirect',
                                    'ServiceTls',
                                    'ServiceLb',
                                    'ServicePortTls',
                                    'JWTAuth',
                                    'OIDCAuth',
                                    'ExternalZAuth',
                                    'Waf',
                                    'Authentication',
                                    'AiFallback',
                                    'AiSecurityGuard',
                                    'AiCache',
                                    'AiTokenRateLimit',
                                ],
                            ],
                            'config' => [
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
            ],
        ],
        'GetPolicy' => [
            'path' => '/v2/policies/{policyId}',
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
                    'name' => 'policyId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdatePolicy' => [
            'path' => '/v2/policies/{policyId}',
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
                    'name' => 'policyId',
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
                            'config' => [
                                'type' => 'string',
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
        'DeletePolicy' => [
            'path' => '/v2/policies/{policyId}',
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
                    'name' => 'policyId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreatePolicyAttachment' => [
            'path' => '/v1/policy-attachments',
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
                            'policyId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'attachResourceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'attachResourceType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'Domain',
                                    'Gateway',
                                    'GatewayRoute',
                                    'GatewayService',
                                    'HttpApi',
                                    'Operation',
                                    'Route',
                                    'Service',
                                    'ServicePort',
                                    'LLMApi',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPolicyAttachment' => [
            'path' => '/v1/policy-attachments/{policyAttachmentId}',
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
                    'name' => 'policyAttachmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeletePolicyAttachment' => [
            'path' => '/v1/policy-attachments/{policyAttachmentId}',
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
                    'name' => 'policyAttachmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListPlugins' => [
            'path' => '/v1/plugins',
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
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pluginClassId',
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
                    'name' => 'pluginClassName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withAttachmentInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'attachResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'attachResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'includeBuiltinAiGateway',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreatePluginAttachment' => [
            'path' => '/v1/plugin-attachments',
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
                            'pluginId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pluginConfig' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'attachResourceIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'attachResourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPluginAttachment' => [
            'path' => '/v1/plugin-attachments/{pluginAttachmentId}',
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
                    'name' => 'pluginAttachmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPluginAttachments' => [
            'path' => '/v1/plugin-attachments',
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
                    'name' => 'attachResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'attachResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'environmentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pluginId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
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
                    'name' => 'attachResourceTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withParentResource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdatePluginAttachment' => [
            'path' => '/v1/plugin-attachments/{pluginAttachmentId}',
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
                    'name' => 'pluginAttachmentId',
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
                            'attachResourceIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'pluginConfig' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeletePluginAttachment' => [
            'path' => '/v1/plugin-attachments/{pluginAttachmentId}',
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
                    'name' => 'pluginAttachmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'InstallPlugin' => [
            'path' => '/v1/plugins/',
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
                            'pluginClassId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayIds' => [
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
        'UninstallPlugin' => [
            'path' => '/v1/plugins/{pluginId}',
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
                    'name' => 'pluginId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSslCerts' => [
            'path' => '/v1/ssl/certs',
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
                    'name' => 'certNameLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'domainName',
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
        'GetDomain' => [
            'path' => '/v1/domains/{domainId}',
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
                    'name' => 'domainId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'withStatistics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDomain' => [
            'path' => '/v1/domains',
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
                            'protocol' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'forceHttps' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'mTLSEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'certIdentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'caCertIdentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientCACert' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'http2Option' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMax' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMin' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsCipherSuitesConfig' => [
                                '$ref' => '#/components/schemas/TlsCipherSuitesConfig',
                                'required' => false,
                            ],
                            'gatewayType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDomains' => [
            'path' => '/v1/domains',
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
                    'name' => 'nameLike',
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
                    'name' => 'gatewayId',
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
                    'name' => 'gatewayType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteDomain' => [
            'path' => '/v1/domains/{domainId}',
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
                    'name' => 'domainId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateDomain' => [
            'path' => '/v1/domains/{domainId}',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'protocol' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'forceHttps' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'mTLSEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'certIdentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'caCertIdentifier' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientCACert' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'http2Option' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMax' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsMin' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tlsCipherSuitesConfig' => [
                                '$ref' => '#/components/schemas/TlsCipherSuitesConfig',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'domainId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTraceConfig' => [
            'path' => '/v1/gateways/{gatewayId}/trace',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
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
        'GetDashboard' => [
            'path' => '/v1/gateways/{gatewayId}/dashboards',
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
                    'name' => 'gatewayId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pluginClassId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'apiId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'routeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'source',
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
                    'name' => 'filter',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'routeName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'acceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'upstreamCluster',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pluginId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeResourceGroup' => [
            'path' => '/move-resource-group',
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
                    'name' => 'Service',
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
        'GetResourceOverview' => [
            'path' => '/v1/overview/resources',
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
                    'name' => 'gatewayType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAndAttachPolicy' => [
            'path' => '/v1/policies',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'className' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'config' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'attachResourceIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'attachResourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateAndAttachPolicy' => [
            'path' => '/v1/policies/{policyId}',
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
                    'name' => 'policyId',
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
                            'config' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'attachResourceIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'attachResourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateEnvironment' => [
            'path' => '/v1/environments',
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
            'deprecated' => true,
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
                            'alias' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gatewayId' => [
                                'type' => 'string',
                                'required' => true,
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
        'GetEnvironment' => [
            'path' => '/v1/environments/{environmentId}',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'environmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'withVpcInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'withStatistics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateEnvironment' => [
            'path' => '/v1/environments/{environmentId}',
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
            'deprecated' => true,
            'parameters' => [
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
                    'name' => 'environmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteEnvironment' => [
            'path' => '/v1/environments/{environmentId}',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'environmentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListEnvironments' => [
            'path' => '/v1/environments',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'nameLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'aliasLike',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayNameLike',
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
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'gatewayType',
                    'in' => 'query',
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
            'regionId' => 'cn-qingdao',
            'endpoint' => 'apig.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'apig.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'apig.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'apig.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'apig.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'apig.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'apig.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'apig.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'apig.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'apig.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'apig.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'apig.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'apig.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'apig.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'apig.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'apig.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'apig.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'apig.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'apig.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'apig.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'apig.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'apig.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'apig.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'apig.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'apig.me-central-1.aliyuncs.com',
        ],
    ],
];