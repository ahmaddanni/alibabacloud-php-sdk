<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'sae',
        'version' => '2019-05-06',
    ],
    'components' => [
        'schemas' => [
            'AclConfig' => [
                'type' => 'object',
                'properties' => [
                    'aclEntries' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/AclEntryConfig',
                            'required' => true,
                        ],
                    ],
                ],
            ],
            'AclEntryConfig' => [
                'type' => 'object',
                'properties' => [
                    'entry' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'AppStackInstance' => [
                'type' => 'object',
                'properties' => [
                    'StackId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'InstanceName' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        'type' => 'array',
                        'items' => [
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
                    ],
                    'Endpoints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Protocol' => [
                                    'type' => 'string',
                                ],
                                'Address' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'UpdateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'AppStackResource' => [
                'type' => 'object',
                'properties' => [
                    'StackId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'ResourceId' => [
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'ResourceName' => [
                        'type' => 'string',
                    ],
                    'ProductCode' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'AppStackTask' => [
                'type' => 'object',
                'properties' => [
                    'StackId' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StartTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Steps' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'StartTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'EndTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                ],
                                'Duration' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Code' => [
                                    'type' => 'string',
                                ],
                                'Message' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Application' => [
                'type' => 'object',
                'properties' => [
                    'applicationName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'applicationId' => [
                        'type' => 'string',
                    ],
                    'namespaceID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'namespaceName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'handler' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'tracingConfig' => [
                        '$ref' => '#/components/schemas/TracingConfig',
                        'required' => false,
                    ],
                    'instanceSoftConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'codeSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'codeChecksum' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'caPort' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                            'required' => false,
                        ],
                    ],
                    'ossMountConfig' => [
                        '$ref' => '#/components/schemas/OSSMountConfig',
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'layersArnV2' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'customRuntimeConfig' => [
                        '$ref' => '#/components/schemas/CustomRuntimeConfig',
                        'required' => false,
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/LogConfig',
                        'required' => false,
                    ],
                    'instanceLifecycleConfig' => [
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                        'required' => false,
                    ],
                    'scaleConfig' => [
                        '$ref' => '#/components/schemas/ScaleConfig',
                        'required' => false,
                    ],
                    'instanceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'runtime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'command' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'imageConfig' => [
                        '$ref' => '#/components/schemas/ImageConfig',
                        'required' => false,
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'initializer' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'args' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'initializationTimeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'environmentVariables' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'gpuMemorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'vpcConfig' => [
                        '$ref' => '#/components/schemas/VPCConfig',
                        'required' => false,
                    ],
                    'httpTriggerConfig' => [
                        '$ref' => '#/components/schemas/HTTPTriggerConfig',
                        'required' => false,
                    ],
                    'urlInternet' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'urlIntranet' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'customDomainName' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        '$ref' => '#/components/schemas/Version',
                    ],
                    'enableAppMetric' => [
                        'type' => 'boolean',
                    ],
                    'enableArmsAdvanced' => [
                        'type' => 'boolean',
                    ],
                    'slsConfig' => [
                        '$ref' => '#/components/schemas/SLSConfig',
                    ],
                    'startupProbe' => [
                        '$ref' => '#/components/schemas/Probe',
                    ],
                    'livenessProbe' => [
                        '$ref' => '#/components/schemas/Probe',
                    ],
                    'customHostAlias' => [
                        '$ref' => '#/components/schemas/CustomHostAlias',
                    ],
                    'programmingLanguage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ApplicationStatus' => [
                'type' => 'object',
                'properties' => [
                    'scaleConfig' => [
                        '$ref' => '#/components/schemas/ScaleConfig',
                    ],
                    'instanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ApplicationWithStatus' => [
                'type' => 'object',
                'properties' => [
                    'application' => [
                        '$ref' => '#/components/schemas/Application',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ApplicationStatus',
                    ],
                ],
            ],
            'ArmsConfig' => [
                'type' => 'object',
                'properties' => [
                    'appId' => [
                        'type' => 'string',
                    ],
                    'licenseKey' => [
                        'type' => 'string',
                    ],
                    'agentVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BuildPipeline' => [
                'type' => 'object',
                'properties' => [
                    'BuildConfig' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BeforeBuildCommand' => [
                                'type' => 'string',
                            ],
                            'BuildType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RunCommand' => [
                                'type' => 'string',
                            ],
                            'WorkingDir' => [
                                'type' => 'string',
                            ],
                            'DockerfilePath' => [
                                'type' => 'string',
                            ],
                            'TomcatConfig' => [
                                '$ref' => '#/components/schemas/TomcatConfig',
                            ],
                            'RuntimeType' => [
                                'type' => 'string',
                            ],
                            'RuntimeVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'CodeConfig' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'AccountId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'BranchName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Provider' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RepoFullName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RepoId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'CommitId' => [
                                'type' => 'string',
                            ],
                            'CommitUrl' => [
                                'type' => 'string',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'DeployConfig' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MinimumInstanceCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'MaximumInstanceCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'AlwaysAllocateCPU' => [
                                'type' => 'boolean',
                            ],
                            'UpdateApplicationInput' => [
                                'type' => 'string',
                            ],
                            'UpdateTraffic' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'ApplicationId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ApplicationName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Enabled' => [
                        'type' => 'boolean',
                    ],
                    'TriggerConfig' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'BranchName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TagName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ImageConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'Repository' => [
                                'type' => 'string',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                    'PackageConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'PackageType' => [
                                'type' => 'string',
                            ],
                            'PackageUrl' => [
                                'type' => 'string',
                            ],
                            'PackageVersion' => [
                                'type' => 'string',
                            ],
                            'PackageName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'BuildPipelineRun' => [
                'type' => 'object',
                'properties' => [
                    'BuildConfig' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BeforeBuildCommand' => [
                                'type' => 'string',
                            ],
                            'BuildType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RunCommand' => [
                                'type' => 'string',
                            ],
                            'Trigger' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'BranchName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'TagName' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'WorkingDir' => [
                                'type' => 'string',
                            ],
                            'DockerfilePath' => [
                                'type' => 'string',
                            ],
                            'TomcatConfig' => [
                                '$ref' => '#/components/schemas/TomcatConfig',
                            ],
                            'RuntimeType' => [
                                'type' => 'string',
                            ],
                            'RuntimeVersion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'CodeConfig' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'AccountId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'BranchName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Provider' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RepoFullName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RepoId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'CommitId' => [
                                'type' => 'string',
                            ],
                            'CommitUrl' => [
                                'type' => 'string',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'DeployConfig' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MinimumInstanceCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'MaximumInstanceCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'AlwaysAllocateCPU' => [
                                'type' => 'boolean',
                            ],
                            'UpdateApplicationInput' => [
                                'type' => 'string',
                            ],
                            'UpdateTraffic' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'VersionId' => [
                        'type' => 'string',
                    ],
                    'PipelineId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'PipelineRunId' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StartTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'WaitDuration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'BuildDuration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DeployDuration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Steps' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'StartTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'EndTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                ],
                                'Description' => [
                                    'type' => 'string',
                                ],
                                'Duration' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Result' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'ImageConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'Namespace' => [
                                'type' => 'string',
                            ],
                            'Repository' => [
                                'type' => 'string',
                            ],
                            'InstanceType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'PackageConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'PackageType' => [
                                'type' => 'string',
                            ],
                            'PackageUrl' => [
                                'type' => 'string',
                            ],
                            'PackageVersion' => [
                                'type' => 'string',
                            ],
                            'PackageName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'TriggerConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                            ],
                            'BranchName' => [
                                'type' => 'string',
                            ],
                            'TagName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'BuildPipelineRunLogLine' => [
                'type' => 'object',
                'properties' => [
                    'Offset' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CertConfig' => [
                'type' => 'object',
                'properties' => [
                    'certName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'certificate' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 20480,
                    ],
                    'privateKey' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 4096,
                    ],
                ],
            ],
            'ChangeOrderStatus' => [
                'type' => 'integer',
                'format' => 'int64',
            ],
            'CoStatus' => [
                'type' => 'string',
            ],
            'Container' => [
                'type' => 'object',
                'properties' => [
                    'Args' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Command' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'EnvironmentVariables' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Image' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'WebNASConfig' => [
                        '$ref' => '#/components/schemas/WebNASConfig',
                        'required' => false,
                    ],
                    'WebOSSConfig' => [
                        '$ref' => '#/components/schemas/WebOSSConfig',
                        'required' => false,
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'RequestConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'RequestTimeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Resources' => [
                        '$ref' => '#/components/schemas/ContainerResources',
                        'required' => true,
                    ],
                    'StartupProbe' => [
                        '$ref' => '#/components/schemas/StartupProbe',
                        'required' => false,
                    ],
                    'SLSCollectConfigs' => [
                        '$ref' => '#/components/schemas/SLSCollectConfigs',
                    ],
                    'MetricsCollectConfig' => [
                        '$ref' => '#/components/schemas/MetricsCollectConfig',
                    ],
                    'ImageRegistryConfig' => [
                        '$ref' => '#/components/schemas/ImageRegistryConfig',
                    ],
                ],
            ],
            'ContainerResources' => [
                'type' => 'object',
                'properties' => [
                    'Cpu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'Memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
            'CreateApplicationInput' => [
                'type' => 'object',
                'properties' => [
                    'namespaceID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'handler' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'code' => [
                        '$ref' => '#/components/schemas/InputCodeLocation',
                        'required' => false,
                    ],
                    'tracingConfig' => [
                        '$ref' => '#/components/schemas/TracingConfig',
                        'required' => false,
                    ],
                    'instanceSoftConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '512',
                    ],
                    'caPort' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                            'required' => false,
                        ],
                    ],
                    'ossMountConfig' => [
                        '$ref' => '#/components/schemas/OSSMountConfig',
                        'required' => false,
                    ],
                    'applicationName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'customRuntimeConfig' => [
                        '$ref' => '#/components/schemas/CustomRuntimeConfig',
                        'required' => false,
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/LogConfig',
                        'required' => false,
                    ],
                    'instanceLifecycleConfig' => [
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                        'required' => false,
                    ],
                    'scaleConfig' => [
                        '$ref' => '#/components/schemas/ScaleConfig',
                        'required' => false,
                    ],
                    'instanceType' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 0,
                        'maxLength' => 128,
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'minimum' => '0.05',
                    ],
                    'runtime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'command' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'imageConfig' => [
                        '$ref' => '#/components/schemas/ImageConfig',
                        'required' => false,
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'initializer' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 0,
                        'maxLength' => 128,
                    ],
                    'args' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'initializationTimeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '128',
                    ],
                    'customDNS' => [
                        '$ref' => '#/components/schemas/CustomDNS',
                        'required' => false,
                    ],
                    'customHealthCheckConfig' => [
                        '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                        'required' => false,
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'gpuMemorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '128',
                    ],
                    'vpcConfig' => [
                        '$ref' => '#/components/schemas/VPCConfig',
                        'required' => false,
                    ],
                    'httpTriggerConfig' => [
                        '$ref' => '#/components/schemas/HTTPTriggerConfig',
                        'required' => false,
                    ],
                    'slsConfig' => [
                        '$ref' => '#/components/schemas/SLSConfig',
                        'required' => false,
                    ],
                    'startupProbe' => [
                        '$ref' => '#/components/schemas/Probe',
                        'required' => false,
                    ],
                    'livenessProbe' => [
                        '$ref' => '#/components/schemas/Probe',
                        'required' => false,
                    ],
                    'enableAppMetric' => [
                        'type' => 'boolean',
                    ],
                    'customHostAlias' => [
                        '$ref' => '#/components/schemas/CustomHostAlias',
                    ],
                    'programmingLanguage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateCustomDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'keepFullPath' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'certConfig' => [
                        '$ref' => '#/components/schemas/CertConfig',
                        'required' => false,
                    ],
                    'domainName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                    'tlsConfig' => [
                        '$ref' => '#/components/schemas/TLSConfig',
                        'required' => false,
                    ],
                    'wafConfig' => [
                        '$ref' => '#/components/schemas/WAFConfig',
                        'required' => false,
                    ],
                    'applicationName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'namespaceID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CreateSlsIndexRequest' => [
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
            'CreateSlsIndexResponse' => [
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'type' => 'string',
                    ],
                    'logStore' => [
                        'type' => 'string',
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateSlsResourceResponse' => [
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'type' => 'string',
                    ],
                    'logStore' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateWebApplicationInput' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'Description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'RevisionConfig' => [
                        '$ref' => '#/components/schemas/RevisionConfig',
                        'required' => true,
                    ],
                    'WebNetworkConfig' => [
                        '$ref' => '#/components/schemas/WebNetworkConfig',
                        'required' => false,
                    ],
                    'WebScalingConfig' => [
                        '$ref' => '#/components/schemas/WebScalingConfig',
                        'required' => false,
                    ],
                    'WebTrafficConfig' => [
                        '$ref' => '#/components/schemas/WebTrafficConfig',
                        'required' => false,
                    ],
                ],
            ],
            'CreateWebCustomDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'WebCertConfig' => [
                        '$ref' => '#/components/schemas/WebCertConfig',
                        'required' => false,
                    ],
                    'DefaultForwardingAppName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'DomainName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 256,
                    ],
                    'Protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WebTLSConfig' => [
                        '$ref' => '#/components/schemas/WebTLSConfig',
                        'required' => false,
                    ],
                    'WebWAFConfig' => [
                        '$ref' => '#/components/schemas/WebWAFConfig',
                        'required' => false,
                    ],
                    'RouteConfig' => [
                        '$ref' => '#/components/schemas/RouteConfig',
                    ],
                ],
            ],
            'CustomDNS' => [
                'type' => 'object',
                'properties' => [
                    'searches' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'dnsOptions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/DNSOption',
                            'required' => false,
                        ],
                    ],
                    'nameServers' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
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
                    'namespaceID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'apiVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'subdomainCount' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'certConfig' => [
                        '$ref' => '#/components/schemas/CertConfig',
                        'required' => false,
                    ],
                    'domainName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'keepFullPath' => [
                        'type' => 'boolean',
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
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'routeConfig' => [
                        '$ref' => '#/components/schemas/RouteConfig',
                    ],
                ],
            ],
            'CustomHealthCheckConfig' => [
                'type' => 'object',
                'properties' => [
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'successThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'httpGetUrl' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CustomHostAlias' => [
                'type' => 'object',
                'properties' => [
                    'hostAliases' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HostAlias',
                        ],
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
                            'required' => false,
                        ],
                    ],
                    'command' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
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
            'DescribeInstanceLogsOutput' => [
                'type' => 'object',
                'properties' => [
                    'WebLogEntrys' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebLogEntry',
                        ],
                    ],
                ],
            ],
            'DescribeWebAppStaticsOutput' => [
                'type' => 'object',
                'properties' => [
                    'Length' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'WebAppStatics' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebStaticsInfo',
                        ],
                    ],
                ],
            ],
            'DescribeWebStaticsQueryOutput' => [
                'type' => 'object',
                'properties' => [
                    'Length' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'WebStatics' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebStaticsInfo',
                        ],
                    ],
                ],
            ],
            'ExecAction' => [
                'type' => 'object',
                'properties' => [
                    'command' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ExternalErrorSAEWeb' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'errorCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'message' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'GRPCAction' => [
                'type' => 'object',
                'properties' => [
                    'port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'service' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'GetApplicationLogsInput' => [
                'type' => 'object',
                'properties' => [
                    'isTail' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'offset' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'backwardLine' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'forwardLine' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'versionID' => [
                        'type' => 'string',
                    ],
                    'match' => [
                        'type' => 'string',
                    ],
                    'packID' => [
                        'type' => 'string',
                    ],
                    'packMeta' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'timestamp' => [
                        'type' => 'string',
                    ],
                    'instanceID' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetApplicationLogsOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextOffset' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'logEntrys' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/LogEntry',
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetInstanceLogsInput' => [
                'type' => 'object',
                'properties' => [
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'versionID' => [
                        'type' => 'string',
                    ],
                    'isTail' => [
                        'type' => 'boolean',
                    ],
                    'offset' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'backwardLine' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'forwardLine' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'match' => [
                        'type' => 'string',
                    ],
                    'packID' => [
                        'type' => 'string',
                    ],
                    'packMeta' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'timestamp' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetInstanceLogsOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetPerRequestLogsInput' => [
                'type' => 'object',
                'properties' => [
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'requestID' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'errorType' => [
                        'type' => 'string',
                    ],
                    'timestamp' => [
                        'type' => 'string',
                    ],
                    'isColdStart' => [
                        'type' => 'boolean',
                    ],
                    'instanceID' => [
                        'type' => 'string',
                    ],
                    'forwardLine' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'GetPerRequestLogsOutput' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetQuotaOutput' => [
                'type' => 'object',
                'properties' => [
                    'instanceLimit' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'instanceUsed' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HTTPGetAction' => [
                'type' => 'object',
                'properties' => [
                    'Host' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'HttpHeaders' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/HTTPHeader',
                        ],
                    ],
                    'Path' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Scheme' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'HTTPHeader' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'value' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'HTTPTriggerConfig' => [
                'type' => 'object',
                'properties' => [
                    'authType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'authConfig' => [
                        'type' => 'any',
                        'required' => false,
                    ],
                    'safeMode' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'disableURLInternet' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'aclConfig' => [
                        '$ref' => '#/components/schemas/AclConfig',
                    ],
                ],
            ],
            'HostAlias' => [
                'type' => 'object',
                'properties' => [
                    'ip' => [
                        'type' => 'string',
                    ],
                    'hostnames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'HttpApiRoute' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'IngressId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RouteId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'HttpApiId' => [
                        'type' => 'string',
                    ],
                    'HttpApiType' => [
                        'type' => 'string',
                    ],
                    'HttpApiName' => [
                        'type' => 'string',
                    ],
                    'EnvironmentId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Name' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'NamespaceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'GatewayId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Domains' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'DomainId' => [
                                    'type' => 'string',
                                ],
                                'DomainName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'DestinationType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Services' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'AppId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AppName' => [
                                    'type' => 'string',
                                ],
                                'ServiceId' => [
                                    'type' => 'string',
                                ],
                                'ServiceName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServicePort' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                                'ServiceProtocol' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ServiceWeight' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                            ],
                        ],
                    ],
                    'Predicates' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'PathPredicates' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Path' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'IgnoreCase' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'MethodPredicates' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'HeaderPredicates' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'QueryPredicates' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Policies' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Retry' => [
                                'type' => 'object',
                                'properties' => [
                                    'Attempts' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'HttpCodes' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'RetryOn' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'Enable' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'Timeout' => [
                                'type' => 'object',
                                'properties' => [
                                    'TimeUnit' => [
                                        'type' => 'string',
                                    ],
                                    'UnitNum' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Enable' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'Fallback' => [
                                'type' => 'object',
                                'properties' => [
                                    'Destinations' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AppId' => [
                                                    'type' => 'string',
                                                ],
                                                'AppName' => [
                                                    'type' => 'string',
                                                ],
                                                'ServiceId' => [
                                                    'type' => 'string',
                                                ],
                                                'ServiceName' => [
                                                    'type' => 'string',
                                                ],
                                                'ServiceProtocol' => [
                                                    'type' => 'string',
                                                ],
                                                'ServicePort' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Enable' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'SourceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'NacosNamespaceId' => [
                        'type' => 'string',
                    ],
                    'NacosInstanceId' => [
                        'type' => 'string',
                    ],
                    'DeployStatus' => [
                        'type' => 'string',
                    ],
                    'AddressType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ImageConfig' => [
                'type' => 'object',
                'properties' => [
                    'accelerationType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'image' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'instanceID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'registryConfig' => [
                        '$ref' => '#/components/schemas/RegistryConfig',
                        'required' => false,
                    ],
                ],
            ],
            'ImageRegistryConfig' => [
                'type' => 'object',
                'properties' => [
                    'AuthConfig' => [
                        '$ref' => '#/components/schemas/RegistryAuthenticationConfig',
                    ],
                    'CertConfig' => [
                        '$ref' => '#/components/schemas/RegistryCertificateConfig',
                    ],
                ],
            ],
            'InitContainerConfig' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ImageUrl' => [
                        'type' => 'string',
                    ],
                    'Command' => [
                        'type' => 'string',
                    ],
                    'CommandArgs' => [
                        'type' => 'string',
                    ],
                    'Envs' => [
                        'type' => 'string',
                    ],
                    'ConfigMapMountDesc' => [
                        'type' => 'string',
                    ],
                    'EmptyDirDesc' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InputCodeLocation' => [
                'type' => 'object',
                'properties' => [
                    'zipFile' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ossObjectName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ossBucketName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 3,
                        'maxLength' => 63,
                    ],
                ],
            ],
            'InstanceExecAuthorizationInput' => [
                'type' => 'object',
                'properties' => [
                    'options' => [
                        '$ref' => '#/components/schemas/InstanceExecAuthorizationInputOptions',
                    ],
                ],
            ],
            'InstanceExecAuthorizationInputOptions' => [
                'type' => 'object',
                'properties' => [
                    'stdin' => [
                        'type' => 'boolean',
                    ],
                    'stderr' => [
                        'type' => 'boolean',
                    ],
                    'stdout' => [
                        'type' => 'boolean',
                    ],
                    'tty' => [
                        'type' => 'boolean',
                    ],
                    'command' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'InstanceExecAuthorizationOutput' => [
                'type' => 'object',
                'properties' => [
                    'accountId' => [
                        'type' => 'string',
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'date' => [
                        'type' => 'string',
                    ],
                    'authorization' => [
                        'type' => 'string',
                    ],
                    'accessKeyId' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceInfo' => [
                'type' => 'object',
                'properties' => [
                    'versionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'instanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'imageUrl' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceLifecycleConfig' => [
                'type' => 'object',
                'properties' => [
                    'preStop' => [
                        '$ref' => '#/components/schemas/LifecycleHook',
                        'required' => false,
                    ],
                    'preFreeze' => [
                        '$ref' => '#/components/schemas/LifecycleHook',
                        'required' => false,
                    ],
                ],
            ],
            'InstanceMetricInfo' => [
                'type' => 'object',
                'properties' => [
                    'applicationID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'instanceID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'memoryLimitMB' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'cpuQuotaPercent' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'memoryUsageMB' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'cpuPercent' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'timestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'Instances' => [
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                ],
            ],
            'JaegerConfig' => [
                'type' => 'object',
                'properties' => [
                    'endpoint' => [
                        'type' => 'string',
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
                        'minLength' => 0,
                        'maxLength' => 128,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
            'ListApplicationVersionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'versions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Version',
                            'required' => false,
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'direction' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListApplicationsOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'applications' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Application',
                            'required' => false,
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListApplicationsWithStatusOutput' => [
                'type' => 'object',
                'properties' => [
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'applications' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ApplicationWithStatus',
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
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
                            'required' => false,
                        ],
                    ],
                    'nextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListInstancesMetricsOutput' => [
                'type' => 'object',
                'properties' => [
                    'metricsList' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/InstanceMetricInfo',
                            'required' => false,
                        ],
                    ],
                    'pageSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'pageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'totalCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListInstancesOutput' => [
                'type' => 'object',
                'properties' => [
                    'instances' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/InstanceInfo',
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'currentError' => [
                        'type' => 'string',
                    ],
                    'versionStatus' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/VersionStatus',
                        ],
                    ],
                ],
            ],
            'ListMetricsOutput' => [
                'type' => 'object',
                'properties' => [
                    'metrics' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'array',
                            'required' => false,
                            'items' => [
                                '$ref' => '#/components/schemas/MetricInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListStaticsQueryResponse' => [
                'type' => 'object',
                'properties' => [
                    'statics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/StaticsInfo',
                        ],
                    ],
                    'length' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sort' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListWebApplicationInstancesBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/ListWebInstancesOutput',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'ListWebApplicationRevisionsBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/ListWebApplicationRevisionsOutput',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'ListWebApplicationRevisionsOutput' => [
                'type' => 'object',
                'properties' => [
                    'NextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Revisions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Revision',
                        ],
                    ],
                ],
            ],
            'ListWebApplicationsBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/ListWebApplicationsOutput',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'ListWebApplicationsOutput' => [
                'type' => 'object',
                'properties' => [
                    'NextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WebApplicationWithInstanceCount' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebApplicationWithInstanceCount',
                        ],
                    ],
                ],
            ],
            'ListWebCustomDomainBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/ListWebCustomDomainOutput',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'ListWebCustomDomainOutput' => [
                'type' => 'object',
                'properties' => [
                    'NextToken' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WebCustomDomains' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebCustomDomain',
                        ],
                    ],
                ],
            ],
            'ListWebInstancesOutput' => [
                'type' => 'object',
                'properties' => [
                    'WebInstances' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebInstanceInfo',
                        ],
                    ],
                    'CurrentError' => [
                        'type' => 'string',
                    ],
                    'WebVersionStatus' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/WebVersionStatus',
                        ],
                    ],
                ],
            ],
            'LogConfig' => [
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 63,
                    ],
                    'enableRequestMetrics' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'enableInstanceMetrics' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 63,
                    ],
                    'logBeginRule' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'pushToUserSLS' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'LogEntry' => [
                'type' => 'object',
                'properties' => [
                    'timestamp' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'qualifier' => [
                        'type' => 'string',
                    ],
                    'versionID' => [
                        'type' => 'string',
                    ],
                    'instanceID' => [
                        'type' => 'string',
                    ],
                    'offset' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'packID' => [
                        'type' => 'string',
                    ],
                    'packMeta' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetricInfo' => [
                'type' => 'object',
                'properties' => [
                    'timestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'value' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'Count' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'Sum' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'Average' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'Maximum' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                    'Minimum' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                ],
            ],
            'MetricsCollectConfig' => [
                'type' => 'object',
                'properties' => [
                    'LogstoreName' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 63,
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 63,
                    ],
                    'EnablePushToUserSLS' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'NASConfig' => [
                'type' => 'object',
                'properties' => [
                    'mountPoints' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/NASMountConfig',
                            'required' => false,
                        ],
                        'maxItems' => 5,
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
                            'required' => false,
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
            'PathConfig' => [
                'type' => 'object',
                'properties' => [
                    'path' => [
                        'type' => 'string',
                    ],
                    'applicationName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PermissionAssistantApi' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'string',
                    ],
                    'updateTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PipelineStatus' => [
                'type' => 'integer',
                'format' => 'int64',
            ],
            'PolicyItem' => [
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
            'PriceEstimateFeature' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'EnvType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AppType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'CpuStrategy' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'CpuCore' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'MemoryGiB' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'MinInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MaxInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'InstanceQps' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'InternetOutboundGiB' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'HighLoadSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'HighLoadQps' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'HighLoadInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LowLoadSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LowLoadQps' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'LowLoadInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NoneLoadSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NoneLoadInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NewSaeVersion' => [
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'EphemeralStorageGiB' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EnableCpuIdle' => [
                        'type' => 'boolean',
                    ],
                    'CpuUtilLevel' => [
                        'type' => 'string',
                    ],
                    'CpuUtilMetrics' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'number',
                            'format' => 'float',
                        ],
                    ],
                    'AppCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'PriceEstimateOutput' => [
                'type' => 'object',
                'properties' => [
                    'TotalPrice' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Apps' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Feature' => [
                                    '$ref' => '#/components/schemas/PriceEstimateFeature',
                                ],
                                'Usages' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Id' => [
                                                'type' => 'string',
                                            ],
                                            'Amount' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                            ],
                                            'Unit' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Items' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                                'Type' => [
                                    'type' => 'string',
                                ],
                                'Amount' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                                'Unit' => [
                                    'type' => 'string',
                                ],
                                'Count' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Price' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                                'Steps' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Begin' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'End' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'Unit' => [
                                                'type' => 'string',
                                            ],
                                            'Price' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                            ],
                                            'RegionIds' => [
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
                    'PostPayItems' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                                'Type' => [
                                    'type' => 'string',
                                ],
                                'Amount' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                                'Unit' => [
                                    'type' => 'string',
                                ],
                                'Count' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Price' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                                'Steps' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Begin' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'End' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'Unit' => [
                                                'type' => 'string',
                                            ],
                                            'Price' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                            ],
                                            'RegionIds' => [
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
                    'PostPayTotalPrice' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'Probe' => [
                'type' => 'object',
                'properties' => [
                    'initialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'timeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'periodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'failureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'probeHandler' => [
                        'type' => 'object',
                        'properties' => [
                            'httpGet' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'path' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'port' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'httpHeaders' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'name' => [
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
                            'tcpSocket' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
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
            ],
            'ProbeHandler' => [
                'type' => 'object',
                'properties' => [
                    'HttpGet' => [
                        '$ref' => '#/components/schemas/HTTPGetAction',
                        'required' => false,
                    ],
                    'TcpSocket' => [
                        '$ref' => '#/components/schemas/TCPSocketAction',
                        'required' => false,
                    ],
                ],
            ],
            'PublishApplicationVersionInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                ],
            ],
            'PublishWebApplicationRevisionInput' => [
                'type' => 'object',
                'properties' => [
                    'Containers' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Container',
                        ],
                        'maxItems' => 1,
                    ],
                    'Description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'EnableArmsMetrics' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'TakeEffect' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'RegistryAuthConfig' => [
                'type' => 'object',
                'properties' => [
                    'userName' => [
                        'type' => 'string',
                    ],
                    'password' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RegistryAuthenticationConfig' => [
                'type' => 'object',
                'properties' => [
                    'UserName' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RegistryCertConfig' => [
                'type' => 'object',
                'properties' => [
                    'insecure' => [
                        'type' => 'boolean',
                    ],
                    'rootCaCertBase64' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RegistryCertificateConfig' => [
                'type' => 'object',
                'properties' => [
                    'Insecure' => [
                        'type' => 'boolean',
                    ],
                    'CertBase64' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RegistryConfig' => [
                'type' => 'object',
                'properties' => [
                    'authConfig' => [
                        '$ref' => '#/components/schemas/RegistryAuthConfig',
                    ],
                    'certConfig' => [
                        '$ref' => '#/components/schemas/RegistryCertConfig',
                    ],
                ],
            ],
            'Revision' => [
                'type' => 'object',
                'properties' => [
                    'CreatedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RevisionConfig' => [
                        '$ref' => '#/components/schemas/RevisionConfig',
                        'required' => false,
                    ],
                    'RevisionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Weight' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                ],
            ],
            'RevisionConfig' => [
                'type' => 'object',
                'properties' => [
                    'Containers' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Container',
                        ],
                        'maxItems' => 1,
                    ],
                    'EnableArmsMetrics' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'WebNetworkConfig' => [
                        '$ref' => '#/components/schemas/WebNetworkConfig',
                        'required' => false,
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
                    ],
                    'policyItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PolicyItem',
                        ],
                    ],
                ],
            ],
            'SLSCollectConfig' => [
                'type' => 'object',
                'properties' => [
                    'LogPath' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'LogType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'LogstoreName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'LogtailName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'MachineGroup' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'SLSCollectConfigs' => [
                'type' => 'object',
                'properties' => [
                    'CollectConfigs' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SLSCollectConfig',
                        ],
                    ],
                ],
            ],
            'SLSConfig' => [
                'type' => 'object',
                'properties' => [
                    'collectConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'logPath' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'projectName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'logstoreName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'logtailName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'logType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'ScaleConfig' => [
                'type' => 'object',
                'properties' => [
                    'alwaysAllocateCPU' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'maximumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'minimumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SidecarContainerConfig' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Cpu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ImageUrl' => [
                        'type' => 'string',
                    ],
                    'Command' => [
                        'type' => 'string',
                    ],
                    'CommandArgs' => [
                        'type' => 'string',
                    ],
                    'Envs' => [
                        'type' => 'string',
                    ],
                    'ConfigMapMountDesc' => [
                        'type' => 'string',
                    ],
                    'EmptyDirDesc' => [
                        'type' => 'string',
                    ],
                    'AcrInstanceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourceCodeAccount' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'AvatarUrl' => [
                        'type' => 'string',
                    ],
                    'Organizations' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'AvatarUrl' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'SourceCodeRepo' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'FullName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SourceCodeRepoBranch' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'CommitId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StartupProbe' => [
                'type' => 'object',
                'properties' => [
                    'FailureThreshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'InitialDelaySeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'PeriodSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'ProbeHandler' => [
                        '$ref' => '#/components/schemas/ProbeHandler',
                        'required' => false,
                    ],
                    'TimeoutSeconds' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'StaticsInfo' => [
                'type' => 'object',
                'properties' => [
                    'memoryUsage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'cost' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'gpuUsage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'instanceTrafficOut' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'serviceName' => [
                        'type' => 'string',
                    ],
                    'invocations' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'idleCPUUsage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'activeCPUUsage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'invokeInternetOut' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'invokeCDNOut' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'diskUsage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Submenu' => [
                'type' => 'object',
                'properties' => [
                    'SubmenuType' => [
                        'type' => 'string',
                    ],
                    'SubmenuDesc' => [
                        'type' => 'string',
                    ],
                    'Submenus' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Submenu',
                        ],
                    ],
                    'Items' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ItemType' => [
                                    'type' => 'string',
                                ],
                                'ItemDesc' => [
                                    'type' => 'string',
                                ],
                                'DefaultSelected' => [
                                    'type' => 'boolean',
                                ],
                                'RelatingItems' => [
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
            'TCPSocketAction' => [
                'type' => 'object',
                'properties' => [
                    'Host' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'TLSConfig' => [
                'type' => 'object',
                'properties' => [
                    'cipherSuites' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'maxVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'minVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'TomcatConfig' => [
                'type' => 'object',
                'properties' => [
                    'Version' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ContextPath' => [
                        'type' => 'string',
                    ],
                    'MaxThreads' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'UriEncoding' => [
                        'type' => 'string',
                    ],
                    'UseBodyEncodingForUri' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'TracingConfig' => [
                'type' => 'object',
                'properties' => [
                    'params' => [
                        'type' => 'any',
                        'required' => false,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'jaegerConfig' => [
                        '$ref' => '#/components/schemas/JaegerConfig',
                        'required' => false,
                    ],
                ],
            ],
            'TrafficConfig' => [
                'type' => 'object',
                'properties' => [
                    'createdTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'additionalVersionWeight' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'number',
                            'format' => 'float',
                            'required' => false,
                        ],
                    ],
                    'versionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'routePolicy' => [
                        '$ref' => '#/components/schemas/RoutePolicy',
                    ],
                    'resolvePolicy' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateApplicationInput' => [
                'type' => 'object',
                'properties' => [
                    'handler' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'code' => [
                        '$ref' => '#/components/schemas/InputCodeLocation',
                        'required' => false,
                    ],
                    'tracingConfig' => [
                        '$ref' => '#/components/schemas/TracingConfig',
                        'required' => false,
                    ],
                    'instanceSoftConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'nasConfig' => [
                        '$ref' => '#/components/schemas/NASConfig',
                        'required' => false,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                    'diskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '512',
                    ],
                    'caPort' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                            'required' => false,
                        ],
                    ],
                    'ossMountConfig' => [
                        '$ref' => '#/components/schemas/OSSMountConfig',
                        'required' => false,
                    ],
                    'customRuntimeConfig' => [
                        '$ref' => '#/components/schemas/CustomRuntimeConfig',
                        'required' => false,
                    ],
                    'logConfig' => [
                        '$ref' => '#/components/schemas/LogConfig',
                        'required' => false,
                    ],
                    'instanceLifecycleConfig' => [
                        '$ref' => '#/components/schemas/InstanceLifecycleConfig',
                        'required' => false,
                    ],
                    'scaleConfig' => [
                        '$ref' => '#/components/schemas/ScaleConfig',
                        'required' => false,
                    ],
                    'instanceType' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 0,
                        'maxLength' => 128,
                    ],
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'minimum' => '0.05',
                    ],
                    'runtime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'command' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'imageConfig' => [
                        '$ref' => '#/components/schemas/ImageConfig',
                        'required' => false,
                    ],
                    'instanceConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '200',
                    ],
                    'initializer' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 0,
                        'maxLength' => 128,
                    ],
                    'args' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'initializationTimeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                    'memorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '128',
                    ],
                    'customDNS' => [
                        '$ref' => '#/components/schemas/CustomDNS',
                        'required' => false,
                    ],
                    'customHealthCheckConfig' => [
                        '$ref' => '#/components/schemas/CustomHealthCheckConfig',
                        'required' => false,
                    ],
                    'environmentVariables' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'gpuMemorySize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '128',
                    ],
                    'vpcConfig' => [
                        '$ref' => '#/components/schemas/VPCConfig',
                        'required' => false,
                    ],
                    'httpTriggerConfig' => [
                        '$ref' => '#/components/schemas/HTTPTriggerConfig',
                        'required' => false,
                    ],
                    'effectiveImmediately' => [
                        'type' => 'boolean',
                    ],
                    'enableAppMetric' => [
                        'type' => 'boolean',
                    ],
                    'slsConfig' => [
                        '$ref' => '#/components/schemas/SLSConfig',
                        'required' => false,
                    ],
                    'startupProbe' => [
                        '$ref' => '#/components/schemas/Probe',
                        'required' => false,
                    ],
                    'livenessProbe' => [
                        '$ref' => '#/components/schemas/Probe',
                        'required' => false,
                    ],
                    'namespaceID' => [
                        'type' => 'string',
                    ],
                    'customHostAlias' => [
                        '$ref' => '#/components/schemas/CustomHostAlias',
                    ],
                    'programmingLanguage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateApplicationScaleConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'alwaysAllocateCPU' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'maximumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '-1',
                        'maximum' => '5000',
                    ],
                    'minimumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '5000',
                    ],
                ],
            ],
            'UpdateApplicationTrafficConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'additionalVersionWeight' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'number',
                            'format' => 'float',
                            'required' => false,
                        ],
                    ],
                    'versionId' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 10,
                    ],
                    'routePolicy' => [
                        '$ref' => '#/components/schemas/RoutePolicy',
                    ],
                    'resolvePolicy' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateAttributesInput' => [
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'type' => 'string',
                    ],
                    'versionID' => [
                        'type' => 'string',
                    ],
                    'httpTriggerConfig' => [
                        '$ref' => '#/components/schemas/HTTPTriggerConfig',
                    ],
                ],
            ],
            'UpdateCustomDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'keepFullPath' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'protocol' => [
                        'type' => 'string',
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
                    'applicationName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'applicationID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'namespaceID' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'UpdateWebApplicationInput' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'WebNetworkConfig' => [
                        '$ref' => '#/components/schemas/WebNetworkConfig',
                        'required' => false,
                    ],
                ],
            ],
            'UpdateWebApplicationScalingConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'MaximumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'MinimumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'UpdateWebApplicationTrafficConfigInput' => [
                'type' => 'object',
                'properties' => [
                    'WebAclConfig' => [
                        '$ref' => '#/components/schemas/WebAclConfig',
                        'required' => false,
                    ],
                    'AuthType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'DisableURLInternet' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'RevisionsTrafficWeight' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'number',
                            'format' => 'float',
                        ],
                    ],
                ],
            ],
            'UpdateWebCustomDomainInput' => [
                'type' => 'object',
                'properties' => [
                    'WebCertConfig' => [
                        '$ref' => '#/components/schemas/WebCertConfig',
                        'required' => false,
                    ],
                    'DefaultForwardingAppName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WebTLSConfig' => [
                        '$ref' => '#/components/schemas/WebTLSConfig',
                        'required' => false,
                    ],
                    'WebWAFConfig' => [
                        '$ref' => '#/components/schemas/WebWAFConfig',
                        'required' => false,
                    ],
                    'RouteConfig' => [
                        '$ref' => '#/components/schemas/RouteConfig',
                    ],
                ],
            ],
            'VPCConfig' => [
                'type' => 'object',
                'properties' => [
                    'anytunnelViaENI' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'securityGroupId' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 50,
                    ],
                    'role' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 300,
                    ],
                    'vSwitchIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 10,
                    ],
                    'vpcId' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 50,
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
                    'versionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'image' => [
                        'type' => 'string',
                    ],
                    'weight' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VersionStatus' => [
                'type' => 'object',
                'properties' => [
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
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
            'WebAclConfig' => [
                'type' => 'object',
                'properties' => [
                    'WebAclEntries' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/WebAclEntryConfig',
                            'required' => true,
                        ],
                    ],
                ],
            ],
            'WebAclEntryConfig' => [
                'type' => 'object',
                'properties' => [
                    'Entry' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'WebApplication' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationId' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'ApplicationName' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'CreatedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Description' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 256,
                    ],
                    'LastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'NamespaceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'RevisionConfig' => [
                        '$ref' => '#/components/schemas/RevisionConfig',
                        'required' => false,
                    ],
                    'InternetURL' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'IntranetURL' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'VpcId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WebScalingConfig' => [
                        '$ref' => '#/components/schemas/WebScalingConfig',
                        'required' => false,
                    ],
                    'WebTrafficConfig' => [
                        '$ref' => '#/components/schemas/WebTrafficConfig',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/WebApplication',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationInstanceLogsBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/DescribeInstanceLogsOutput',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationResourceStaticsBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/DescribeWebAppStaticsOutput',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationRevisionBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/Revision',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationScalingConfigBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/WebScalingConfig',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationStatus' => [
                'type' => 'object',
                'properties' => [
                    'InstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'WebScalingConfig' => [
                        '$ref' => '#/components/schemas/WebScalingConfig',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationTrafficConfigBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/WebTrafficConfig',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebApplicationWithInstanceCount' => [
                'type' => 'object',
                'properties' => [
                    'WebApplication' => [
                        '$ref' => '#/components/schemas/WebApplication',
                        'required' => false,
                    ],
                    'InstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'WebApplicationWithStatus' => [
                'type' => 'object',
                'properties' => [
                    'WebApplication' => [
                        '$ref' => '#/components/schemas/WebApplication',
                        'required' => false,
                    ],
                    'Status' => [
                        '$ref' => '#/components/schemas/WebApplicationStatus',
                        'required' => false,
                    ],
                ],
            ],
            'WebCertConfig' => [
                'type' => 'object',
                'properties' => [
                    'CertName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 1,
                        'maxLength' => 128,
                    ],
                    'Certificate' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 20480,
                    ],
                    'PrivateKey' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 4096,
                    ],
                ],
            ],
            'WebCustomDomain' => [
                'type' => 'object',
                'properties' => [
                    'accountId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WebCertConfig' => [
                        '$ref' => '#/components/schemas/WebCertConfig',
                        'required' => false,
                    ],
                    'CreatedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'DefaultForwardingAppName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'DomainName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'LastModifiedTime' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'NamespaceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Protocol' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WebTLSConfig' => [
                        '$ref' => '#/components/schemas/WebTLSConfig',
                        'required' => false,
                    ],
                    'WebWAFConfig' => [
                        '$ref' => '#/components/schemas/WebWAFConfig',
                        'required' => false,
                    ],
                    'RouteConfig' => [
                        '$ref' => '#/components/schemas/RouteConfig',
                    ],
                ],
            ],
            'WebCustomDomainBody' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Data' => [
                        '$ref' => '#/components/schemas/WebCustomDomain',
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
                    'Success' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebInstanceInfo' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'VersionId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ImageUrl' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WebLogEntry' => [
                'type' => 'object',
                'properties' => [
                    'Message' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'WebNASConfig' => [
                'type' => 'object',
                'properties' => [
                    'MountPoints' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebNASMountPoint',
                            'required' => false,
                        ],
                        'maxItems' => 5,
                    ],
                ],
            ],
            'WebNASMountPoint' => [
                'type' => 'object',
                'properties' => [
                    'MountDir' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 64,
                    ],
                    'NasAddr' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 128,
                    ],
                    'NasPath' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WebNetworkConfig' => [
                'type' => 'object',
                'properties' => [
                    'InternetAccess' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 50,
                    ],
                    'VSwitchIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 10,
                    ],
                ],
            ],
            'WebOSSConfig' => [
                'type' => 'object',
                'properties' => [
                    'MountPoints' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WebOSSMountPoint',
                            'required' => false,
                        ],
                        'maxItems' => 5,
                    ],
                ],
            ],
            'WebOSSMountPoint' => [
                'type' => 'object',
                'properties' => [
                    'BucketName' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 3,
                        'maxLength' => 64,
                    ],
                    'BucketPath' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 128,
                    ],
                    'MountDir' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 2,
                        'maxLength' => 64,
                    ],
                    'ReadOnly' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'WebScalingConfig' => [
                'type' => 'object',
                'properties' => [
                    'MaximumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'MinimumInstanceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'WebStaticsInfo' => [
                'type' => 'object',
                'properties' => [
                    'CpuUsage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'Invocations' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'InternetTrafficOut' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'MemoryUsage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'WebTLSConfig' => [
                'type' => 'object',
                'properties' => [
                    'CipherSuites' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'MaxVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'MinVersion' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'WebTrafficConfig' => [
                'type' => 'object',
                'properties' => [
                    'WebAclConfig' => [
                        '$ref' => '#/components/schemas/WebAclConfig',
                        'required' => false,
                    ],
                    'AuthType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'DisableInternetURL' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'RevisionsTrafficWeight' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'number',
                            'format' => 'float',
                        ],
                    ],
                ],
            ],
            'WebVersionStatus' => [
                'type' => 'object',
                'properties' => [
                    'ErrorMessage' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WebWAFConfig' => [
                'type' => 'object',
                'properties' => [
                    'EnableWAF' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'OpenSaeService' => [
            'path' => '/service/open',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [],
        ],
        'CreateNamespace' => [
            'path' => '/pop/v1/paas/namespace',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceDescription',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NameSpaceShortId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableMicroRegistration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateIngress' => [
            'path' => '/pop/v1/sam/ingress/Ingress',
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
                    'name' => 'NamespaceId',
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
                    'name' => 'SlbId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'CertId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DefaultRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LoadBalanceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'SecurityPolicyId',
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
                    ],
                ],
                [
                    'name' => 'IdleTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedFor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForClientSrcPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForProto',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForSlbId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForSlbPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
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
                    'name' => 'LoadBalancerEdition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CorsConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableGzip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteNamespace' => [
            'path' => '/pop/v1/paas/namespace',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NameSpaceShortId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteIngress' => [
            'path' => '/pop/v1/sam/ingress/Ingress',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'IngressId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateNamespace' => [
            'path' => '/pop/v1/paas/namespace',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceDescription',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NameSpaceShortId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableMicroRegistration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateNamespaceVpc' => [
            'path' => '/pop/v1/sam/namespace/updateNamespaceVpc',
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
                    'name' => 'NamespaceId',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NameSpaceShortId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateApplicationVswitches' => [
            'path' => '/pop/v1/sam/app/updateAppVswitches',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Deploy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateIngress' => [
            'path' => '/pop/v1/sam/ingress/Ingress',
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
                    'name' => 'IngressId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CertId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'ListenerPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DefaultRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Rules',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LoadBalanceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'RequestTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'IdleTimeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedFor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForClientSrcPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForProto',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForSlbId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableXForwardedForSlbPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CorsConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableGzip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeNamespace' => [
            'path' => '/pop/v1/paas/namespace',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NameSpaceShortId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeNamespaces' => [
            'path' => '/pop/v1/paas/namespaces',
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
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeNamespaceList' => [
            'path' => '/pop/v1/sam/namespace/describeNamespaceList',
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
                    'name' => 'ContainCustom',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HybridCloudExclude',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAppEvents' => [
            'path' => '/pop/v1/sam/app/listAppEvents',
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
                    'name' => 'CurrentPage',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ObjectKind',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ObjectName',
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
                    'name' => 'Reason',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListNamespaceChangeOrders' => [
            'path' => '/pop/v1/sam/changeorder/listNamespaceChangeOrders',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CoStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CoType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
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
            ],
        ],
        'DescribeNamespaceResources' => [
            'path' => '/pop/v1/sam/namespace/describeNamespaceResources',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NameSpaceShortId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeIngress' => [
            'path' => '/pop/v1/sam/ingress/Ingress',
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
                    'name' => 'IngressId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListIngresses' => [
            'path' => '/pop/v1/sam/ingress/IngressList',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
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
            ],
        ],
        'DescribePipeline' => [
            'path' => '/pop/v1/sam/changeorder/DescribePipeline',
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
                    'name' => 'PipelineId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetArmsTopNMetric' => [
            'path' => '/pop/v1/sam/getArmsTopNMetric',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                    'name' => 'AppSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CpuStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetChangeOrderMetric' => [
            'path' => '/pop/v1/sam/getChangeOrderMetric',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CreateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CpuStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CoType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetScaleAppMetric' => [
            'path' => '/pop/v1/sam/getScaleAppMetric',
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
                    'name' => 'RegionId',
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
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CpuStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetWarningEventMetric' => [
            'path' => '/pop/v1/sam/getWarningEventMetric',
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
                    'name' => 'RegionId',
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
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CpuStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateApplication' => [
            'path' => '/pop/v1/sam/app/createApplication',
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
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppDescription',
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
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PackageVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Jdk',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WebContainer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Memory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CommandArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Envs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomHostAlias',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Liveness',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Readiness',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Deploy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EdasContainerVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlsConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreStop',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PostStart',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigMapMountDesc',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TerminationGracePeriodSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '6000',
                    ],
                ],
                [
                    'name' => 'PhpArmsConfigLocation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PhpConfigLocation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PhpConfig',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TomcatConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssMountDescs',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkSecret',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Php',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrAssumeRoleArn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImagePullSecrets',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AssociateEip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProgrammingLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'KafkaConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PvtzDiscoverySvc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MicroRegistration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MicroRegistrationConfig',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Python',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PythonModules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Dotnet',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableEbpf',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SaeVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'v1',
                            'v2',
                        ],
                    ],
                ],
                [
                    'name' => 'AppSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BaseAppId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceTags',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableNewArms',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableCpuBurst',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OidcRoleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SidecarContainersConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SidecarContainerConfig',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'SecretMountDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableSidecarResourceIsolated',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomImageNetworkType',
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
                    'name' => 'NewSaeVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MicroserviceEngineConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DiskSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InitContainersConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/InitContainerConfig',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'GpuConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartupProbe',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IsStateful',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnablePrometheus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HeadlessPvtzDiscoverySvc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Html',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EmptyDirDesc',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AgentVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableNamespaceAgentVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableNamespaceSlsConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlsLogEnvTags',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteApplication' => [
            'path' => '/pop/v1/sam/app/deleteApplication',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteInstances' => [
            'path' => '/pop/v1/sam/app/deleteInstances',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopApplication' => [
            'path' => '/pop/v1/sam/app/stopApplication',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartApplication' => [
            'path' => '/pop/v1/sam/app/startApplication',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ReduceApplicationCapacityByInstanceIds' => [
            'path' => '/pop/v1/sam/app/ScaleInApplicationWithInstanceIds',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateApplicationDescription' => [
            'path' => '/pop/v1/sam/app/updateAppDescription',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppDescription',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAppSecurityGroup' => [
            'path' => '/pop/v1/sam/app/updateAppSecurityGroup',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeApplicationStatus' => [
            'path' => '/pop/v1/sam/app/describeApplicationStatus',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListChangeOrders' => [
            'path' => '/pop/v1/sam/changeorder/ListChangeOrders',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
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
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CoType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CoStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Reverse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeChangeOrder' => [
            'path' => '/pop/v1/sam/changeorder/DescribeChangeOrder',
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
                    'name' => 'ChangeOrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeInstanceSpecifications' => [
            'path' => '/pop/v1/paas/quota/instanceSpecifications',
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
            'parameters' => [],
        ],
        'DeployApplication' => [
            'path' => '/pop/v1/sam/app/deployApplication',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Jdk',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WebContainer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CommandArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Envs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomHostAlias',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Liveness',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Readiness',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BatchWaitTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EdasContainerVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UpdateStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlsConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PostStart',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreStop',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChangeOrderDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoEnableApplicationScalingRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigMapMountDesc',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TerminationGracePeriodSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '6000',
                    ],
                ],
                [
                    'name' => 'EnableAhas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PhpArmsConfigLocation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PhpConfigLocation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PhpConfig',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TomcatConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssMountDescs',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkSecret',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableGreyTagRoute',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Php',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrAssumeRoleArn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImagePullSecrets',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AssociateEip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'KafkaConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PvtzDiscoverySvc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SwimlanePvtzDiscoverySvc',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MicroRegistration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MicroRegistrationConfig',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Python',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PythonModules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Dotnet',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Deploy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Memory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceTags',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableNewArms',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableCpuBurst',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OidcRoleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SidecarContainersConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SidecarContainerConfig',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'SecretMountDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableSidecarResourceIsolated',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomImageNetworkType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MicroserviceEngineConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NewSaeVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InitContainersConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/InitContainerConfig',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'GpuConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartupProbe',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnablePrometheus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Html',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EmptyDirDesc',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlbIngressReadinessGate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxSurgeInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxSurgeInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AgentVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableNamespaceAgentVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlsLogEnvTags',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RescaleApplicationVertically' => [
            'path' => '/pop/v1/sam/app/rescaleApplicationVertically',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Cpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Memory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'minReadyInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'minReadyInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'autoEnableApplicationScalingRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DiskSize',
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
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Deploy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ConfirmPipelineBatch' => [
            'path' => '/pop/v1/sam/changeorder/ConfirmPipelineBatch',
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
                    'name' => 'PipelineId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Confirm',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AbortAndRollbackChangeOrder' => [
            'path' => '/pop/v1/sam/changeorder/AbortAndRollbackChangeOrder',
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
                    'name' => 'ChangeOrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RescaleApplication' => [
            'path' => '/pop/v1/sam/app/rescaleApplication',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MinReadyInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoEnableApplicationScalingRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RestartApplication' => [
            'path' => '/pop/v1/sam/app/restartApplication',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MinReadyInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoEnableApplicationScalingRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AbortChangeOrder' => [
            'path' => '/pop/v1/sam/changeorder/AbortChangeOrder',
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
                    'name' => 'ChangeOrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Rollback',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RollbackApplication' => [
            'path' => '/pop/v1/sam/app/rollbackApplication',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BatchWaitTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UpdateStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoEnableApplicationScalingRule',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BatchStopApplications' => [
            'path' => '/pop/v1/sam/app/batchStopApplications',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BatchStartApplications' => [
            'path' => '/pop/v1/sam/app/batchStartApplications',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DowngradeApplicationApmService' => [
            'path' => '/pop/v1/sam/app/applicationApmService',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpgradeApplicationApmService' => [
            'path' => '/pop/v1/sam/app/applicationApmService',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListConsumedServices' => [
            'path' => '/pop/v1/sam/service/listConsumedServices',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListPublishedServices' => [
            'path' => '/pop/v1/sam/service/listPublishedServices',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAppServices' => [
            'path' => '/pop/v1/sam/service/listAppServices',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegistryType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NacosInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NacosNamespaceId',
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
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSecret' => [
            'path' => '/pop/v1/sam/secret/secret',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SecretType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Opaque',
                            'kubernetes.io/dockerconfigjson',
                            'kubernetes.io/tls',
                        ],
                    ],
                ],
                [
                    'name' => 'SecretData',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SecretData' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeSecret' => [
            'path' => '/pop/v1/sam/secret/secret',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '1000000000',
                    ],
                ],
            ],
        ],
        'ListSecrets' => [
            'path' => '/pop/v1/sam/secret/secrets',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateSecret' => [
            'path' => '/pop/v1/sam/secret/secret',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '1000000000',
                    ],
                ],
                [
                    'name' => 'SecretData',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SecretData' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteSecret' => [
            'path' => '/pop/v1/sam/secret/secret',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '1000000000',
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
            'path' => '/tags',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UntagResources' => [
            'path' => '/tags',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TagKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeleteAll',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TagResources' => [
            'path' => '/tags',
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
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateConfigMap' => [
            'path' => '/pop/v1/sam/configmap/configMap',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Data' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
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
            ],
        ],
        'DeleteConfigMap' => [
            'path' => '/pop/v1/sam/configmap/configMap',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ConfigMapId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateConfigMap' => [
            'path' => '/pop/v1/sam/configmap/configMap',
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
                    'name' => 'ConfigMapId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Data' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
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
            ],
        ],
        'DescribeConfigMap' => [
            'path' => '/pop/v1/sam/configmap/configMap',
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
                    'name' => 'ConfigMapId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListNamespacedConfigMaps' => [
            'path' => '/pop/v1/sam/configmap/listNamespacedConfigMaps',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateGreyTagRoute' => [
            'path' => '/pop/v1/sam/tagroute/greyTagRoute',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
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
                    'name' => 'ScRules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DubboRules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlbRules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteGreyTagRoute' => [
            'path' => '/pop/v1/sam/tagroute/greyTagRoute',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'GreyTagRouteId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateGreyTagRoute' => [
            'path' => '/pop/v1/sam/tagroute/greyTagRoute',
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
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScRules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DubboRules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GreyTagRouteId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AlbRules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeGreyTagRoute' => [
            'path' => '/pop/v1/sam/tagroute/greyTagRoute',
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
                    'name' => 'GreyTagRouteId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '1',
                        'exclusiveMaximum' => false,
                    ],
                ],
            ],
        ],
        'ListGreyTagRoute' => [
            'path' => '/pop/v1/sam/tagroute/greyTagRouteList',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateOrUpdateSwimmingLaneGroup' => [
            'path' => '/pop/v1/cas/gray/createOrUpdateSwimmingLaneGroup',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppIds',
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
                    'name' => 'EntryAppType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntryAppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SwimVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateOrUpdateSwimmingLane' => [
            'path' => '/pop/v1/cas/gray/createOrUpdateSwimmingLane',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LaneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LaneName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LaneTag',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CanaryModel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppEntryRule',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Paths' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Percentage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'ConditionJoiner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Conditions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Condition' => [
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
                            'IndependentPercentageEnable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PercentageByPath' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'MseGatewayEntryRule',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RouteIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'Percentage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'ConditionJoiner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Conditions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Condition' => [
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
                            'IndependentPercentageEnable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PercentageByRoute' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListApplicationsForSwimmingLane' => [
            'path' => '/pop/v1/cas/gray/listApplicationsForSwimmingLane',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSwimmingLaneGatewayRoutes' => [
            'path' => '/pop/v1/cas/gray/listSwimmingLaneGatewayRoutes',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GatewayUniqueId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSwimmingLaneGroupTags' => [
            'path' => '/pop/v1/cas/gray/listSwimmingLaneGroupTags',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeSwimmingLane' => [
            'path' => '/pop/v1/cas/gray/describeSwimmingLane',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LaneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAllSwimmingLanes' => [
            'path' => '/pop/v1/cas/gray/listSwimmingLanes',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAllSwimmingLaneGroups' => [
            'path' => '/pop/v1/cas/gray/listSwimmingLaneGroups',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteSwimmingLaneGroup' => [
            'path' => '/pop/v1/cas/gray/deleteSwimmingLaneGroup',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateSwimmingLaneEnableAttribute' => [
            'path' => '/pop/v1/cas/gray/updateSwimmingLaneEnableAttribute',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LaneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetApplication' => [
            'path' => '/pop/v1/sam/app/getApplication',
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
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeApplicationConfig' => [
            'path' => '/pop/v1/sam/app/describeApplicationConfig',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/pop/v1/paas/regionConfig',
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
            'parameters' => [],
        ],
        'DescribeInstanceLog' => [
            'path' => '/pop/v1/sam/instance/describeInstanceLog',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ContainerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Previous',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeComponents' => [
            'path' => '/pop/v1/sam/resource/components',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeEdasContainers' => [
            'path' => '/pop/v1/sam/resource/edasContainers',
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
            'parameters' => [],
        ],
        'DescribeApplicationImage' => [
            'path' => '/pop/v1/sam/container/describeApplicationImage',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeApplicationInstances' => [
            'path' => '/pop/v1/sam/app/describeApplicationInstances',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
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
                    'name' => 'Reverse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
            ],
        ],
        'DescribeApplicationGroups' => [
            'path' => '/pop/v1/sam/app/describeApplicationGroups',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
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
            ],
        ],
        'ListApplications' => [
            'path' => '/pop/v1/sam/app/listApplications',
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
                    'name' => 'CurrentPage',
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
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Reverse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FieldType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FieldValue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IsStateful',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NewSaeVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryResourceStatics' => [
            'path' => '/pop/v1/paas/quota/queryResourceStatics',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListLogConfigs' => [
            'path' => '/pop/v1/sam/log/listLogConfigs',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAppVersions' => [
            'path' => '/pop/v1/sam/app/listAppVersions',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RestartInstances' => [
            'path' => '/pop/v1/sam/app/restartInstances',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAvailabilityMetric' => [
            'path' => '/pop/v1/sam/getAvailabilityMetric',
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
                    'name' => 'RegionId',
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
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppSource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CpuStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeAppServiceDetail' => [
            'path' => '/pop/v1/sam/service/describeAppServiceDetail',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceGroup',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'NacosInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NacosNamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAppServicesPage' => [
            'path' => '/pop/v1/sam/service/listAppServicesPage',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ServiceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'DescribeApplicationNlbs' => [
            'path' => '/pop/v1/sam/app/nlb',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BindNlb' => [
            'path' => '/pop/v1/sam/app/nlb',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NlbId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Listeners',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ZoneMappings',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
            ],
        ],
        'DescribeApplicationSlbs' => [
            'path' => '/pop/v1/sam/app/slb',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BindSlb' => [
            'path' => '/pop/v1/sam/app/slb',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Internet',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Intranet',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InternetSlbId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IntranetSlbId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InternetSlbChargeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IntranetSlbChargeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UnbindSlb' => [
            'path' => '/pop/v1/sam/app/slb',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Internet',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Intranet',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UnbindNlb' => [
            'path' => '/pop/v1/sam/app/nlb',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NlbId',
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
                    'name' => 'Port',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateApplicationScalingRule' => [
            'path' => '/pop/v1/sam/scale/applicationScalingRule',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleTimer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScalingRuleMetric',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScalingRuleEnable',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableIdle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteApplicationScalingRule' => [
            'path' => '/pop/v1/sam/scale/applicationScalingRule',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DisableApplicationScalingRule' => [
            'path' => '/pop/v1/sam/scale/disableApplicationScalingRule',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EnableApplicationScalingRule' => [
            'path' => '/pop/v1/sam/scale/enableApplicationScalingRule',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateApplicationScalingRule' => [
            'path' => '/pop/v1/sam/scale/applicationScalingRule',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleTimer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScalingRuleMetric',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinReadyInstanceRatio',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableIdle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeApplicationScalingRule' => [
            'path' => '/pop/v1/sam/scale/applicationScalingRule',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeApplicationScalingRules' => [
            'path' => '/pop/v1/sam/scale/applicationScalingRules',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateWebApplication' => [
            'path' => '/pop/v2/api/web/applications',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateWebApplicationInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeWebApplication' => [
            'path' => '/pop/v2/api/web/applications/{ApplicationId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListWebApplications' => [
            'path' => '/pop/v2/api/web/applications',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Prefix',
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
        'UpdateWebApplication' => [
            'path' => '/pop/v2/api/web/applications/{ApplicationId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
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
                        '$ref' => '#/components/schemas/UpdateWebApplicationInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteWebApplication' => [
            'path' => '/pop/v2/api/web/applications/{ApplicationId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateWebApplicationScalingConfig' => [
            'path' => '/pop/v2/api/web/application-scaling/{ApplicationId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
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
                        '$ref' => '#/components/schemas/UpdateWebApplicationScalingConfigInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeWebApplicationScalingConfig' => [
            'path' => '/pop/v2/api/web/application-scaling/{ApplicationId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopWebApplication' => [
            'path' => '/pop/v2/api/web/application-ops/{ApplicationId}/stop',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartWebApplication' => [
            'path' => '/pop/v2/api/web/application-ops/{ApplicationId}/start',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateWebApplicationTrafficConfig' => [
            'path' => '/pop/v2/api/web/application-traffic/{ApplicationId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
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
                        '$ref' => '#/components/schemas/UpdateWebApplicationTrafficConfigInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeWebApplicationTrafficConfig' => [
            'path' => '/pop/v2/api/web/application-traffic/{ApplicationId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PublishWebApplicationRevision' => [
            'path' => '/pop/v2/api/web/application-revisions/{ApplicationId}/revisions',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
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
                        '$ref' => '#/components/schemas/PublishWebApplicationRevisionInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListWebApplicationRevisions' => [
            'path' => '/pop/v2/api/web/application-revisions/{ApplicationId}/revisions',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
        'DescribeWebApplicationRevision' => [
            'path' => '/pop/v2/api/web/application-revisions/{ApplicationId}/revisions/{RevisionId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RevisionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteWebApplicationRevision' => [
            'path' => '/pop/v2/api/web/application-revisions/{ApplicationId}/revisions/{RevisionId}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RevisionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateWebCustomDomain' => [
            'path' => '/pop/v2/api/web/custom-domains',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/CreateWebCustomDomainInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeWebCustomDomain' => [
            'path' => '/pop/v2/api/web/custom-domains/{DomainName}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListWebCustomDomains' => [
            'path' => '/pop/v2/api/web/custom-domains',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Prefix',
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
        'UpdateWebCustomDomain' => [
            'path' => '/pop/v2/api/web/custom-domains/{DomainName}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DomainName',
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
                        '$ref' => '#/components/schemas/UpdateWebCustomDomainInput',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteWebCustomDomain' => [
            'path' => '/pop/v2/api/web/custom-domains/{DomainName}',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DomainName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListWebApplicationInstances' => [
            'path' => '/pop/v2/api/web/applications-observability/{ApplicationId}/instances',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
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
                    'name' => 'VersionIds',
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
                    'name' => 'Statuses',
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
                    'name' => 'Limit',
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
            ],
        ],
        'DescribeWebInstanceLogs' => [
            'path' => '/pop/v2/api/web/applications-observability/{ApplicationId}/instances/{InstanceId}/logs',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeWebApplicationResourceStatics' => [
            'path' => '/pop/v2/api/web/applications-observability/{ApplicationId}/resource',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
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
            ],
        ],
        'CreateJob' => [
            'path' => '/pop/v1/sam/job/createJob',
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
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppDescription',
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
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PackageVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Jdk',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WebContainer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Memory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CommandArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Envs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomHostAlias',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EdasContainerVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlsConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreStop',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PostStart',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigMapMountDesc',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TerminationGracePeriodSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '6000',
                    ],
                ],
                [
                    'name' => 'PhpConfigLocation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PhpConfig',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TomcatConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssMountDescs',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkSecret',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrAssumeRoleArn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImagePullSecrets',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableImageAccl',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Workload',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TriggerConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConcurrencyPolicy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackoffLimit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Slice',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SliceEnvs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RefAppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProgrammingLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Python',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PythonModules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BestEffortType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteHistoryJob' => [
            'path' => '/pop/v1/sam/job/deleteHistoryJob',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteJob' => [
            'path' => '/pop/v1/sam/job/deleteJob',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeJobStatus' => [
            'path' => '/pop/v1/sam/job/describeJobStatus',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'DescribeJob' => [
            'path' => '/pop/v1/sam/job/describeJob',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'ExecJob' => [
            'path' => '/pop/v1/sam/job/execJob',
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
                    'name' => 'AppId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CommandArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Envs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Time',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListJobs' => [
            'path' => '/pop/v1/sam/job/listJobs',
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
                    'name' => 'CurrentPage',
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
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Reverse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FieldType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FieldValue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Workload',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SuspendJob' => [
            'path' => '/pop/v1/sam/job/suspendJob',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Suspend',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateJob' => [
            'path' => '/pop/v1/sam/job/updateJob',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Jdk',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WebContainer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PackageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Command',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CommandArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Envs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomHostAlias',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JarStartArgs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EdasContainerVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlsConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MountDesc',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PostStart',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreStop',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WarStartOptions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigMapMountDesc',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TerminationGracePeriodSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '6000',
                    ],
                ],
                [
                    'name' => 'PhpConfigLocation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PhpConfig',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TomcatConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssMountDescs',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssAkSecret',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Php',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcrAssumeRoleArn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImagePullSecrets',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableImageAccl',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'TriggerConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConcurrencyPolicy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackoffLimit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Slice',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SliceEnvs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Replicas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RefAppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProgrammingLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Python',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PythonModules',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NasConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'BestEffortType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeJobHistory' => [
            'path' => '/pop/v1/sam/job/describeJobHistory',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeConfigurationPrice' => [
            'path' => '/pop/v1/paas/configurationPrice',
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
                    'name' => 'Cpu',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Memory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Workload',
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
                    'name' => 'NewSaeVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BestEffortType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetWebshellToken' => [
            'path' => '/pop/v1/sam/instance/webshellToken',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PodName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ContainerName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAppMode' => [
            'path' => '/pop/v1/sam/app/updateAppMode',
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
                    'name' => 'EnableIdle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryArmsEnable' => [
            'path' => '/pop/v1/arms/queryArms',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeApplicationMseService' => [
            'path' => '/pop/v1/sam/app/applicationMseService',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EnableAhas',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BatchRestartApplications' => [
            'path' => '/pop/v1/sam/app/batchRestartApplications',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateNamespaceSlsConfigs' => [
            'path' => '/pop/cas/namespace/updateNamespaceSlsConfigs',
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
                    'name' => 'NamespaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NameSpaceShortId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SlsConfigs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DisableArms' => [
            'path' => '/pop/v1/arms/disableArms',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ResumeTraffic' => [
            'path' => '/pop/v1/sam/app/instanceTrafficResume',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SuspendTraffic' => [
            'path' => '/pop/v1/sam/app/instanceTrafficSuspend',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceIds',
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
            'endpoint' => 'sae.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'sae.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'sae.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'sae.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'sae.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'sae.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'sae.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'sae.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'sae.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'sae.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'sae.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'sae.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'sae.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'sae.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'sae.eu-central-1.aliyuncs.com',
        ],
    ],
];