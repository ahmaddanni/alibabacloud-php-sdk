<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'Devs',
        'version' => '2023-07-14',
    ],
    'components' => [
        'schemas' => [
            'APIKeyAuthParameter' => [
                'type' => 'object',
                'properties' => [
                    'encrypted' => [
                        'type' => 'boolean',
                    ],
                    'in' => [
                        'type' => 'string',
                        'enum' => [
                            'header',
                            'query',
                        ],
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Artifact' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'updatedTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 64,
                        'pattern' => '^[a-zA-Z_][a-zA-Z0-9_-]{0,63}$',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/ArtifactSpec',
                        'required' => false,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ArtifactStatus',
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ArtifactCode' => [
                'type' => 'object',
                'properties' => [
                    'checksum' => [
                        'type' => 'string',
                    ],
                    'url' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ArtifactMeta' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'checksum' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ArtifactSpec' => [
                'type' => 'object',
                'properties' => [
                    'runtime' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'uri' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ArtifactStatus' => [
                'type' => 'object',
                'properties' => [
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'checksum' => [
                        'type' => 'string',
                    ],
                    'arn' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ArtifactTempBucketToken' => [
                'type' => 'object',
                'properties' => [
                    'ossObjectName' => [
                        'type' => 'string',
                    ],
                    'ossBucketName' => [
                        'type' => 'string',
                    ],
                    'ossRegion' => [
                        'type' => 'string',
                    ],
                    'credentials' => [
                        'type' => 'object',
                        'properties' => [
                            'accessKeyId' => [
                                'type' => 'string',
                            ],
                            'accessKeySecret' => [
                                'type' => 'string',
                            ],
                            'securityToken' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'Authorization' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'APIKey',
                        ],
                    ],
                    'parameters' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'apiKeyParameter' => [
                                '$ref' => '#/components/schemas/APIKeyAuthParameter',
                            ],
                        ],
                    ],
                ],
            ],
            'BranchFilter' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BuildCacheConfig' => [
                'type' => 'object',
                'properties' => [
                    'paths' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'keyPath' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'BuildConfig' => [
                'type' => 'object',
                'properties' => [
                    'default' => [
                        '$ref' => '#/components/schemas/DefaultBuilderConfig',
                    ],
                ],
            ],
            'Checkout' => [
                'type' => 'object',
                'properties' => [
                    'remote' => [
                        'type' => 'string',
                    ],
                    'ref' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeVersionReference' => [
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        'type' => 'string',
                    ],
                    'commitID' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ComfyUIWorkflowTemplate' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'uid' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/ComfyUIWorkflowTemplateSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'installCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ComfyUIWorkflowTemplateSpec' => [
                'type' => 'object',
                'properties' => [
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'author' => [
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'type' => [
                                'type' => 'string',
                            ],
                            'avatarUrl' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'coverUrls' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'versions' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'snapshotName' => [
                                    'type' => 'string',
                                ],
                                'flows' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'models' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'path' => [
                                                'type' => 'string',
                                            ],
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'size' => [
                                                'type' => 'string',
                                            ],
                                            'source' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'type' => [
                                                        'type' => 'string',
                                                    ],
                                                    'webUrl' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'downloadUrls' => [
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'nodes' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                            ],
                                            'version' => [
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
                                            'source' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'type' => [
                                                        'type' => 'string',
                                                    ],
                                                    'webUrl' => [
                                                        'type' => 'string',
                                                    ],
                                                    'cloneUrl' => [
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
                    'publishedVersions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ComfyUIWorkflowTemplateTask' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'uid' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/ComfyUIWorkflowTemplateTaskSpec',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ComfyUIWorkflowTemplateTaskStatus',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ComfyUIWorkflowTemplateTaskSpec' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'devFunctionName' => [
                        'type' => 'string',
                    ],
                    'installConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'version' => [
                                'type' => 'string',
                            ],
                            'autoInstall' => [
                                'type' => 'boolean',
                            ],
                            'template' => [
                                '$ref' => '#/components/schemas/ComfyUIWorkflowTemplateSpec',
                            ],
                        ],
                    ],
                ],
            ],
            'ComfyUIWorkflowTemplateTaskStatus' => [
                'type' => 'object',
                'properties' => [
                    'install' => [
                        'type' => 'object',
                        'properties' => [
                            'phase' => [
                                'type' => 'string',
                            ],
                            'invocationID' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'startTime' => [
                                'type' => 'string',
                            ],
                            'finishedTime' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'Condition' => [
                'type' => 'object',
                'properties' => [
                    'expression' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Connection' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/ConnectionSpec',
                        'required' => true,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ConnectionStatus',
                    ],
                ],
            ],
            'ConnectionSpec' => [
                'type' => 'object',
                'properties' => [
                    'platform' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'account' => [
                        '$ref' => '#/components/schemas/GitAccount',
                    ],
                    'gitlabConfig' => [
                        '$ref' => '#/components/schemas/GitLabConfig',
                    ],
                ],
            ],
            'ConnectionStatus' => [
                'type' => 'object',
                'properties' => [
                    'installation' => [
                        '$ref' => '#/components/schemas/Installation',
                    ],
                ],
            ],
            'Context' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ContextSchema' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'required' => [
                        'type' => 'boolean',
                    ],
                    'hint' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DefaultBuilderConfig' => [
                'type' => 'object',
                'properties' => [
                    'cache' => [
                        '$ref' => '#/components/schemas/BuildCacheConfig',
                    ],
                    'languages' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'rootPath' => [
                        'type' => 'string',
                    ],
                    'steps' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
            'DeleteModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployCustomContainerAsyncOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployCustomContainerInput' => [
                'type' => 'object',
                'properties' => [
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'accountID' => [
                        'type' => 'string',
                    ],
                    'vpcConfig' => [
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
                        ],
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'reportStatusURL' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'originalName' => [
                        'type' => 'string',
                    ],
                    'provisionConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'scheduledActions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'scheduleExpression' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'timeZone' => [
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
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'alwaysAllocateGPU' => [
                                'type' => 'boolean',
                            ],
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'gpuConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'gpuType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'traceId' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'httpTrigger' => [
                        'type' => 'object',
                        'properties' => [
                            'triggerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'authConfig' => [
                                        'type' => 'string',
                                    ],
                                    'methods' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'authType' => [
                                        'type' => 'string',
                                    ],
                                    'dsableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                    'disableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'qualifier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nasConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'groupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enableRequestMetrics' => [
                                'type' => 'boolean',
                            ],
                            'enableInstanceMetrics' => [
                                'type' => 'boolean',
                            ],
                            'logBeginRule' => [
                                'type' => 'string',
                            ],
                            'project' => [
                                'type' => 'string',
                            ],
                            'logstore' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                    ],
                    'customContainerConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'image' => [
                                'type' => 'string',
                            ],
                            'role' => [
                                'type' => 'string',
                            ],
                            'port' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'instanceLifecycleConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'preStop' => [
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
                                    'initializer' => [
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
                                ],
                            ],
                            'entrypoint' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'command' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'instanceConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'healthCheckConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'failureThreshold' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'httpGetUrl' => [
                                        'type' => 'string',
                                    ],
                                    'periodSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'timeoutSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'successThreshold' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'initialDelaySeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'modelConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'srcModelScopeModelID' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'workingDir' => [
                                'type' => 'string',
                            ],
                            'srcOssBucket' => [
                                'type' => 'string',
                            ],
                            'withPPU' => [
                                'type' => 'boolean',
                            ],
                            'skipDownload' => [
                                'type' => 'boolean',
                            ],
                            'srcModelScopeModelRevision' => [
                                'type' => 'string',
                            ],
                            'framework' => [
                                'type' => 'string',
                            ],
                            'sourceType' => [
                                'type' => 'string',
                            ],
                            'srcOssRegion' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeToken' => [
                                'type' => 'string',
                            ],
                            'multiModelConfig' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ModelConfig',
                                ],
                            ],
                            'syncStrategy' => [
                                'type' => 'string',
                            ],
                            'srcOssPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'concurrencyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'reservedConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'ossMountConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'bucketName' => [
                                            'type' => 'string',
                                        ],
                                        'endpoint' => [
                                            'type' => 'string',
                                        ],
                                        'bucketPath' => [
                                            'type' => 'string',
                                        ],
                                        'mountDir' => [
                                            'type' => 'string',
                                        ],
                                        'readOnly' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'asyncInvokeConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'asyncTask' => [
                                'type' => 'boolean',
                            ],
                            'maxAsyncEventAgeInSeconds' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'destinationConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'onFailure' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'destination' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'onSuccess' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'destination' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'maxAsyncRetryAttempts' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'featureGates' => [
                        'type' => 'object',
                        'properties' => [
                            'asyncProvisionCheck' => [
                                'type' => 'boolean',
                            ],
                            'disableRollbackOnProvisionFailure' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'DeployCustomContainerOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'traceID' => [
                                'type' => 'string',
                            ],
                            'vpcConfigStr' => [
                                'type' => 'string',
                            ],
                            'urlInternet' => [
                                'type' => 'string',
                            ],
                            'deploymentTaskID' => [
                                'type' => 'string',
                            ],
                            'nasConfigStr' => [
                                'type' => 'string',
                            ],
                            'errorMessage' => [
                                'type' => 'string',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'urlIntranet' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployEnvironmentOptions' => [
                'type' => 'object',
                'properties' => [
                    'services' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'DeployHuggingFaceModelAsyncOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployHuggingFaceModelInput' => [
                'type' => 'object',
                'properties' => [
                    'traceId' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enableRequestMetrics' => [
                                'type' => 'boolean',
                            ],
                            'enableInstanceMetrics' => [
                                'type' => 'boolean',
                            ],
                            'logBeginRule' => [
                                'type' => 'string',
                            ],
                            'project' => [
                                'type' => 'string',
                            ],
                            'logstore' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'imageName' => [
                        'type' => 'string',
                    ],
                    'modelConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'srcModelScopeModelID' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'workingDir' => [
                                'type' => 'string',
                            ],
                            'srcOssBucket' => [
                                'type' => 'string',
                            ],
                            'withPPU' => [
                                'type' => 'boolean',
                            ],
                            'fmkHuggingFaceConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'task' => [
                                        'type' => 'string',
                                    ],
                                    'framework' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'skipDownload' => [
                                'type' => 'boolean',
                            ],
                            'srcModelScopeModelRevision' => [
                                'type' => 'string',
                            ],
                            'framework' => [
                                'type' => 'string',
                            ],
                            'sourceType' => [
                                'type' => 'string',
                            ],
                            'srcOssRegion' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeToken' => [
                                'type' => 'string',
                            ],
                            'multiModelConfig' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ModelConfig',
                                ],
                            ],
                            'syncStrategy' => [
                                'type' => 'string',
                            ],
                            'srcOssPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'gpuConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'gpuType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nasConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'groupId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'originalName' => [
                        'type' => 'string',
                    ],
                    'accountID' => [
                        'type' => 'string',
                    ],
                    'httpTrigger' => [
                        'type' => 'object',
                        'properties' => [
                            'triggerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'authConfig' => [
                                        'type' => 'string',
                                    ],
                                    'methods' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'authType' => [
                                        'type' => 'string',
                                    ],
                                    'dsableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                    'disableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'qualifier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'reportStatusURL' => [
                        'type' => 'string',
                    ],
                    'provisionConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'scheduledActions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'scheduleExpression' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'timeZone' => [
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
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'alwaysAllocateGPU' => [
                                'type' => 'boolean',
                            ],
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                    'vpcConfig' => [
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
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'concurrencyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'reservedConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                    ],
                    'featureGates' => [
                        'type' => 'object',
                        'properties' => [
                            'asyncProvisionCheck' => [
                                'type' => 'boolean',
                            ],
                            'disableRollbackOnProvisionFailure' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'DeployHuggingFaceModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'traceID' => [
                                'type' => 'string',
                            ],
                            'taskType' => [
                                'type' => 'string',
                            ],
                            'urlInternet' => [
                                'type' => 'string',
                            ],
                            'deploymentTaskID' => [
                                'type' => 'string',
                            ],
                            'errorMessage' => [
                                'type' => 'string',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'urlIntranet' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployModelScopeModelAsyncOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployModelScopeModelInput' => [
                'type' => 'object',
                'properties' => [
                    'role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modelConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'srcModelScopeModelID' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeModelRevision' => [
                                'type' => 'string',
                            ],
                            'framework' => [
                                'type' => 'string',
                            ],
                            'sourceType' => [
                                'type' => 'string',
                            ],
                            'srcOssRegion' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'srcOssBucket' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeToken' => [
                                'type' => 'string',
                            ],
                            'multiModelConfig' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ModelConfig',
                                ],
                            ],
                            'syncStrategy' => [
                                'type' => 'string',
                            ],
                            'srcOssPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nasConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'groupId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'concurrencyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'reservedConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'originalName' => [
                        'type' => 'string',
                    ],
                    'accountID' => [
                        'type' => 'string',
                    ],
                    'httpTrigger' => [
                        'type' => 'object',
                        'properties' => [
                            'triggerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'authConfig' => [
                                        'type' => 'string',
                                    ],
                                    'methods' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'authType' => [
                                        'type' => 'string',
                                    ],
                                    'dsableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                    'disableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'qualifier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'traceId' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enableRequestMetrics' => [
                                'type' => 'boolean',
                            ],
                            'enableInstanceMetrics' => [
                                'type' => 'boolean',
                            ],
                            'logBeginRule' => [
                                'type' => 'string',
                            ],
                            'project' => [
                                'type' => 'string',
                            ],
                            'logstore' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'imageName' => [
                        'type' => 'string',
                    ],
                    'gpuConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'gpuType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'reportStatusURL' => [
                        'type' => 'string',
                    ],
                    'provisionConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'scheduledActions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'scheduleExpression' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'timeZone' => [
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
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'alwaysAllocateGPU' => [
                                'type' => 'boolean',
                            ],
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                    ],
                    'vpcConfig' => [
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
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployModelScopeModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'taskType' => [
                                'type' => 'string',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'urlIntranet' => [
                                'type' => 'string',
                            ],
                            'urlInternet' => [
                                'type' => 'string',
                            ],
                            'traceID' => [
                                'type' => 'string',
                            ],
                            'deploymentTaskID' => [
                                'type' => 'string',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'errorMessage' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'DeployOllamaModelAsyncOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployOllamaModelInput' => [
                'type' => 'object',
                'properties' => [
                    'traceId' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enableRequestMetrics' => [
                                'type' => 'boolean',
                            ],
                            'enableInstanceMetrics' => [
                                'type' => 'boolean',
                            ],
                            'logBeginRule' => [
                                'type' => 'string',
                            ],
                            'project' => [
                                'type' => 'string',
                            ],
                            'logstore' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'imageName' => [
                        'type' => 'string',
                    ],
                    'modelConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'srcModelScopeModelID' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'workingDir' => [
                                'type' => 'string',
                            ],
                            'srcOssBucket' => [
                                'type' => 'string',
                            ],
                            'withPPU' => [
                                'type' => 'boolean',
                            ],
                            'skipDownload' => [
                                'type' => 'boolean',
                            ],
                            'srcModelScopeModelRevision' => [
                                'type' => 'string',
                            ],
                            'framework' => [
                                'type' => 'string',
                            ],
                            'sourceType' => [
                                'type' => 'string',
                            ],
                            'srcOssRegion' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeToken' => [
                                'type' => 'string',
                            ],
                            'fmkOllamaConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'mirostat' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'seed' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'modelfileParams' => [
                                        'type' => 'string',
                                    ],
                                    'modelfileFullTextPostfix' => [
                                        'type' => 'string',
                                    ],
                                    'singleModelFile' => [
                                        'type' => 'string',
                                    ],
                                    'modelfileTemplate' => [
                                        'type' => 'string',
                                    ],
                                    'minP' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'tfsZ' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'stream' => [
                                        'type' => 'boolean',
                                    ],
                                    'temperature' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'quantize' => [
                                        'type' => 'string',
                                    ],
                                    'numCtx' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'repeatPenalty' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'numPredict' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'topK' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'mirostatEta' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'modelfileAdditionalFromsString' => [
                                        'type' => 'string',
                                    ],
                                    'topP' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'modelName' => [
                                        'type' => 'string',
                                    ],
                                    'stop' => [
                                        'type' => 'string',
                                    ],
                                    'modelfileAdapter' => [
                                        'type' => 'string',
                                    ],
                                    'modelfileSystem' => [
                                        'type' => 'string',
                                    ],
                                    'splitedModelStartFile' => [
                                        'type' => 'string',
                                    ],
                                    'mirostatTau' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'repeatLastN' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                            'multiModelConfig' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ModelConfig',
                                ],
                            ],
                            'syncStrategy' => [
                                'type' => 'string',
                            ],
                            'srcOssPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'gpuConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'gpuType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nasConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'groupId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'originalName' => [
                        'type' => 'string',
                    ],
                    'accountID' => [
                        'type' => 'string',
                    ],
                    'httpTrigger' => [
                        'type' => 'object',
                        'properties' => [
                            'triggerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'authConfig' => [
                                        'type' => 'string',
                                    ],
                                    'methods' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'authType' => [
                                        'type' => 'string',
                                    ],
                                    'dsableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                    'disableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'qualifier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'reportStatusURL' => [
                        'type' => 'string',
                    ],
                    'provisionConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'scheduledActions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'scheduleExpression' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'timeZone' => [
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
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'alwaysAllocateGPU' => [
                                'type' => 'boolean',
                            ],
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                    'vpcConfig' => [
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
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'concurrencyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'reservedConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                    ],
                    'featureGates' => [
                        'type' => 'object',
                        'properties' => [
                            'asyncProvisionCheck' => [
                                'type' => 'boolean',
                            ],
                            'disableRollbackOnProvisionFailure' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'DeployOllamaModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'traceID' => [
                                'type' => 'string',
                            ],
                            'modelName' => [
                                'type' => 'string',
                            ],
                            'urlInternet' => [
                                'type' => 'string',
                            ],
                            'deploymentTaskID' => [
                                'type' => 'string',
                            ],
                            'errorMessage' => [
                                'type' => 'string',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'urlIntranet' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeploySGLangModelAsyncOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeploySGLangModelInput' => [
                'type' => 'object',
                'properties' => [
                    'role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modelConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'fmkSGLangConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'fullTextPostfix' => [
                                        'type' => 'string',
                                    ],
                                    'loadFormat' => [
                                        'type' => 'string',
                                    ],
                                    'maxRunningRequests' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'servedModelName' => [
                                        'type' => 'string',
                                    ],
                                    'memFractionStatic' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'apiKey' => [
                                        'type' => 'string',
                                    ],
                                    'chatTemplate' => [
                                        'type' => 'string',
                                    ],
                                    'dtype' => [
                                        'type' => 'string',
                                    ],
                                    'maxTotalTokens' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'quantization' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'srcModelScopeModelID' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'workingDir' => [
                                'type' => 'string',
                            ],
                            'srcOssBucket' => [
                                'type' => 'string',
                            ],
                            'withPPU' => [
                                'type' => 'boolean',
                            ],
                            'skipDownload' => [
                                'type' => 'boolean',
                            ],
                            'srcModelScopeModelRevision' => [
                                'type' => 'string',
                            ],
                            'framework' => [
                                'type' => 'string',
                            ],
                            'sourceType' => [
                                'type' => 'string',
                            ],
                            'srcOssRegion' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeToken' => [
                                'type' => 'string',
                            ],
                            'multiModelConfig' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ModelConfig',
                                ],
                            ],
                            'syncStrategy' => [
                                'type' => 'string',
                            ],
                            'srcOssPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nasConfig' => [
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
                                        'enableTLS' => [
                                            'type' => 'boolean',
                                        ],
                                        'serverAddr' => [
                                            'type' => 'string',
                                        ],
                                        'mountDir' => [
                                            'type' => 'string',
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
                    'description' => [
                        'type' => 'string',
                    ],
                    'concurrencyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'reservedConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'originalName' => [
                        'type' => 'string',
                    ],
                    'accountID' => [
                        'type' => 'string',
                    ],
                    'httpTrigger' => [
                        'type' => 'object',
                        'properties' => [
                            'triggerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'authConfig' => [
                                        'type' => 'string',
                                    ],
                                    'methods' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'authType' => [
                                        'type' => 'string',
                                    ],
                                    'dsableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                    'disableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'qualifier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'traceId' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enableRequestMetrics' => [
                                'type' => 'boolean',
                            ],
                            'enableInstanceMetrics' => [
                                'type' => 'boolean',
                            ],
                            'logBeginRule' => [
                                'type' => 'string',
                            ],
                            'project' => [
                                'type' => 'string',
                            ],
                            'logstore' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'imageName' => [
                        'type' => 'string',
                    ],
                    'gpuConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'gpuType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'reportStatusURL' => [
                        'type' => 'string',
                    ],
                    'provisionConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'scheduledActions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'scheduleExpression' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'timeZone' => [
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
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'alwaysAllocateGPU' => [
                                'type' => 'boolean',
                            ],
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                    ],
                    'vpcConfig' => [
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
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'customContainerConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'role' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ossMountConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'bucketName' => [
                                            'type' => 'string',
                                        ],
                                        'endpoint' => [
                                            'type' => 'string',
                                        ],
                                        'bucketPath' => [
                                            'type' => 'string',
                                        ],
                                        'mountDir' => [
                                            'type' => 'string',
                                        ],
                                        'readOnly' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'featureGates' => [
                        'type' => 'object',
                        'properties' => [
                            'asyncProvisionCheck' => [
                                'type' => 'boolean',
                            ],
                            'disableRollbackOnProvisionFailure' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'DeploySGLangModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'traceID' => [
                                'type' => 'string',
                            ],
                            'modelName' => [
                                'type' => 'string',
                            ],
                            'urlInternet' => [
                                'type' => 'string',
                            ],
                            'deploymentTaskID' => [
                                'type' => 'string',
                            ],
                            'errorMessage' => [
                                'type' => 'string',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'urlIntranet' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployTensorRtModelAsyncOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployTensorRtModelInput' => [
                'type' => 'object',
                'properties' => [
                    'role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modelConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'srcModelScopeModelID' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeModelRevision' => [
                                'type' => 'string',
                            ],
                            'framework' => [
                                'type' => 'string',
                            ],
                            'sourceType' => [
                                'type' => 'string',
                            ],
                            'srcOssRegion' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'srcOssBucket' => [
                                'type' => 'string',
                            ],
                            'srcModelScopeToken' => [
                                'type' => 'string',
                            ],
                            'multiModelConfig' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ModelConfig',
                                ],
                            ],
                            'syncStrategy' => [
                                'type' => 'string',
                            ],
                            'srcOssPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nasConfig' => [
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
                                        'enableTLS' => [
                                            'type' => 'boolean',
                                        ],
                                        'serverAddr' => [
                                            'type' => 'string',
                                        ],
                                        'mountDir' => [
                                            'type' => 'string',
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
                    'description' => [
                        'type' => 'string',
                    ],
                    'concurrencyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'reservedConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'originalName' => [
                        'type' => 'string',
                    ],
                    'accountID' => [
                        'type' => 'string',
                    ],
                    'httpTrigger' => [
                        'type' => 'object',
                        'properties' => [
                            'triggerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'authConfig' => [
                                        'type' => 'string',
                                    ],
                                    'methods' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'authType' => [
                                        'type' => 'string',
                                    ],
                                    'dsableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                    'disableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'qualifier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'traceId' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enableRequestMetrics' => [
                                'type' => 'boolean',
                            ],
                            'enableInstanceMetrics' => [
                                'type' => 'boolean',
                            ],
                            'logBeginRule' => [
                                'type' => 'string',
                            ],
                            'project' => [
                                'type' => 'string',
                            ],
                            'logstore' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'imageName' => [
                        'type' => 'string',
                    ],
                    'gpuConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'gpuType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'reportStatusURL' => [
                        'type' => 'string',
                    ],
                    'provisionConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'scheduledActions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'scheduleExpression' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'timeZone' => [
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
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'alwaysAllocateGPU' => [
                                'type' => 'boolean',
                            ],
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                    ],
                    'vpcConfig' => [
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
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployTensorRtModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'traceID' => [
                                'type' => 'string',
                            ],
                            'urlInternet' => [
                                'type' => 'string',
                            ],
                            'deploymentTaskID' => [
                                'type' => 'string',
                            ],
                            'errorMessage' => [
                                'type' => 'string',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'urlIntranet' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployVllmModelAsyncOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeployVllmModelInput' => [
                'type' => 'object',
                'properties' => [
                    'role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modelConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'srcModelScopeModelID' => [
                                'type' => 'string',
                            ],
                            'prefix' => [
                                'type' => 'string',
                            ],
                            'workingDir' => [
                                'type' => 'string',
                            ],
                            'srcOssBucket' => [
                                'type' => 'string',
                            ],
                            'withPPU' => [
                                'type' => 'boolean',
                            ],
                            'skipDownload' => [
                                'type' => 'boolean',
                            ],
                            'srcModelScopeModelRevision' => [
                                'type' => 'string',
                            ],
                            'framework' => [
                                'type' => 'string',
                            ],
                            'sourceType' => [
                                'type' => 'string',
                            ],
                            'srcOssRegion' => [
                                'type' => 'string',
                            ],
                            'fmkVllmConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'fullTextPostfix' => [
                                        'type' => 'string',
                                    ],
                                    'loadFormat' => [
                                        'type' => 'string',
                                    ],
                                    'servedModelName' => [
                                        'type' => 'string',
                                    ],
                                    'gpuMemoryUtilization' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                    ],
                                    'apiKey' => [
                                        'type' => 'string',
                                    ],
                                    'chatTemplate' => [
                                        'type' => 'string',
                                    ],
                                    'dtype' => [
                                        'type' => 'string',
                                    ],
                                    'swapSpace' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'maxModelLen' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'maxParallelLoadingWorkers' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'blockSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'quantization' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'srcModelScopeToken' => [
                                'type' => 'string',
                            ],
                            'multiModelConfig' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ModelConfig',
                                ],
                            ],
                            'syncStrategy' => [
                                'type' => 'string',
                            ],
                            'srcOssPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nasConfig' => [
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
                                        'enableTLS' => [
                                            'type' => 'boolean',
                                        ],
                                        'serverAddr' => [
                                            'type' => 'string',
                                        ],
                                        'mountDir' => [
                                            'type' => 'string',
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
                    'description' => [
                        'type' => 'string',
                    ],
                    'concurrencyConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'reservedConcurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'originalName' => [
                        'type' => 'string',
                    ],
                    'accountID' => [
                        'type' => 'string',
                    ],
                    'httpTrigger' => [
                        'type' => 'object',
                        'properties' => [
                            'triggerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'authConfig' => [
                                        'type' => 'string',
                                    ],
                                    'methods' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'authType' => [
                                        'type' => 'string',
                                    ],
                                    'dsableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                    'disableURLInternet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'qualifier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'traceId' => [
                        'type' => 'string',
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'enableRequestMetrics' => [
                                'type' => 'boolean',
                            ],
                            'enableInstanceMetrics' => [
                                'type' => 'boolean',
                            ],
                            'logBeginRule' => [
                                'type' => 'string',
                            ],
                            'project' => [
                                'type' => 'string',
                            ],
                            'logstore' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'imageName' => [
                        'type' => 'string',
                    ],
                    'gpuConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'gpuMemorySize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'gpuType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'reportStatusURL' => [
                        'type' => 'string',
                    ],
                    'provisionConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'scheduledActions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'scheduleExpression' => [
                                            'type' => 'string',
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                        ],
                                        'timeZone' => [
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
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'alwaysAllocateGPU' => [
                                'type' => 'boolean',
                            ],
                            'target' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'envName' => [
                        'type' => 'string',
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                    ],
                    'vpcConfig' => [
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
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'customContainerConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'role' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ossMountConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'mountPoints' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'bucketName' => [
                                            'type' => 'string',
                                        ],
                                        'endpoint' => [
                                            'type' => 'string',
                                        ],
                                        'bucketPath' => [
                                            'type' => 'string',
                                        ],
                                        'mountDir' => [
                                            'type' => 'string',
                                        ],
                                        'readOnly' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'featureGates' => [
                        'type' => 'object',
                        'properties' => [
                            'asyncProvisionCheck' => [
                                'type' => 'boolean',
                            ],
                            'disableRollbackOnProvisionFailure' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'DeployVllmModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'traceID' => [
                                'type' => 'string',
                            ],
                            'modelName' => [
                                'type' => 'string',
                            ],
                            'urlInternet' => [
                                'type' => 'string',
                            ],
                            'deploymentTaskID' => [
                                'type' => 'string',
                            ],
                            'errorMessage' => [
                                'type' => 'string',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'serviceName' => [
                                'type' => 'string',
                            ],
                            'urlIntranet' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DescribeRegionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'regions' => [
                        'type' => 'object',
                        'properties' => [
                            'region' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'localName' => [
                                            'type' => 'string',
                                        ],
                                        'regionId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'DownloadModelOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'taskType' => [
                                'type' => 'string',
                            ],
                            'modelPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Environment' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/EnvironmentSpec',
                        'required' => true,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/EnvironmentStatus',
                    ],
                    'projectName' => [
                        'type' => 'string',
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'EnvironmentBaseline' => [
                'type' => 'object',
                'properties' => [
                    'variables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/Variable',
                        ],
                    ],
                    'servicesInstances' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/ServiceInstance',
                        ],
                    ],
                ],
            ],
            'EnvironmentChanges' => [
                'type' => 'object',
                'properties' => [
                    'services' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'EnvironmentDeployment' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 63,
                        'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/EnvironmentDeploymentStatus',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/EnvironmentDeploymentSpec',
                    ],
                ],
            ],
            'EnvironmentDeploymentSpec' => [
                'type' => 'object',
                'properties' => [
                    'changes' => [
                        '$ref' => '#/components/schemas/EnvironmentChanges',
                    ],
                    'baseline' => [
                        '$ref' => '#/components/schemas/EnvironmentSnapshot',
                    ],
                    'target' => [
                        '$ref' => '#/components/schemas/EnvironmentStagedConfigs',
                    ],
                    'skipRemoveResources' => [
                        'type' => 'boolean',
                    ],
                    'webhookCodeContext' => [
                        '$ref' => '#/components/schemas/WebhookCodeContext',
                    ],
                ],
            ],
            'EnvironmentDeploymentStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'pipelineName' => [
                        'type' => 'string',
                    ],
                    'finishedTime' => [
                        'type' => 'string',
                    ],
                    'serviceDeployments' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'EnvironmentSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'services' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/ServiceInstance',
                        ],
                    ],
                ],
            ],
            'EnvironmentSpec' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'Testing',
                            'Staging',
                            'Production',
                        ],
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                    'stagedConfigs' => [
                        '$ref' => '#/components/schemas/EnvironmentStagedConfigs',
                    ],
                ],
            ],
            'EnvironmentStagedConfigs' => [
                'type' => 'object',
                'properties' => [
                    'services' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/ServiceConfig',
                        ],
                    ],
                    'variables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/Variable',
                        ],
                    ],
                ],
            ],
            'EnvironmentStatus' => [
                'type' => 'object',
                'properties' => [
                    'servicesInstances' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/ServiceInstance',
                        ],
                    ],
                    'latestEnvironmentDeploymentName' => [
                        'type' => 'string',
                    ],
                    'servicesWithPendingChanges' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'observedGeneration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'observedTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EventFilterConfig' => [
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        '$ref' => '#/components/schemas/BranchFilter',
                    ],
                ],
            ],
            'FileManagerMountConfig' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                    'region' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'vpcConfig' => [
                        '$ref' => '#/components/schemas/VpcConfig',
                    ],
                    'ossMountPoints' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/OSSMountPoint',
                        ],
                    ],
                    'nasMountPoints' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/NasMountConfig',
                        ],
                    ],
                    'timeoutInSecond' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'mutex' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'FileManagerTask' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'finishedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'finished' => [
                        'type' => 'boolean',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                    'parameters' => [
                        'type' => 'any',
                    ],
                    'progress' => [
                        'type' => 'object',
                        'properties' => [
                            'currentBytes' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'totalBytes' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'result' => [
                        'type' => 'any',
                    ],
                ],
            ],
            'FinalizeConfig' => [
                'type' => 'object',
                'properties' => [
                    'steps' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
            'GetModelStatusOutput' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'fileSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'finished' => [
                                'type' => 'boolean',
                            ],
                            'finishedTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'startTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'total' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'errMessage' => [
                                'type' => 'string',
                            ],
                            'speed' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'currentBytes' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GitAccount' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'avatar' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'uri' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'GitEventSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        'type' => 'string',
                    ],
                    'commitID' => [
                        'type' => 'string',
                    ],
                    'tag' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GitLabConfig' => [
                'type' => 'object',
                'properties' => [
                    'isFixedIP' => [
                        'type' => 'boolean',
                    ],
                    'uri' => [
                        'type' => 'string',
                    ],
                    'token' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ImageEvent' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'time' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'details' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'InitializeConfig' => [
                'type' => 'object',
                'properties' => [
                    'steps' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
            'Installation' => [
                'type' => 'object',
                'properties' => [
                    'stage' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'actionUri' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPGatewayConfig' => [
                'type' => 'object',
                'properties' => [
                    'routes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'backends' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'name' => [
                                                'type' => 'string',
                                                'enum' => [
                                                    'MCP',
                                                    'OpenAPI',
                                                    'Toolset',
                                                ],
                                            ],
                                            'type' => [
                                                'type' => 'string',
                                                'enum' => [
                                                    'OpenAPI',
                                                    'MCP',
                                                    'Toolset',
                                                ],
                                            ],
                                            'details' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'mcpInstallation' => [
                                                        '$ref' => '#/components/schemas/MCPServerInstallationConfig',
                                                    ],
                                                    'toolsetSelector' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'toolsetName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'toolName' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                    'openAPISchema' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'policies' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'authorization' => [
                                            '$ref' => '#/components/schemas/Authorization',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'MCPInstallationConfig' => [
                'type' => 'object',
                'properties' => [
                    'mcpServers' => [
                        '$ref' => '#/components/schemas/MCPServerInstallationConfig',
                    ],
                ],
            ],
            'MCPServerInstallationConfig' => [
                'type' => 'object',
                'properties' => [
                    'args' => [
                        'type' => 'string',
                    ],
                    'transportType' => [
                        'type' => 'string',
                        'enum' => [
                            'stdio',
                            'sse',
                            'streamableHttp',
                        ],
                    ],
                    'env' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'url' => [
                        'type' => 'string',
                    ],
                    'command' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MCPToolMeta' => [
                'type' => 'object',
                'properties' => [
                    'inputSchema' => [
                        'type' => 'object',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelAsyncTask' => [
                'type' => 'object',
                'properties' => [
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'taskType' => [
                        'type' => 'string',
                    ],
                    'finished' => [
                        'type' => 'boolean',
                    ],
                    'finishedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'result' => [
                        'type' => 'any',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelConfig' => [
                'type' => 'object',
                'properties' => [
                    'reversion' => [
                        'type' => 'string',
                    ],
                    'bucket' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'framework' => [
                        'type' => 'string',
                    ],
                    'prefix' => [
                        'type' => 'string',
                    ],
                    'model' => [
                        'type' => 'string',
                    ],
                    'multiModelConfig' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ModelConfig',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'token' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelFile' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'isDir' => [
                        'type' => 'boolean',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modeTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ModelFilePreview' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'isDir' => [
                        'type' => 'boolean',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'hash' => [
                        'type' => 'string',
                    ],
                    'content' => [
                        'type' => 'string',
                    ],
                    'isCompressedImage' => [
                        'type' => 'boolean',
                    ],
                    'unpreviewable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ModelProvider' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ModelProviderAuthorization' => [
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelProviderSchema' => [
                'type' => 'object',
                'properties' => [
                    'detail' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelProviderSpec' => [
                'type' => 'object',
                'properties' => [
                    'authorization' => [
                        '$ref' => '#/components/schemas/ModelProviderAuthorization',
                    ],
                    'schema' => [
                        '$ref' => '#/components/schemas/ModelProviderSchema',
                    ],
                ],
            ],
            'ModelSet' => [
                'type' => 'object',
                'properties' => [
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ModelSetStatus',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ModelSetModelProfile' => [
                'type' => 'object',
                'properties' => [
                    'sourceType' => [
                        'type' => 'string',
                        'enum' => [
                            'customized',
                            'predefined',
                        ],
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'props' => [
                        'type' => 'object',
                        'properties' => [
                            'llmMode' => [
                                'type' => 'string',
                            ],
                            'contextSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'ModelSetSpec' => [
                'type' => 'object',
                'properties' => [
                    'features' => [
                        'type' => 'object',
                        'properties' => [
                            'toolCall' => [
                                'type' => 'boolean',
                            ],
                            'vision' => [
                                'type' => 'boolean',
                            ],
                            'agentThought' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'models' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/ModelSetModelProfile',
                        ],
                    ],
                    'baseUrl' => [
                        'type' => 'string',
                    ],
                    'authConfig' => [
                        '$ref' => '#/components/schemas/Authorization',
                    ],
                    'provider' => [
                        'type' => 'string',
                        'enum' => [
                            'OpenAI',
                            'FunctionAI',
                            'Tongyi',
                            'Anthropic',
                            'OpenAICompatible',
                        ],
                    ],
                    'modelType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'llm',
                            'text-embedding',
                            'tts',
                            'rerank',
                            'speech2text',
                            'moderation',
                        ],
                    ],
                    'apiInvokeType' => [
                        'type' => 'string',
                        'enum' => [
                            'openai',
                            'ollama',
                            'anthropic',
                            'dashscope',
                        ],
                    ],
                ],
            ],
            'ModelSetStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'observedTime' => [
                        'type' => 'string',
                    ],
                    'observedGeneration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ModelTask' => [
                'type' => 'object',
                'properties' => [
                    'finishTime' => [
                        'type' => 'number',
                        'format' => 'double',
                        'deprecated' => true,
                    ],
                    'currentBytes' => [
                        'type' => 'string',
                    ],
                    'errMsg' => [
                        'type' => 'string',
                    ],
                    'finished' => [
                        'type' => 'boolean',
                    ],
                    'updateTime' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'params' => [
                        'type' => 'string',
                    ],
                    'speed' => [
                        'type' => 'string',
                    ],
                    'result' => [
                        'type' => 'any',
                    ],
                    'taskType' => [
                        'type' => 'string',
                    ],
                    'total' => [
                        'type' => 'number',
                        'format' => 'float',
                        'deprecated' => true,
                    ],
                    'fileSize' => [
                        'type' => 'number',
                        'format' => 'double',
                        'deprecated' => true,
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'extra' => [
                        'type' => 'any',
                    ],
                    'finishedTime' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'totalBytes' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'taskId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NasMountConfig' => [
                'type' => 'object',
                'properties' => [
                    'enableTLS' => [
                        'type' => 'boolean',
                    ],
                    'mountDir' => [
                        'type' => 'string',
                    ],
                    'serverAddr' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OAuthCredential' => [
                'type' => 'object',
                'properties' => [
                    'token' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'scope' => [
                        'type' => 'string',
                    ],
                    'expiration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'createdTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'refreshToken' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OSSMountPoint' => [
                'type' => 'object',
                'properties' => [
                    'bucketName' => [
                        'type' => 'string',
                    ],
                    'bucketPath' => [
                        'type' => 'string',
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'mountDir' => [
                        'type' => 'string',
                    ],
                    'readOnly' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'OpenAPIToolMeta' => [
                'type' => 'object',
                'properties' => [
                    'toolId' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'method' => [
                        'type' => 'string',
                    ],
                    'toolName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OperationModelFileAction' => [
                'type' => 'object',
                'properties' => [
                    'action' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'source' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'destination' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'target' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'OssSourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'bucket' => [
                        'type' => 'string',
                    ],
                    'object' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Pipeline' => [
                'type' => 'object',
                'properties' => [
                    'spec' => [
                        '$ref' => '#/components/schemas/PipelineSpec',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/PipelineStatus',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PipelineSpec' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'templateSpec' => [
                        '$ref' => '#/components/schemas/PipelineTemplateSpec',
                    ],
                ],
            ],
            'PipelineStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'latestExecError' => [
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                ],
            ],
            'PipelineTemplate' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'deletionTime' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/PipelineTemplateSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PipelineTemplateSpec' => [
                'type' => 'object',
                'properties' => [
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'tasks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TaskExec',
                        ],
                    ],
                ],
            ],
            'Project' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ProjectStatus',
                    ],
                ],
            ],
            'ProjectSpec' => [
                'type' => 'object',
                'properties' => [],
            ],
            'ProjectStatus' => [
                'type' => 'object',
                'properties' => [
                    'services' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ServiceMeta',
                        ],
                    ],
                ],
            ],
            'PublishTask' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'uid' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/PublishTaskSpec',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/PublishTaskStatus',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'PublishTaskSpec' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'productType' => [
                        'type' => 'string',
                    ],
                    'rawResourceConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'PublishTaskStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'events' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ImageEvent',
                        ],
                    ],
                ],
            ],
            'PullRequestFilter' => [
                'type' => 'object',
                'properties' => [
                    'sourceBranch' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'targetBranch' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'types' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'PushFilter' => [
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'tag' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'Repository' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/RepositorySpec',
                        'required' => true,
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RepositorySourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'repositoryName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'codeVersion' => [
                        '$ref' => '#/components/schemas/CodeVersionReference',
                    ],
                    'filter' => [
                        '$ref' => '#/components/schemas/EventFilterConfig',
                    ],
                ],
            ],
            'RepositorySpec' => [
                'type' => 'object',
                'properties' => [
                    'connectionName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'cloneUrl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'platform' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'webUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RunAfter' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ServiceBaseline' => [
                'type' => 'object',
                'properties' => [
                    'serviceInstance' => [
                        '$ref' => '#/components/schemas/ServiceInstance',
                    ],
                ],
            ],
            'ServiceChanges' => [
                'type' => 'object',
                'properties' => [
                    'merge' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ServiceCommandStep' => [
                'type' => 'object',
                'properties' => [
                    'run' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ServiceComponentStep' => [
                'type' => 'object',
                'properties' => [
                    'component' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'props' => [
                        'type' => 'object',
                    ],
                    'source' => [
                        '$ref' => '#/components/schemas/SourceConfig',
                    ],
                    'build' => [
                        '$ref' => '#/components/schemas/BuildConfig',
                    ],
                    'variables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/Variable',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'component' => [
                        'type' => 'string',
                    ],
                    'artifact' => [
                        '$ref' => '#/components/schemas/ArtifactMeta',
                    ],
                ],
            ],
            'ServiceDeployment' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'environmentDeploymentName' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 63,
                        'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ServiceDeploymentStatus',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ServiceDeploymentSpec' => [
                'type' => 'object',
                'properties' => [
                    'changes' => [
                        '$ref' => '#/components/schemas/ServiceChanges',
                    ],
                    'baseline' => [
                        '$ref' => '#/components/schemas/ServiceBaseline',
                    ],
                    'target' => [
                        '$ref' => '#/components/schemas/ServiceBaseline',
                    ],
                    'skipRemoveResources' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ServiceDeploymentStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'pipelineName' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'string',
                    ],
                    'finishedTime' => [
                        'type' => 'string',
                    ],
                    'taskName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ServiceInstance' => [
                'type' => 'object',
                'properties' => [
                    'config' => [
                        '$ref' => '#/components/schemas/ServiceConfig',
                    ],
                    'variables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/Variable',
                        ],
                    ],
                    'outputs' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'latestDeployment' => [
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'startTime' => [
                                'type' => 'string',
                            ],
                            'finishedTime' => [
                                'type' => 'string',
                            ],
                            'phase' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'ServiceMeta' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ServicePluginStep' => [
                'type' => 'object',
                'properties' => [
                    'plugin' => [
                        'type' => 'string',
                    ],
                    'args' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'SourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'template' => [
                        '$ref' => '#/components/schemas/TemplateSourceConfig',
                    ],
                    'repository' => [
                        '$ref' => '#/components/schemas/RepositorySourceConfig',
                    ],
                    'oss' => [
                        '$ref' => '#/components/schemas/OssSourceConfig',
                    ],
                ],
            ],
            'Task' => [
                'type' => 'object',
                'properties' => [
                    'spec' => [
                        '$ref' => '#/components/schemas/TaskSpec',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/TaskStatus',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'TaskExec' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'taskTemplate' => [
                        'type' => 'string',
                    ],
                    'runAfters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RunAfter',
                        ],
                    ],
                ],
            ],
            'TaskExecError' => [
                'type' => 'object',
                'properties' => [
                    'title' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'extraInfo' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskInvocation' => [
                'type' => 'object',
                'properties' => [
                    'invocationID' => [
                        'type' => 'string',
                    ],
                    'requestID' => [
                        'type' => 'string',
                    ],
                    'invocationTarget' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'output' => [
                        'type' => 'string',
                    ],
                    'instanceID' => [
                        'type' => 'string',
                    ],
                    'slsProject' => [
                        'type' => 'string',
                    ],
                    'slsLogStore' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskSpec' => [
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'type' => 'string',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                ],
            ],
            'TaskStatus' => [
                'type' => 'object',
                'properties' => [
                    'statusGeneration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'phase' => [
                        'type' => 'string',
                    ],
                    'executionDetails' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'invocations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TaskInvocation',
                        ],
                    ],
                    'latestExecError' => [
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                ],
            ],
            'TaskTemplate' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 40,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'deletionTime' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/TaskTemplateSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'resourceVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'TaskTemplateSpec' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'worker' => [
                        '$ref' => '#/components/schemas/TaskWorker',
                    ],
                    'context' => [
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'executeCondition' => [
                        '$ref' => '#/components/schemas/Condition',
                    ],
                ],
            ],
            'TaskWorker' => [
                'type' => 'object',
                'properties' => [
                    'presetWorker' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Template' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/TemplateSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/TemplateStatus',
                    ],
                ],
            ],
            'TemplateConfig' => [
                'type' => 'object',
                'properties' => [
                    'variableValues' => [
                        '$ref' => '#/components/schemas/TemplateVariableValueMap',
                    ],
                    'templateName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parameters' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'serviceNameChanges' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'TemplateParameterSchema' => [
                'type' => 'object',
                'properties' => [
                    'default' => [
                        'type' => 'any',
                    ],
                    'pattern' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'roleExtension' => [
                        'type' => 'object',
                        'properties' => [
                            'service' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'authorities' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'sensitive' => [
                        'type' => 'boolean',
                    ],
                    'title' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'string',
                            'number',
                            'integer',
                            'boolean',
                        ],
                    ],
                    'required' => [
                        'type' => 'boolean',
                    ],
                    'enum' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'TemplateRevision' => [
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'templateName' => [
                        'type' => 'string',
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/TemplateSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'status' => [
                        'type' => 'object',
                        'properties' => [
                            'phase' => [
                                'type' => 'string',
                            ],
                            'pipelineName' => [
                                'type' => 'string',
                            ],
                            'packageUrl' => [
                                'type' => 'string',
                            ],
                            'templateUrl' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'TemplateServiceConfig' => [
                'type' => 'object',
                'properties' => [
                    'artifact' => [
                        '$ref' => '#/components/schemas/ArtifactMeta',
                    ],
                    'variables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/TemplateParameterSchema',
                        ],
                    ],
                    'component' => [
                        'type' => 'string',
                    ],
                    'build' => [
                        '$ref' => '#/components/schemas/BuildConfig',
                    ],
                    'source' => [
                        '$ref' => '#/components/schemas/SourceConfig',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'props' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'TemplateSourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'downloadUrl' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TemplateSpec' => [
                'type' => 'object',
                'properties' => [
                    'license' => [
                        'type' => 'string',
                    ],
                    'registryToken' => [
                        'type' => 'string',
                    ],
                    'variables' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/TemplateParameterSchema',
                        ],
                    ],
                    'author' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'readme' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'source' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'repository' => [
                                '$ref' => '#/components/schemas/RepositorySourceConfig',
                            ],
                        ],
                    ],
                    'services' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/TemplateServiceConfig',
                        ],
                    ],
                    'packageName' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TemplateStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'latestDeployment' => [
                        'type' => 'object',
                        'properties' => [
                            'phase' => [
                                'type' => 'string',
                            ],
                            'pipelineName' => [
                                'type' => 'string',
                            ],
                            'finishedTime' => [
                                'type' => 'string',
                            ],
                            'startTime' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'latestVersion' => [
                        'type' => 'string',
                    ],
                    'packageUrl' => [
                        'type' => 'string',
                    ],
                    'templateUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TemplateVariableValueMap' => [
                'type' => 'object',
                'properties' => [
                    'shared' => [
                        'type' => 'object',
                    ],
                    'services' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'Tool' => [
                'type' => 'object',
                'properties' => [
                    'toolId' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'method' => [
                        'type' => 'string',
                    ],
                    'toolName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Toolset' => [
                'type' => 'object',
                'properties' => [
                    'generation' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'uid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'kind' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'spec' => [
                        '$ref' => '#/components/schemas/ToolsetSpec',
                    ],
                    'labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ToolsetStatus',
                    ],
                ],
            ],
            'ToolsetAuthorization' => [
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ToolsetSchema' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'detail' => [
                        'type' => 'string',
                        'deprecated' => false,
                    ],
                    'config' => [
                        'type' => 'object',
                        'properties' => [
                            'mcpInstallation' => [
                                '$ref' => '#/components/schemas/MCPInstallationConfig',
                            ],
                            'openAPISchema' => [
                                'type' => 'string',
                            ],
                            'mcpGateway' => [
                                '$ref' => '#/components/schemas/MCPGatewayConfig',
                            ],
                        ],
                    ],
                ],
            ],
            'ToolsetSpec' => [
                'type' => 'object',
                'properties' => [
                    'schema' => [
                        '$ref' => '#/components/schemas/ToolsetSchema',
                    ],
                    'authConfig' => [
                        '$ref' => '#/components/schemas/Authorization',
                    ],
                ],
            ],
            'ToolsetStatus' => [
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'type' => 'string',
                    ],
                    'outputs' => [
                        'type' => 'object',
                        'properties' => [
                            'urls' => [
                                'type' => 'object',
                                'properties' => [
                                    'internetUrl' => [
                                        'type' => 'string',
                                    ],
                                    'intranetUrl' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'openApiTools' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/OpenAPIToolMeta',
                                ],
                            ],
                            'mcpServerConfig' => [
                                'type' => 'object',
                                'properties' => [
                                    'headers' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'transportType' => [
                                        'type' => 'string',
                                    ],
                                    'url' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'tools' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/MCPToolMeta',
                                ],
                            ],
                            'functionArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'observedTime' => [
                        'type' => 'string',
                    ],
                    'observedGeneration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Variable' => [
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'type' => 'any',
                    ],
                    'sensitive' => [
                        'type' => 'boolean',
                    ],
                    'encrypted' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'WebhookCodeContext' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'eventType' => [
                        'type' => 'string',
                    ],
                    'commitID' => [
                        'type' => 'string',
                    ],
                    'branch' => [
                        'type' => 'string',
                    ],
                    'sourceBranch' => [
                        'type' => 'string',
                    ],
                    'title' => [
                        'type' => 'string',
                    ],
                    'tag' => [
                        'type' => 'string',
                    ],
                    'prType' => [
                        'type' => 'string',
                    ],
                    'targetBranch' => [
                        'type' => 'string',
                    ],
                    'repoUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'open_struct_OssSourceConfig' => [
                'type' => 'object',
                'deprecated' => true,
                'properties' => [
                    'bucket' => [
                        'type' => 'string',
                    ],
                    'object' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'UpdateToolset' => [
            'path' => '/2023-07-14/toolsets/{name}',
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
                        '$ref' => '#/components/schemas/Toolset',
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
            ],
        ],
        'ListToolsets' => [
            'path' => '/2023-07-14/toolsets',
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
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
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
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
            ],
        ],
        'GetToolset' => [
            'path' => '/2023-07-14/toolsets/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteToolset' => [
            'path' => '/2023-07-14/toolsets/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateToolset' => [
            'path' => '/2023-07-14/toolsets',
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
                        '$ref' => '#/components/schemas/Toolset',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RenderServicesByTemplate' => [
            'path' => '/2023-07-14/templates/action/renderServices',
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
                            'templateName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'variableValues' => [
                                '$ref' => '#/components/schemas/TemplateVariableValueMap',
                                'required' => false,
                            ],
                            'serviceNameChanges' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'projectName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FetchArtifactDownloadUrl' => [
            'path' => '/2023-07-14/artifacts/{name}/fetchCode',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'FetchArtifactTempBucketToken' => [
            'path' => '/2023-07-14/artifacts/action/fetchTempBucketToken',
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
            'parameters' => [],
        ],
        'GetArtifact' => [
            'path' => '/2023-07-14/artifacts/{name}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutArtifact' => [
            'path' => '/2023-07-14/artifacts/{name}',
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
                        '$ref' => '#/components/schemas/Artifact',
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
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteArtifact' => [
            'path' => '/2023-07-14/artifacts/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateArtifact' => [
            'path' => '/2023-07-14/artifacts',
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
                        '$ref' => '#/components/schemas/Artifact',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateProject' => [
            'path' => '/2023-07-14/projects',
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
                        '$ref' => '#/components/schemas/Project',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteProject' => [
            'path' => '/2023-07-14/projects/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateProject' => [
            'path' => '/2023-07-14/projects/{name}',
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
                        '$ref' => '#/components/schemas/Project',
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
            ],
        ],
        'ListProjects' => [
            'path' => '/2023-07-14/projects',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
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
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
            ],
        ],
        'GetProject' => [
            'path' => '/2023-07-14/projects/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeployEnvironment' => [
            'path' => '/2023-07-14/projects/{projectName}/environments/{name}/deploy',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'projectName',
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
                        '$ref' => '#/components/schemas/DeployEnvironmentOptions',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetEnvironmentDeployment' => [
            'path' => '/2023-07-14/environmentdeployments/{name}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetServiceDeployment' => [
            'path' => '/2023-07-14/servicedeployments/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListServiceDeployments' => [
            'path' => '/2023-07-14/servicedeployments',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
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
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
            ],
        ],
        'PreviewEnvironment' => [
            'path' => '/2023-07-14/projects/{projectName}/environments/{name}/preview',
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
                    'name' => 'projectName',
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
        'CreateEnvironment' => [
            'path' => '/2023-07-14/projects/{projectName}/environments',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/Environment',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteEnvironment' => [
            'path' => '/2023-07-14/projects/{projectName}/environments/{name}',
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
                    'name' => 'projectName',
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
        'UpdateEnvironment' => [
            'path' => '/2023-07-14/projects/{projectName}/environments/{name}',
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
                        '$ref' => '#/components/schemas/Environment',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'projectName',
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
        'ListEnvironments' => [
            'path' => '/2023-07-14/projects/{projectName}/environments/',
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
                    'name' => 'projectName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
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
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
            ],
        ],
        'GetEnvironment' => [
            'path' => '/2023-07-14/projects/{projectName}/environments/{name}',
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
                    'name' => 'projectName',
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
        'DeleteConnection' => [
            'path' => '/2023-07-14/connections/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConnections' => [
            'path' => '/2023-07-14/connections',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
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
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
            ],
        ],
        'GetRepository' => [
            'path' => '/2023-07-14/repositories/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreatePipeline' => [
            'path' => '/2023-07-14/pipelines',
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
                        '$ref' => '#/components/schemas/Pipeline',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelines' => [
            'path' => '/2023-07-14/pipelines',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
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
        'GetPipeline' => [
            'path' => '/2023-07-14/pipelines/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartPipeline' => [
            'path' => '/2023-07-14/pipelines/{name}/start',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelPipeline' => [
            'path' => '/2023-07-14/pipelines/{name}/cancel',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutPipelineStatus' => [
            'path' => '/2023-07-14/pipelines/{name}/status',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/Pipeline',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTask' => [
            'path' => '/2023-07-14/tasks',
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
                        '$ref' => '#/components/schemas/Task',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTasks' => [
            'path' => '/2023-07-14/tasks',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
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
        'GetTask' => [
            'path' => '/2023-07-14/tasks/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartTask' => [
            'path' => '/2023-07-14/tasks/{name}/start',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RetryTask' => [
            'path' => '/2023-07-14/tasks/{name}/retry',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ResumeTask' => [
            'path' => '/2023-07-14/tasks/{name}/resume',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelTask' => [
            'path' => '/2023-07-14/tasks/{name}/cancel',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutTaskStatus' => [
            'path' => '/2023-07-14/tasks/{name}/status',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/Task',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ActivateConnection' => [
            'path' => '/2023-07-14/connections/{name}/activate',
            'methods' => [
                'patch',
            ],
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
                            'account' => [
                                '$ref' => '#/components/schemas/GitAccount',
                                'required' => false,
                            ],
                            'credential' => [
                                '$ref' => '#/components/schemas/OAuthCredential',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FetchConnectionCredential' => [
            'path' => '/2023-07-14/connections/{name}/fetchCredential',
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
                    'name' => 'name',
                    'in' => 'path',
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
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'devs.cn-hangzhou.aliyuncs.com',
        ],
    ],
];