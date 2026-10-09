<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'emr-serverless-spark',
        'version' => '2023-08-08',
    ],
    'components' => [
        'schemas' => [
            'Artifact' => [
                'type' => 'object',
                'properties' => [
                    'fullPath' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'credential' => [
                        '$ref' => '#/components/schemas/Credential',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'bizId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'location' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'catagoryBizId' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Category' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'TASK',
                            'ARTIFACT',
                        ],
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'bizId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 64,
                    ],
                    'parentBizId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Configuration' => [
                'type' => 'object',
                'properties' => [
                    'configFileName' => [
                        'type' => 'string',
                    ],
                    'configItemKey' => [
                        'type' => 'string',
                    ],
                    'configItemValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConfigurationOverrides' => [
                'type' => 'object',
                'properties' => [
                    'configurations' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'configFileName' => [
                                    'type' => 'string',
                                ],
                                'configItemKey' => [
                                    'type' => 'string',
                                ],
                                'configItemValue' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Credential' => [
                'type' => 'object',
                'properties' => [
                    'securityToken' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'accessId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'signature' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'expire' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'host' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'dir' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'policy' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'JobDriver' => [
                'type' => 'object',
                'properties' => [
                    'sparkSubmit' => [
                        'type' => 'object',
                        'properties' => [
                            'entryPoint' => [
                                'type' => 'string',
                            ],
                            'entryPointArguments' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'sparkSubmitParameters' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'KerberosConf' => [
                'type' => 'object',
                'properties' => [
                    'gmtModified' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'krb5Conf' => [
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                    ],
                    'networkServiceId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'kerberosConfId' => [
                        'type' => 'string',
                    ],
                    'keytabs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'workspaceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PrincipalAction' => [
                'type' => 'object',
                'properties' => [
                    'principalArn' => [
                        'type' => 'string',
                    ],
                    'actionArn' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReleaseVersionImage' => [
                'type' => 'object',
                'properties' => [
                    'runtimeEngineType' => [
                        'type' => 'string',
                    ],
                    'cpuArchitecture' => [
                        'type' => 'string',
                    ],
                    'imageId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RunLog' => [
                'type' => 'object',
                'properties' => [
                    'driverStdOut' => [
                        'type' => 'string',
                    ],
                    'driverStdError' => [
                        'type' => 'string',
                    ],
                    'driverSyslog' => [
                        'type' => 'string',
                    ],
                    'driverStartup' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SparkConf' => [
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SqlOutput' => [
                'type' => 'object',
                'properties' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'fields' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                        ],
                                        'nullable' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'rows' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'values' => [
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
            'Tag' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Task' => [
                'type' => 'object',
                'properties' => [
                    'kernelId' => [
                        'type' => 'string',
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'defaultSqlComputeId' => [
                        'type' => 'string',
                    ],
                    'archives' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'lastRunResourceQueueId' => [
                        'type' => 'string',
                    ],
                    'sparkLogLevel' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkDriverMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'jars' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'sparkExecutorCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'extraArtifactIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'content' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'sparkVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkEntrypoint' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sparkArgs' => [
                        'type' => 'string',
                    ],
                    'environmentId' => [
                        'type' => 'string',
                    ],
                    'credential' => [
                        'type' => 'object',
                        'properties' => [
                            'accessId' => [
                                'type' => 'string',
                            ],
                            'securityToken' => [
                                'type' => 'string',
                            ],
                            'path' => [
                                'type' => 'string',
                            ],
                            'signature' => [
                                'type' => 'string',
                            ],
                            'accessUrl' => [
                                'type' => 'string',
                            ],
                            'expire' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'host' => [
                                'type' => 'string',
                            ],
                            'policy' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'hasChanged' => [
                        'type' => 'boolean',
                    ],
                    'extraSparkSubmitParams' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'artifactUrl' => [
                        'type' => 'string',
                    ],
                    'defaultResourceQueueId' => [
                        'type' => 'string',
                    ],
                    'defaultDatabase' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'categoryBizId' => [
                        'type' => 'string',
                    ],
                    'sessionClusterId' => [
                        'type' => 'string',
                    ],
                    'sparkSubmitClause' => [
                        'type' => 'string',
                    ],
                    'sparkConf' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SparkConf',
                        ],
                    ],
                    'params' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'pyFiles' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'tags' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'defaultCatalogId' => [
                        'type' => 'string',
                    ],
                    'sparkExecutorMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'fusion' => [
                        'type' => 'boolean',
                    ],
                    'isStreaming' => [
                        'type' => 'boolean',
                    ],
                    'sparkDriverCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'sparkLogPath' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'files' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'hasCommited' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
            'TaskInstance' => [
                'type' => 'object',
                'properties' => [
                    'taskInfo' => [
                        '$ref' => '#/components/schemas/Task',
                        'required' => false,
                    ],
                    'workspaceBizId' => [
                        'type' => 'string',
                    ],
                    'taskBizId' => [
                        'type' => 'string',
                    ],
                    'taskStatus' => [
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'type' => 'string',
                    ],
                    'fenixRunId' => [
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TaskSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'commiter' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'item' => [
                        '$ref' => '#/components/schemas/Task',
                    ],
                    'taskBizId' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Template' => [
                'type' => 'object',
                'properties' => [
                    'templateType' => [
                        'type' => 'string',
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkLogLevel' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkDriverMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkExecutorCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'sparkConf' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SparkConf',
                        ],
                    ],
                    'sparkVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkExecutorMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'fusion' => [
                        'type' => 'boolean',
                    ],
                    'isDefault' => [
                        'type' => 'boolean',
                    ],
                    'sparkDriverCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'displaySparkVersion' => [
                        'type' => 'string',
                    ],
                    'sparkLogPath' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TimeRange' => [
                'type' => 'object',
                'properties' => [
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'AddMembers' => [
            'path' => '/api/v1/auth/members',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'workspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'memberArns' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMembers' => [
            'path' => '/api/v1/auth/{workspaceId}/members',
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
                    'name' => 'nextToken',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GrantRoleToUsers' => [
            'path' => '/api/v1/auth/roles/grant',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'roleArn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userArns' => [
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
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSessionCluster' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters/{sessionClusterId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSessionCluster' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'queueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoStartConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'autoStopConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'idleTimeoutMinutes' => [
                                        'type' => 'integer',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'applicationConfigs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'configFileName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'configItemKey' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'configItemValue' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'releaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'kind' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayReleaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fusion' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'envId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'publicEndpointEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopSessionCluster' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters/action/stopSessionCluster',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'queueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sessionClusterId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartSessionCluster' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters/action/startSessionCluster',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'queueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sessionClusterId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSessionClusters' => [
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters',
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
                    'name' => 'nextToken',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sessionClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'queueName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kind',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListKyuubiSparkApplications' => [
            'path' => '/api/v1/kyuubi/{workspaceId}/{kyuubiServiceId}/applications',
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
                    'name' => 'nextToken',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'applicationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'resourceQueueId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'minDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'orderBy',
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
                    'name' => 'sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelKyuubiSparkApplication' => [
            'path' => '/api/v1/kyuubi/{workspaceId}/{kyuubiServiceId}/application/{applicationId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteKyuubiToken' => [
            'path' => '/api/v1/workspaces/{workspaceId}/kyuubiService/{kyuubiServiceId}/token/{tokenId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tokenId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateKyuubiToken' => [
            'path' => '/api/v1/workspaces/{workspaceId}/kyuubiService/{kyuubiServiceId}/token/{tokenId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tokenId',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'token' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoExpireConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'expireDays' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'memberArns' => [
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
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetKyuubiToken' => [
            'path' => '/api/v1/workspaces/{workspaceId}/kyuubiService/{kyuubiServiceId}/token/{tokenId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tokenId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateKyuubiToken' => [
            'path' => '/api/v1/workspaces/{workspaceId}/kyuubiService/{kyuubiServiceId}/token',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'token' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoExpireConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'expireDays' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'memberArns' => [
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
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListKyuubiToken' => [
            'path' => '/api/v1/workspaces/{workspaceId}/kyuubiService/{kyuubiServiceId}/token',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListKyuubiServices' => [
            'path' => '/api/v1/kyuubi/{workspaceId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateKyuubiService' => [
            'path' => '/api/v1/kyuubi/{workspaceId}',
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
                    'name' => 'workspaceId',
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
                            'kyuubiConfigs' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sparkConfigs' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'queue' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'computeInstance' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'releaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'publicEndpointEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'replica' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'kyuubiReleaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetKyuubiService' => [
            'path' => '/api/v1/kyuubi/{workspaceId}/{kyuubiServiceId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateKyuubiService' => [
            'path' => '/api/v1/kyuubi/{workspaceId}/{kyuubiServiceId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
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
                            'kyuubiConfigs' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sparkConfigs' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'queue' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'releaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'computeInstance' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'publicEndpointEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'replica' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'kyuubiReleaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'restart' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteKyuubiService' => [
            'path' => '/api/v1/kyuubi/{workspaceId}/{kyuubiServiceId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartKyuubiService' => [
            'path' => '/api/v1/kyuubi/{workspaceId}/{kyuubiServiceId}/start',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopKyuubiService' => [
            'path' => '/api/v1/kyuubi/{workspaceId}/{kyuubiServiceId}/stop',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'kyuubiServiceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteLivyCompute' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLivyCompute' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute',
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
                    'name' => 'workspaceBizId',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'livyVersion' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    '0.8.0',
                                ],
                            ],
                            'releaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'queueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'cpuLimit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'memoryLimit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoStartConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'autoStopConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'idleTimeoutMinutes' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'authType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'Token',
                                ],
                            ],
                            'displayReleaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fusion' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'networkName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'livyServerConf' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enablePublic' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLivyCompute' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'livyVersion' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    '0.8.0',
                                ],
                            ],
                            'releaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'queueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'cpuLimit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'memoryLimit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoStartConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'autoStopConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'idleTimeoutMinutes' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'authType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'Token',
                                ],
                            ],
                            'displayReleaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fusion' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'environmentId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'networkName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'livyServerConf' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enablePublic' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLivyCompute' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
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
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartLivyCompute' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}/start',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefreshLivyComputeToken' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}/token/{tokenId}',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tokenId',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'token' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoExpireConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'expireDays' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLivyComputeToken' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}/token/{tokenId}',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tokenId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLivyComputeToken' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}/token',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'token' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoExpireConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'expireDays' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteLivyComputeToken' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}/token/{tokenId}',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tokenId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopLivyCompute' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}/stop',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLivyComputeToken' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}/token',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLivyCompute' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/livycompute/{livyComputeId}',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'livyComputeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTemplate' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/template',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
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
                        'enum' => [
                            'TASK',
                            'SESSION',
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'templateBizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TerminateSqlStatement' => [
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}/terminate',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'statementId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSqlStatement' => [
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'codeContent' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'defaultDatabase' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'defaultCatalog' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sqlComputeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'taskBizId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSqlStatement' => [
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'statementId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSqlStatementContents' => [
            'path' => '/api/v1/workspaces/{workspaceId}/action/listSqlStatementContents',
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
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
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
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateWorkspace' => [
            'path' => '/api/v1/workspaces',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'workspaceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceSpec' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'cu' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'ossBucket' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dlfCatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'paymentType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'paymentDurationUnit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'duration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoRenew' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoRenewPeriod' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoRenewPeriodUnit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ramRoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'autoStartSessionCluster' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'releaseType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dlfType' => [
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
                                'maxItems' => 20,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListWorkspaces' => [
            'path' => '/api/v1/workspaces',
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
                    'name' => 'nextToken',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'state',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
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
                    ],
                ],
            ],
        ],
        'ListWorkspaceQueues' => [
            'path' => '/api/v1/workspaces/{workspaceId}/queues',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'environment',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'EditWorkspaceQueue' => [
            'path' => '/api/v1/workspaces/queues/action/edit',
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
                            'workspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceSpec' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'cu' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'maxCu' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'workspaceQueueName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'environments' => [
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
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListReleaseVersions' => [
            'path' => '/api/v1/releaseVersions',
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
                    'name' => 'serviceFilter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'releaseVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'releaseVersionStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'releaseType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListJobExecutors' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}/executors',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobRunId',
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
                    'name' => 'maxResults',
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
                    'name' => 'executorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLogContents' => [
            'path' => '/api/v1/workspaces/{workspaceId}/action/listLogContents',
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
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'length',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCuHours' => [
            'path' => '/api/v1/workspaces/{workspaceId}/metric/cuHours/{queue}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'queue',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDoctorApplication' => [
            'path' => '/api/v1/workspaces/{workspaceId}/runs/{runId}/action/getDoctorApplication',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'runId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'queryTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'locale',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelJobRun' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListJobRuns' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
                    'name' => 'nextToken',
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
                    'name' => 'workspaceId',
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
                    'name' => 'creator',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobRunId',
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
                    'name' => 'states',
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
                    'name' => 'startTime',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'resourceQueueId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobRunDeploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'minDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'isWorkflow',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'runtimeConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'applicationConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetJobRun' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartJobRun' => [
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'releaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'jobId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceQueueId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'codeType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'executionTimeoutSeconds' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'configurationOverrides' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'configurations' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'configFileName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'configItemKey' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'configItemValue' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Tag',
                                    'required' => false,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'jobDriver' => [
                                '$ref' => '#/components/schemas/JobDriver',
                                'required' => false,
                            ],
                            'displayReleaseVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fusion' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetRunConfiguration' => [
            'path' => '/api/v1/workspaces/{workspaceId}/runs/{runId}/action/getRunConfiguration',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'runId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartProcessInstance' => [
            'path' => '/dolphinscheduler/projects/{bizId}/executors/start-process-instance',
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
                    'name' => 'productNamespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'bizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processDefinitionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'isProd',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'runtimeQueue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'versionHashCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'action',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'comments',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'email',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateProcessDefinitionWithSchedule' => [
            'path' => '/dolphinscheduler/projects/{bizId}/process-definition/{code}',
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
                    'name' => 'productNamespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'bizId',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'code',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
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
                    'name' => 'timeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'taskDefinitionJson',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'code' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'description' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'alertEmailAddress' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'startAlertEnable' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'failAlertEnable' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'failRetryTimes' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'taskParams' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'workspaceBizId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'taskBizId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'resourceQueueId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'sparkDriverCores' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'sparkExecutorCores' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'sparkDriverMemory' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'sparkExecutorMemory' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'sparkConf' => [
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
                                        'sparkVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparkLogLevel' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparkLogPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'displaySparkVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fusion' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'environmentId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'localParams' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'prop' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'direct' => [
                                                        'type' => 'string',
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
                                'taskType' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'timeout' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
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
                    ],
                ],
                [
                    'name' => 'taskRelationJson',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'preTaskCode' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'preTaskVersion' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'postTaskCode' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'postTaskVersion' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'executionType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertEmailAddress',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'schedule',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'crontab' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'timezoneId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'retryTimes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'taskParallelism',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                [
                    'name' => 'resourceQueue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'releaseState',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'runAs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'publish',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'globalParams',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'prop' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'direct' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'type' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateProcessDefinitionWithSchedule' => [
            'path' => '/dolphinscheduler/projects/{bizId}/process-definition',
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
                    'name' => 'productNamespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'bizId',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'timeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'taskRelationJson',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'preTaskCode' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'preTaskVersion' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'postTaskCode' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'postTaskVersion' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'taskDefinitionJson',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'code' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'description' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'alertEmailAddress' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'startAlertEnable' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'failAlertEnable' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'failRetryTimes' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'taskParams' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'workspaceBizId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'taskBizId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'resourceQueueId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'sparkDriverCores' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'sparkExecutorCores' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'sparkDriverMemory' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'sparkExecutorMemory' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'sparkConf' => [
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
                                        'sparkVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparkLogLevel' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'sparkLogPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'displaySparkVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fusion' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'environmentId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'localParams' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'prop' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'direct' => [
                                                        'type' => 'string',
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
                                'taskType' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'timeout' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
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
                    ],
                ],
                [
                    'name' => 'executionType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertEmailAddress',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'schedule',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'crontab' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'timezoneId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'retryTimes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'taskParallelism',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceQueue',
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
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                [
                    'name' => 'publish',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'runAs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'globalParams',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'prop' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'direct' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'type' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GenerateTaskCodes' => [
            'path' => '/dolphinscheduler/projects/{bizId}/task-definition/gen-task-codes',
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
                    'name' => 'bizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'genNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'productNamespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListCatalogs' => [
            'path' => '/api/v1/workspaces/{workspaceId}/catalogs',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'environment',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTemplate' => [
            'path' => '/api/interactive/v1/workspace/{workspaceBizId}/template/listing',
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
                    'name' => 'workspaceBizId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
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
            'regionId' => 'cn-beijing',
            'endpoint' => 'emr-serverless-spark.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'emr-serverless-spark.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'emr-serverless-spark.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'emr-serverless-spark.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'emr-serverless-spark.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'emr-serverless-spark.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'emr-serverless-spark.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'emr-serverless-spark.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'emr-serverless-spark.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'emr-serverless-spark.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'emr-serverless-spark.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'emr-serverless-spark.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'emr-serverless-spark.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'emr-serverless-spark.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'na-south-1',
            'endpoint' => 'emr-serverless-spark.na-south-1.aliyuncs.com',
        ],
    ],
];