<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'pai-dlc',
        'version' => '2020-12-03',
    ],
    'components' => [
        'schemas' => [
            'AIMasterMessage' => [
                'type' => 'object',
                'properties' => [
                    'MessageEvent' => [
                        'type' => 'string',
                    ],
                    'MessageContent' => [
                        'type' => 'string',
                    ],
                    'Extended' => [
                        'type' => 'string',
                    ],
                    'JobRestartCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'RestartType' => [
                        'type' => 'string',
                    ],
                    'MessageVersion' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'AliyunAccounts' => [
                'type' => 'object',
                'properties' => [
                    'AliyunUid' => [
                        'type' => 'string',
                    ],
                    'EmployeeId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AssignNodeSpec' => [
                'type' => 'object',
                'properties' => [
                    'EnableAssignNode' => [
                        'type' => 'boolean',
                    ],
                    'NodeNames' => [
                        'type' => 'string',
                    ],
                    'AntiAffinityNodeNames' => [
                        'type' => 'string',
                    ],
                    'HyperNodes' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HyperNodeSpec',
                        ],
                    ],
                    'AntiAffinityHyperNodes' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HyperNodeSpec',
                        ],
                    ],
                ],
            ],
            'AssumeUserInfo' => [
                'type' => 'object',
                'properties' => [
                    'SecurityToken' => [
                        'type' => 'string',
                    ],
                    'AccessKeyId' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AutoScalingSpec' => [
                'type' => 'object',
                'properties' => [
                    'ScalingStrategy' => [
                        'type' => 'string',
                    ],
                    'MinReplicas' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MaxReplicas' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PodsToDelete' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'AutoscalingMetricSpec' => [
                        '$ref' => '#/components/schemas/AutoscalingMetricSpec',
                    ],
                ],
            ],
            'AutoscalingMetricSpec' => [
                'type' => 'object',
                'properties' => [
                    'MetricName' => [
                        'type' => 'string',
                    ],
                    'TargetValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'CodeSourceItem' => [
                'type' => 'object',
                'properties' => [
                    'CodeSourceId' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'CodeRepo' => [
                        'type' => 'string',
                    ],
                    'CodeBranch' => [
                        'type' => 'string',
                    ],
                    'CodeCommit' => [
                        'type' => 'string',
                    ],
                    'CodeRepoUserName' => [
                        'type' => 'string',
                    ],
                    'CodeRepoAccessToken' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ContainerSpec' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Image' => [
                        'type' => 'string',
                    ],
                    'Command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Args' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'WorkingDir' => [
                        'type' => 'string',
                    ],
                    'Env' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/EnvVar',
                        ],
                    ],
                    'Resources' => [
                        '$ref' => '#/components/schemas/ResourceRequirements',
                    ],
                ],
            ],
            'CredentialConfig' => [
                'type' => 'object',
                'properties' => [
                    'EnableCredentialInject' => [
                        'type' => 'boolean',
                    ],
                    'AliyunEnvRoleKey' => [
                        'type' => 'string',
                    ],
                    'CredentialConfigItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CredentialConfigItem',
                        ],
                    ],
                ],
            ],
            'CredentialConfigItem' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Roles' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CredentialRole',
                        ],
                    ],
                ],
            ],
            'CredentialRole' => [
                'type' => 'object',
                'properties' => [
                    'RoleArn' => [
                        'type' => 'string',
                    ],
                    'RoleType' => [
                        'type' => 'string',
                    ],
                    'AssumeRoleFor' => [
                        'type' => 'string',
                    ],
                    'Policy' => [
                        'type' => 'string',
                    ],
                    'AssumeUserInfo' => [
                        '$ref' => '#/components/schemas/AssumeUserInfo',
                    ],
                ],
            ],
            'DataJuicerConfig' => [
                'type' => 'object',
                'properties' => [
                    'ExecutionMode' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'standalone',
                            'distributed',
                        ],
                    ],
                    'CommandType' => [
                        'type' => 'string',
                        'enum' => [
                            'shell',
                            'config',
                        ],
                    ],
                ],
            ],
            'DataSourceItem' => [
                'type' => 'object',
                'properties' => [
                    'DataSourceType' => [
                        'type' => 'string',
                    ],
                    'DataSourceId' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'FileSystemId' => [
                        'type' => 'string',
                    ],
                    'Path' => [
                        'type' => 'string',
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                    ],
                    'Options' => [
                        'type' => 'string',
                    ],
                    'MountPath' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DebuggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'DebuggerConfigId' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DebuggerJob' => [
                'type' => 'object',
                'properties' => [
                    'DebuggerJobId' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtSubmittedTime' => [
                        'type' => 'string',
                    ],
                    'GmtRunningTime' => [
                        'type' => 'string',
                    ],
                    'GmtSucceedTime' => [
                        'type' => 'string',
                    ],
                    'GmtStoppedTime' => [
                        'type' => 'string',
                    ],
                    'GmtFailedTime' => [
                        'type' => 'string',
                    ],
                    'GmtFinishTime' => [
                        'type' => 'string',
                    ],
                    'WorkspaceName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DebuggerJobIssue' => [
                'type' => 'object',
                'properties' => [
                    'JobDebuggerIssueId' => [
                        'type' => 'string',
                    ],
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'RuleName' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                    'DebuggerJobIssue' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DebuggerResult' => [
                'type' => 'object',
                'properties' => [
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'JobDisplayName' => [
                        'type' => 'string',
                    ],
                    'JobUserId' => [
                        'type' => 'string',
                    ],
                    'DebuggerJobStatus' => [
                        'type' => 'string',
                    ],
                    'DebuggerReportURL' => [
                        'type' => 'string',
                    ],
                    'DebuggerJobIssues' => [
                        'type' => 'string',
                    ],
                    'DebuggerConfigContent' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EcsSpec' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'AcceleratorType' => [
                        'type' => 'string',
                    ],
                    'Cpu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Gpu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'GpuType' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'GpuMemory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'IsAvailable' => [
                        'type' => 'boolean',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'DefaultGPUDriver' => [
                        'type' => 'string',
                    ],
                    'SupportedGPUDrivers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'SpotStockStatus' => [
                        'type' => 'string',
                    ],
                    'NonProtectSpotDiscount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'PaymentTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'EnvVar' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EventInfo' => [
                'type' => 'object',
                'properties' => [
                    'PodId' => [
                        'type' => 'string',
                    ],
                    'PodUid' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Time' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ExtraPodSpec' => [
                'type' => 'object',
                'properties' => [
                    'SideCarContainers' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ContainerSpec',
                        ],
                    ],
                    'InitContainers' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ContainerSpec',
                        ],
                    ],
                    'PodLabels' => [
                        'type' => 'object',
                        'deprecated' => true,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'PodAnnotations' => [
                        'type' => 'object',
                        'deprecated' => true,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'SharedVolumeMountPaths' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Lifecycle' => [
                        '$ref' => '#/components/schemas/Lifecycle',
                    ],
                ],
            ],
            'FreeResourceClusterControlItem' => [
                'type' => 'object',
                'properties' => [
                    'FreeResourceClusterControlId' => [
                        'type' => 'string',
                    ],
                    'RegionID' => [
                        'type' => 'string',
                    ],
                    'ClusterID' => [
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'type' => 'string',
                    ],
                    'EnableFreeResource' => [
                        'type' => 'boolean',
                    ],
                    'CrossClusters' => [
                        'type' => 'boolean',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FreeResourceDetail' => [
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'Amount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'FreeResourceItem' => [
                'type' => 'object',
                'properties' => [
                    'FreeResourceId' => [
                        'type' => 'string',
                    ],
                    'RegionID' => [
                        'type' => 'string',
                    ],
                    'ClusterID' => [
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'AvailableNumber' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GPUDetail' => [
                'type' => 'object',
                'properties' => [
                    'GPU' => [
                        'type' => 'string',
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                    'GPUTypeFullName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HyperNodeSpec' => [
                'type' => 'object',
                'properties' => [
                    'HyperNodeName' => [
                        'type' => 'string',
                    ],
                    'NodeNames' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ImageConfig' => [
                'type' => 'object',
                'properties' => [
                    'DockerRegistry' => [
                        'type' => 'string',
                    ],
                    'Username' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                    'Auth' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ImageItem' => [
                'type' => 'object',
                'properties' => [
                    'ImageTag' => [
                        'type' => 'string',
                    ],
                    'ImageUrl' => [
                        'type' => 'string',
                    ],
                    'ImageUrlVpc' => [
                        'type' => 'string',
                    ],
                    'ImageProviderType' => [
                        'type' => 'string',
                    ],
                    'AcceleratorType' => [
                        'type' => 'string',
                    ],
                    'Framework' => [
                        'type' => 'string',
                    ],
                    'AuthorId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JobDebuggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'DebuggerConfigId' => [
                        'type' => 'string',
                    ],
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'DebuggerConfigContent' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JobElasticSpec' => [
                'type' => 'object',
                'properties' => [
                    'EnableElasticTraining' => [
                        'type' => 'boolean',
                    ],
                    'MinParallelism' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MaxParallelism' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AIMasterType' => [
                        'type' => 'string',
                    ],
                    'AIMasterDockerImage' => [
                        'type' => 'string',
                    ],
                    'EnablePsJobElasticWorker' => [
                        'type' => 'boolean',
                    ],
                    'EnableAIMaster' => [
                        'type' => 'boolean',
                    ],
                    'EnablePsResourceEstimate' => [
                        'type' => 'boolean',
                    ],
                    'EnablePsJobElasticPS' => [
                        'type' => 'boolean',
                    ],
                    'PSMinParallelism' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PSMaxParallelism' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ElasticStrategy' => [
                        'type' => 'string',
                    ],
                    'EnableEDP' => [
                        'type' => 'boolean',
                    ],
                    'EDPMaxParallelism' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'EDPMinParallelism' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'JobItem' => [
                'type' => 'object',
                'properties' => [
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'CredentialConfig' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                    ],
                    'JobType' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'UserVpc' => [
                        'type' => 'object',
                        'properties' => [
                            'VpcId' => [
                                'type' => 'string',
                            ],
                            'SwitchId' => [
                                'type' => 'string',
                            ],
                            'SecurityGroupId' => [
                                'type' => 'string',
                            ],
                            'ExtendedCidrs' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'DefaultRoute' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'Username' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'WorkspaceName' => [
                        'type' => 'string',
                    ],
                    'ResourceId' => [
                        'type' => 'string',
                    ],
                    'ResourceLevel' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                    'JobSpecs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobSpec',
                        ],
                    ],
                    'UserCommand' => [
                        'type' => 'string',
                    ],
                    'DataSources' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'DataSourceId' => [
                                    'type' => 'string',
                                ],
                                'MountPath' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'CodeSource' => [
                        'type' => 'object',
                        'properties' => [
                            'CodeSourceId' => [
                                'type' => 'string',
                            ],
                            'Branch' => [
                                'type' => 'string',
                            ],
                            'Commit' => [
                                'type' => 'string',
                            ],
                            'MountPath' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ThirdpartyLibs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'NodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ThirdpartyLibDir' => [
                        'type' => 'string',
                    ],
                    'Envs' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'SystemEnvs' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtSubmittedTime' => [
                        'type' => 'string',
                    ],
                    'GmtRunningTime' => [
                        'type' => 'string',
                    ],
                    'GmtSuccessedTime' => [
                        'type' => 'string',
                    ],
                    'GmtStoppedTime' => [
                        'type' => 'string',
                    ],
                    'GmtFailedTime' => [
                        'type' => 'string',
                    ],
                    'GmtFinishTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'JobMaxRunningTimeMinutes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Settings' => [
                        '$ref' => '#/components/schemas/JobSettings',
                    ],
                    'EnabledDebugger' => [
                        'type' => 'boolean',
                    ],
                    'IsDeleted' => [
                        'type' => 'boolean',
                    ],
                    'EnablePreemptibleJob' => [
                        'type' => 'boolean',
                    ],
                    'ResourceName' => [
                        'type' => 'string',
                    ],
                    'WorkingDir' => [
                        'type' => 'string',
                    ],
                    'UserScript' => [
                        'type' => 'string',
                    ],
                    'RestartTimes' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RequestMemory' => [
                        'type' => 'string',
                    ],
                    'ResourceQuotaName' => [
                        'type' => 'string',
                    ],
                    'RequestGPU' => [
                        'type' => 'string',
                    ],
                    'NodeCount' => [
                        'type' => 'string',
                    ],
                    'Priority' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SubStatus' => [
                        'type' => 'string',
                    ],
                    'UseOversoldResource' => [
                        'type' => 'boolean',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'StatusHistory' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/StatusTransitionItem',
                        ],
                    ],
                    'ElasticSpec' => [
                        '$ref' => '#/components/schemas/JobElasticSpec',
                    ],
                    'Pods' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PodItem',
                        ],
                    ],
                    'JobReplicaStatuses' => [
                        '$ref' => '#/components/schemas/JobReplicaStatus',
                    ],
                ],
            ],
            'JobReplicaStatus' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Active' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'JobSettings' => [
                'type' => 'object',
                'properties' => [
                    'BusinessUserId' => [
                        'type' => 'string',
                    ],
                    'Caller' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'PipelineId' => [
                        'type' => 'string',
                    ],
                    'EnableTideResource' => [
                        'type' => 'boolean',
                    ],
                    'EnableErrorMonitoringInAIMaster' => [
                        'type' => 'boolean',
                    ],
                    'ErrorMonitoringArgs' => [
                        'type' => 'string',
                    ],
                    'EnableRDMA' => [
                        'type' => 'boolean',
                    ],
                    'EnableOssAppend' => [
                        'type' => 'boolean',
                    ],
                    'OversoldType' => [
                        'type' => 'string',
                    ],
                    'AdvancedSettings' => [
                        'type' => 'object',
                    ],
                    'Driver' => [
                        'type' => 'string',
                    ],
                    'EnableSanityCheck' => [
                        'type' => 'boolean',
                    ],
                    'SanityCheckArgs' => [
                        'type' => 'string',
                    ],
                    'JobReservedMinutes' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'JobReservedPolicy' => [
                        'type' => 'string',
                        'enum' => [
                            'Always',
                            'OnFailure',
                            'OnSucceed',
                        ],
                    ],
                    'EnableCPUAffinity' => [
                        'type' => 'boolean',
                    ],
                    'DisableEcsStockCheck' => [
                        'type' => 'boolean',
                    ],
                    'AllocateAllRDMADevices' => [
                        'type' => 'boolean',
                    ],
                    'EnableDSWDev' => [
                        'type' => 'boolean',
                    ],
                    'DataJuicerConfig' => [
                        '$ref' => '#/components/schemas/DataJuicerConfig',
                    ],
                    'ModelConfig' => [
                        '$ref' => '#/components/schemas/ModelConfig',
                    ],
                ],
            ],
            'JobSpec' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Image' => [
                        'type' => 'string',
                    ],
                    'ImageConfig' => [
                        '$ref' => '#/components/schemas/ImageConfig',
                    ],
                    'PodCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EcsSpec' => [
                        'type' => 'string',
                    ],
                    'ExtraPodSpec' => [
                        '$ref' => '#/components/schemas/ExtraPodSpec',
                    ],
                    'ResourceConfig' => [
                        '$ref' => '#/components/schemas/ResourceConfig',
                    ],
                    'UseSpotInstance' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'SpotSpec' => [
                        '$ref' => '#/components/schemas/SpotSpec',
                    ],
                    'AssignNodeSpec' => [
                        '$ref' => '#/components/schemas/AssignNodeSpec',
                    ],
                    'LocalMountSpecs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LocalMountSpec',
                        ],
                    ],
                    'AutoScalingSpec' => [
                        '$ref' => '#/components/schemas/AutoScalingSpec',
                    ],
                    'ServiceSpec' => [
                        '$ref' => '#/components/schemas/ServiceSpec',
                    ],
                    'IsCheif' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                    ],
                    'IsChief' => [
                        'type' => 'boolean',
                    ],
                    'RestartPolicy' => [
                        'type' => 'string',
                    ],
                    'SystemDisk' => [
                        '$ref' => '#/components/schemas/SystemDisk',
                    ],
                ],
            ],
            'Lifecycle' => [
                'type' => 'object',
                'properties' => [
                    'PreStop' => [
                        'type' => 'object',
                        'properties' => [
                            'Exec' => [
                                'type' => 'object',
                                'properties' => [
                                    'Command' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'PostStart' => [
                        'type' => 'object',
                        'properties' => [
                            'Exec' => [
                                'type' => 'object',
                                'properties' => [
                                    'Command' => [
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
            'LocalMountSpec' => [
                'type' => 'object',
                'properties' => [
                    'MountPath' => [
                        'type' => 'string',
                    ],
                    'MountMode' => [
                        'type' => 'string',
                    ],
                    'LocalPath' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LogInfo' => [
                'type' => 'object',
                'properties' => [
                    'PodUid' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                    'Time' => [
                        'type' => 'string',
                    ],
                    'IsTruncated' => [
                        'type' => 'boolean',
                    ],
                    'PodId' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Source' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Member' => [
                'type' => 'object',
                'properties' => [
                    'MemberId' => [
                        'type' => 'string',
                    ],
                    'MemberType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Metric' => [
                'type' => 'object',
                'properties' => [
                    'Time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Value' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'ModelConfig' => [
                'type' => 'object',
                'properties' => [
                    'ModelName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeMetric' => [
                'type' => 'object',
                'properties' => [
                    'NodeName' => [
                        'type' => 'string',
                    ],
                    'Metrics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Metric',
                        ],
                    ],
                ],
            ],
            'PodItem' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'PodId' => [
                        'type' => 'string',
                    ],
                    'PodUid' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Ip' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtStartTime' => [
                        'type' => 'string',
                    ],
                    'GmtFinishTime' => [
                        'type' => 'string',
                    ],
                    'HistoryPods' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PodItem',
                        ],
                    ],
                    'SubStatus' => [
                        'type' => 'string',
                    ],
                    'NodeName' => [
                        'type' => 'string',
                    ],
                    'PodIp' => [
                        'type' => 'string',
                    ],
                    'PodIps' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PodNetworkInterface',
                        ],
                    ],
                ],
            ],
            'PodMetric' => [
                'type' => 'object',
                'properties' => [
                    'PodId' => [
                        'type' => 'string',
                    ],
                    'Metrics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Metric',
                        ],
                    ],
                ],
            ],
            'PodNetworkInterface' => [
                'type' => 'object',
                'properties' => [
                    'InterfaceName' => [
                        'type' => 'string',
                    ],
                    'Ip' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Quota' => [
                'type' => 'object',
                'properties' => [
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'QuotaName' => [
                        'type' => 'string',
                    ],
                    'QuotaType' => [
                        'type' => 'string',
                    ],
                    'UsedQuota' => [
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'TotalQuota' => [
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'type' => 'string',
                    ],
                    'TotalTideQuota' => [
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'UsedTideQuota' => [
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'QuotaConfig' => [
                        '$ref' => '#/components/schemas/QuotaConfig',
                    ],
                ],
            ],
            'QuotaConfig' => [
                'type' => 'object',
                'properties' => [
                    'EnableTideResource' => [
                        'type' => 'boolean',
                    ],
                    'ResourceLevel' => [
                        'type' => 'string',
                    ],
                    'AllowedMaxPriority' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'EnableDLC' => [
                        'type' => 'boolean',
                    ],
                    'EnableDSW' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'QuotaDetail' => [
                'type' => 'object',
                'properties' => [
                    'CPU' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'string',
                    ],
                    'GPU' => [
                        'type' => 'string',
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                    'GPUTypeFullName' => [
                        'type' => 'string',
                    ],
                    'GPUDetails' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GPUDetail',
                        ],
                    ],
                ],
            ],
            'ResourceConfig' => [
                'type' => 'object',
                'properties' => [
                    'CPU' => [
                        'type' => 'string',
                    ],
                    'GPU' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'string',
                    ],
                    'SharedMemory' => [
                        'type' => 'string',
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceRequirements' => [
                'type' => 'object',
                'properties' => [
                    'Limits' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Requests' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Resources' => [
                'type' => 'object',
                'properties' => [
                    'CPU' => [
                        'type' => 'string',
                    ],
                    'GPU' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SanityCheckResultItem' => [
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'StartedAt' => [
                        'type' => 'string',
                    ],
                    'FinishedAt' => [
                        'type' => 'string',
                    ],
                    'CheckNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'SeccompProfile' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'LocalhostProfile' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SecurityContext' => [
                'type' => 'object',
                'properties' => [
                    'RunAsUser' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Privileged' => [
                        'type' => 'boolean',
                    ],
                    'Capabilities' => [
                        '$ref' => '#/components/schemas/SecurityContextCapabilities',
                    ],
                    'RunAsGroup' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SeccompProfile' => [
                        '$ref' => '#/components/schemas/SeccompProfile',
                    ],
                ],
            ],
            'SecurityContextCapabilities' => [
                'type' => 'object',
                'properties' => [
                    'Add' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Drop' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ServiceExposure' => [
                'type' => 'object',
                'properties' => [
                    'ServiceId' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'PodId' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ServiceSpec' => [
                'type' => 'object',
                'properties' => [
                    'ServiceMode' => [
                        'type' => 'string',
                    ],
                    'ExtraPorts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                    'DefaultPort' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'SmartCache' => [
                'type' => 'object',
                'properties' => [
                    'SmartCacheId' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'MountPath' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'FileSystemId' => [
                        'type' => 'string',
                    ],
                    'Path' => [
                        'type' => 'string',
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'string',
                    ],
                    'Options' => [
                        'type' => 'string',
                    ],
                    'CacheWorkerSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CacheWorkerNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'SpotSpec' => [
                'type' => 'object',
                'properties' => [
                    'SpotStrategy' => [
                        'type' => 'string',
                    ],
                    'SpotDiscountLimit' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'SpotPriceLimit' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'StatusTransitionItem' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SystemDisk' => [
                'type' => 'object',
                'properties' => [
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'Category' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'PerformanceLevel' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'Tensorboard' => [
                'type' => 'object',
                'properties' => [
                    'TensorboardId' => [
                        'type' => 'string',
                    ],
                    'TensorboardUrl' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                    'GmtFinishTime' => [
                        'type' => 'string',
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'DataSourceId' => [
                        'type' => 'string',
                    ],
                    'SummaryPath' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'Username' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'TensorboardDataSources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TensorboardDataSourceSpec',
                            'required' => false,
                        ],
                    ],
                    'TensorboardSpec' => [
                        '$ref' => '#/components/schemas/TensorboardSpec',
                    ],
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'Priority' => [
                        'type' => 'string',
                    ],
                    'QuotaName' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'Cpu' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SummaryRelativePath' => [
                        'type' => 'string',
                    ],
                    'MaxRunningTimeMinutes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'DataSourceType' => [
                        'type' => 'string',
                    ],
                    'Options' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Token' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TensorboardDataSourceSpec' => [
                'type' => 'object',
                'properties' => [
                    'DirectoryName' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'DataSourceType' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'SummaryPath' => [
                        'type' => 'string',
                    ],
                    'FullSummaryPath' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TensorboardSpec' => [
                'type' => 'object',
                'properties' => [
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'EcsType' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'SwitchId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Workspace' => [
                'type' => 'object',
                'properties' => [
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'WorkspaceName' => [
                        'type' => 'string',
                    ],
                    'Creator' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                    'Quotas' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Quota',
                        ],
                    ],
                    'TotalResources' => [
                        '$ref' => '#/components/schemas/Resources',
                    ],
                    'Members' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Member',
                        ],
                    ],
                    'WorkspaceAdmins' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Member',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateJob' => [
            'path' => '/api/v1/jobs',
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
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'JobType' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 32,
                            ],
                            'JobSpecs' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/JobSpec',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'UserCommand' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DataSources' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'DataSourceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MountPath' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Uri' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Options' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DataSourceVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MountAccess' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'EnableCache' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'CodeSource' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'CodeSourceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Branch' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Commit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MountPath' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'UserVpc' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'VpcId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SwitchId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SecurityGroupId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExtendedCIDRs' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'DefaultRoute' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'ThirdpartyLibs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'ThirdpartyLibDir' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Envs' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'JobMaxRunningTimeMinutes' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Priority' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Settings' => [
                                '$ref' => '#/components/schemas/JobSettings',
                                'required' => false,
                            ],
                            'ElasticSpec' => [
                                '$ref' => '#/components/schemas/JobElasticSpec',
                                'required' => false,
                            ],
                            'DebuggerConfigContent' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SuccessPolicy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CredentialConfig' => [
                                '$ref' => '#/components/schemas/CredentialConfig',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteJob' => [
            'path' => '/api/v1/jobs/{JobId}',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateJob' => [
            'path' => '/api/v1/jobs/{JobId}',
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
                    'name' => 'JobId',
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
                            'Priority' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'JobSpecs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/JobSpec',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopJob' => [
            'path' => '/api/v1/jobs/{JobId}/stop',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListJobs' => [
            'path' => '/api/v1/jobs',
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
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 1024,
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 200,
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
                    'name' => 'PageNumber',
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
                    'name' => 'PageSize',
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
                    ],
                ],
                [
                    'name' => 'ShowOwn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
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
                    'name' => 'BusinessUserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Caller',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
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
                    'name' => 'PipelineId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FromAllWorkspaces',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserIdForFilter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceQuotaName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accessibility',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OversoldInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DisplayNameSearchMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetJob' => [
            'path' => '/api/v1/jobs/{JobId}',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                ],
                [
                    'name' => 'NeedDetail',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetJobSanityCheckResult' => [
            'path' => '/api/v1/jobs/{JobId}/sanitycheckresult',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SanityCheckNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'SanityCheckPhase',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListJobSanityCheckResults' => [
            'path' => '/api/v1/jobs/{JobId}/sanitycheckresults',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPodLogs' => [
            'path' => '/api/v1/jobs/{JobId}/pods/{PodId}/logs',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PodId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PodUid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxLines',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                [
                    'name' => 'DownloadToFile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPodEvents' => [
            'path' => '/api/v1/jobs/{JobId}/pods/{PodId}/events',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PodId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PodUid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxEventsNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
        'GetJobMetrics' => [
            'path' => '/api/v1/jobs/{JobId}/metrics',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetJobEvents' => [
            'path' => '/api/v1/jobs/{JobId}/events',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MaxEventsNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '10000',
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
        'ListEcsSpecs' => [
            'path' => '/api/v1/ecsspecs',
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
                    'name' => 'AcceleratorType',
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
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceTypes',
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
            ],
        ],
        'GetWebTerminal' => [
            'path' => '/api/v1/jobs/{JobId}/pods/{PodId}/webterminal',
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
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PodId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PodUid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IsShared',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetToken' => [
            'path' => '/api/v1/tokens',
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
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTensorboard' => [
            'path' => '/api/v1/tensorboards',
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
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'JobId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Uri' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SummaryPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SummaryRelativePath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MaxRunningTimeMinutes' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'DataSources' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/DataSourceItem',
                                    'required' => false,
                                ],
                            ],
                            'Cpu' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'Memory' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'TensorboardDataSources' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/TensorboardDataSourceSpec',
                                    'required' => false,
                                ],
                            ],
                            'TensorboardSpec' => [
                                '$ref' => '#/components/schemas/TensorboardSpec',
                                'required' => false,
                            ],
                            'QuotaId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Priority' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTensorboard' => [
            'path' => '/api/v1/tensorboards/{TensorboardId}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                ],
            ],
        ],
        'StartTensorboard' => [
            'path' => '/api/v1/tensorboards/{TensorboardId}/start',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                ],
            ],
        ],
        'UpdateTensorboard' => [
            'path' => '/api/v1/tensorboards/{TensorboardId}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                ],
                [
                    'name' => 'MaxRunningTimeMinutes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accessibility',
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
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopTensorboard' => [
            'path' => '/api/v1/tensorboards/{TensorboardId}/stop',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                ],
            ],
        ],
        'ListTensorboards' => [
            'path' => '/api/v1/tensorboards',
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
                [
                    'APP' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                        'maximum' => '1000',
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
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ShowOwn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QuotaId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accessibility',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTensorboard' => [
            'path' => '/api/v1/tensorboards/{TensorboardId}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                ],
                [
                    'name' => 'JodId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTensorboardSharedUrl' => [
            'path' => '/api/v1/tensorboards/{TensorboardId}/sharedurl',
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
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExpireTimeSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetRayDashboard' => [
            'path' => '/api/v1/jobs/{jobId}/rayDashboard',
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
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'isShared',
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
                    'name' => 'token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDashboard' => [
            'path' => '/api/v1/jobs/{jobId}/dashboard',
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
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'isShared',
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
                    'name' => 'token',
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
            'endpoint' => 'pai-dlc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'pai-dlc.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'pai-dlc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'pai-dlc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'pai-dlc.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'pai-dlc.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'pai-dlc.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'pai-dlc.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'pai-dlc.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'pai-dlc.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'pai-dlc.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'pai-dlc.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'pai-dlc.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'pai-dlc.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'pai-dlc.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];