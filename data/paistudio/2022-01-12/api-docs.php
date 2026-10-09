<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PaiStudio',
        'version' => '2022-01-12',
    ],
    'components' => [
        'schemas' => [
            'ACS' => [
                'type' => 'object',
                'properties' => [
                    'ACSQuotaId' => [
                        'type' => 'string',
                    ],
                    'AssociatedProducts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Action' => [
                'type' => 'object',
                'properties' => [
                    'ActionType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AlgorithmSpec' => [
                'type' => 'object',
                'properties' => [
                    'OutputChannels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Channel',
                        ],
                    ],
                    'HyperParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HyperParameterDefinition',
                        ],
                    ],
                    'JobType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'TFJob',
                            'PyTorchJob',
                            'XGBoostJob',
                            'ElasticBatchJob',
                        ],
                    ],
                    'Command' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'MetricDefinitions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/MetricDefinition',
                        ],
                    ],
                    'InputChannels' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Channel',
                        ],
                    ],
                    'SupportsDistributedTraining' => [
                        'type' => 'boolean',
                    ],
                    'Image' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'SupportedInstanceTypes' => [
                        'type' => 'array',
                        'deprecated' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ComputeResource' => [
                        'type' => 'object',
                        'properties' => [
                            'Policy' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Version' => [
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
                    ],
                    'CodeDir' => [
                        '$ref' => '#/components/schemas/Location',
                    ],
                    'Customization' => [
                        'type' => 'object',
                        'properties' => [
                            'CodeDir' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'ResourceRequirements' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ConditionExpression',
                        ],
                    ],
                    'ProgressDefinitions' => [
                        'type' => 'object',
                        'properties' => [
                            'OverallProgress' => [
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'Regex' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RemainingTime' => [
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'Regex' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'AllocateStrategySpec' => [
                'type' => 'object',
                'properties' => [
                    'NodeSpecs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/NodeSpec',
                        ],
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
                ],
            ],
            'BindingPolicy' => [
                'type' => 'object',
                'properties' => [
                    'NodeSpecCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IncludeNodes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ExcludeNodes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CacheInfo' => [
                'type' => 'object',
                'properties' => [
                    'MountPoint' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CacheService' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'SupportedClientQuotaIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'CreatedBy' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'CacheInfos' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CacheInfo',
                        ],
                    ],
                    'CacheServiceId' => [
                        'type' => 'string',
                    ],
                    'GmtCreated' => [
                        'type' => 'string',
                    ],
                    'UserVpc' => [
                        '$ref' => '#/components/schemas/UserVpc',
                    ],
                ],
            ],
            'CapacityLock' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'type' => 'string',
                    ],
                    'gmtModified' => [
                        'type' => 'string',
                    ],
                    'lockProvider' => [
                        'type' => 'string',
                    ],
                    'privatePoolId' => [
                        'type' => 'string',
                    ],
                    'tenantId' => [
                        'type' => 'string',
                    ],
                    'instanceType' => [
                        'type' => 'string',
                    ],
                    'zoneId' => [
                        'type' => 'string',
                    ],
                    'paymentType' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'lastSyncTime' => [
                        'type' => 'string',
                    ],
                    'lastReconcileAttemptTime' => [
                        'type' => 'string',
                    ],
                    'crsReservationId' => [
                        'type' => 'string',
                    ],
                    'expireTime' => [
                        'type' => 'string',
                    ],
                    'operator' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'requestedCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'lockedCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'usedCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'availableCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Channel' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Required' => [
                        'type' => 'boolean',
                    ],
                    'Properties' => [
                        'type' => 'object',
                    ],
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'SupportedChannelTypes' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ChannelProperty' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'Value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ClusterSpec' => [
                'type' => 'object',
                'properties' => [
                    'ClusterType' => [
                        'type' => 'string',
                    ],
                    'Image' => [
                        'type' => 'string',
                    ],
                    'DataSources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataSource',
                        ],
                    ],
                ],
            ],
            'ComponentSpec' => [
                'type' => 'object',
                'properties' => [
                    'OutputChannels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Channel',
                        ],
                    ],
                    'HyperParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/HyperParameterDefinition',
                        ],
                    ],
                    'JobType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Command' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'MetricDefinitions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/MetricDefinition',
                        ],
                    ],
                    'InputChannels' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Channel',
                        ],
                    ],
                    'Image' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'CodeDir' => [
                        '$ref' => '#/components/schemas/Location',
                    ],
                    'ResourceRequirements' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ConditionExpression',
                        ],
                    ],
                ],
            ],
            'ConditionExpression' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Operator' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Values' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'DataSource' => [
                'type' => 'object',
                'properties' => [
                    'DataSourceId' => [
                        'type' => 'string',
                    ],
                    'MountPath' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
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
                    'GpuTypeAlias' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SupportRDMA' => [
                        'type' => 'boolean',
                    ],
                    'EriQuantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SupportSetNetworkCardIndex' => [
                        'type' => 'boolean',
                    ],
                    'AcceleratorType' => [
                        'type' => 'string',
                    ],
                    'PlannedCpu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PlannedMemory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'EcsImageId' => [
                        'type' => 'string',
                    ],
                    'GpuGUSpec' => [
                        'type' => 'string',
                    ],
                    'GpuMemory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MachineModel' => [
                        'type' => 'string',
                    ],
                    'SupportGPUShare' => [
                        'type' => 'boolean',
                    ],
                    'NetworkMode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EniCacheConfig' => [
                'type' => 'object',
                'properties' => [
                    'Enabled' => [
                        'type' => 'boolean',
                    ],
                    'CachePoolSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'maximum' => '255',
                    ],
                ],
            ],
            'Features' => [
                'type' => 'object',
                'properties' => [
                    'Quota' => [
                        'type' => 'object',
                        'properties' => [
                            'IsEnabled' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'ForwardInfo' => [
                'type' => 'object',
                'properties' => [
                    'NatGatewayId' => [
                        'type' => 'string',
                    ],
                    'EipAllocationId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GPUInfo' => [
                'type' => 'object',
                'properties' => [
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GPUMetric' => [
                'type' => 'object',
                'properties' => [
                    'Index' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Model' => [
                        'type' => 'string',
                    ],
                    'UsageRate' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Status' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'HyperParameterDefinition' => [
                'type' => 'object',
                'properties' => [
                    'DefaultValue' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Required' => [
                        'type' => 'boolean',
                    ],
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Range' => [
                        '$ref' => '#/components/schemas/HyperParameterRange',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HyperParameterRange' => [
                'type' => 'object',
                'properties' => [
                    'Enum' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'MinLength' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MaxLength' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Minimum' => [
                        'type' => 'string',
                    ],
                    'Maximum' => [
                        'type' => 'string',
                    ],
                    'ExclusiveMinimum' => [
                        'type' => 'boolean',
                    ],
                    'ExclusiveMaximum' => [
                        'type' => 'boolean',
                    ],
                    'Pattern' => [
                        'type' => 'string',
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
                ],
            ],
            'JobViewMetric' => [
                'type' => 'object',
                'properties' => [
                    'ResourceGroupID' => [
                        'type' => 'string',
                    ],
                    'TotalCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'GPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'TotalMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MemoryUsageRate' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NetworkInputRate' => [
                        'type' => 'string',
                    ],
                    'NetworkOutputRate' => [
                        'type' => 'string',
                    ],
                    'DiskReadRate' => [
                        'type' => 'string',
                    ],
                    'DiskWriteRate' => [
                        'type' => 'string',
                    ],
                    'JobType' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'NodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'JobId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Label' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Location' => [
                'type' => 'object',
                'properties' => [
                    'LocationType' => [
                        'type' => 'string',
                    ],
                    'LocationValue' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'MachineGroup' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'EcsCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtStartedTime' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupID' => [
                        'type' => 'string',
                    ],
                    'GmtCreatedTime' => [
                        'type' => 'string',
                    ],
                    'CreatorID' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                    ],
                    'EcsSpec' => [
                        'type' => 'string',
                    ],
                    'SupportedDrivers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'PaymentDuration' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'DiskCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtExpiredTime' => [
                        'type' => 'string',
                    ],
                    'OrderInstanceId' => [
                        'type' => 'string',
                    ],
                    'DefaultDriver' => [
                        'type' => 'string',
                    ],
                    'MachineGroupID' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'DiskPL' => [
                        'type' => 'string',
                    ],
                    'Cpu' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Gpu' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GpuMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GpuType' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'AllocatableCpu' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AllocatableMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SystemReservedCpu' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SystemReservedMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                        'type' => 'string',
                    ],
                ],
            ],
            'MetricDefinition' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Regex' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'Node' => [
                'type' => 'object',
                'properties' => [
                    'CreatorId' => [
                        'type' => 'string',
                    ],
                    'NodeName' => [
                        'type' => 'string',
                    ],
                    'NodeType' => [
                        'type' => 'string',
                    ],
                    'AcceleratorType' => [
                        'type' => 'string',
                    ],
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
                    'GPUMemory' => [
                        'type' => 'string',
                    ],
                    'NodeStatus' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                    'OrderStatus' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupName' => [
                        'type' => 'string',
                    ],
                    'MachineGroupId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'GmtExpiredTime' => [
                        'type' => 'string',
                    ],
                    'IsBound' => [
                        'type' => 'boolean',
                    ],
                    'BoundQuotas' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QuotaIdName',
                        ],
                    ],
                    'RequestCPU' => [
                        'type' => 'string',
                    ],
                    'RequestMemory' => [
                        'type' => 'string',
                    ],
                    'RequestGPU' => [
                        'type' => 'string',
                    ],
                    'LimitCPU' => [
                        'type' => 'string',
                    ],
                    'LimitMemory' => [
                        'type' => 'string',
                    ],
                    'LimitGPU' => [
                        'type' => 'string',
                    ],
                    'PodNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'WorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Users' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UserInfo',
                        ],
                    ],
                    'HyperZone' => [
                        'type' => 'string',
                    ],
                    'AvailabilityZone' => [
                        'type' => 'string',
                    ],
                    'AllocatableCPU' => [
                        'type' => 'string',
                    ],
                    'AllocatableMemory' => [
                        'type' => 'string',
                    ],
                    'SystemReservedCPU' => [
                        'type' => 'string',
                    ],
                    'SystemReservedMemory' => [
                        'type' => 'string',
                    ],
                    'AncestorQuotaWorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SelfQuotaWorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DescendantQuotaWorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DiskPL' => [
                        'type' => 'string',
                    ],
                    'DiskCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'NodeGPUMetric' => [
                'type' => 'object',
                'properties' => [
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'NodeType' => [
                        'type' => 'string',
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                    'GPUCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AcceleratorType' => [
                        'type' => 'string',
                    ],
                    'TotalMemory' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'UsedMemory' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'MemoryUtil' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'GPUMetrics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GPUMetric',
                        ],
                    ],
                ],
            ],
            'NodeMetric' => [
                'type' => 'object',
                'properties' => [
                    'NodeID' => [
                        'type' => 'string',
                    ],
                    'Metrics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Metric',
                        ],
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeOperationResult' => [
                'type' => 'object',
                'properties' => [
                    'NodeName' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodePodInfo' => [
                'type' => 'object',
                'properties' => [
                    'PodName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Phase' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'PodNamespace' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'PodIP' => [
                        'type' => 'string',
                    ],
                    'ResourceSpec' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'WorkloadType' => [
                        'type' => 'string',
                    ],
                    'WorkloadId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'NodeName' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'string',
                    ],
                    'RequestMemory' => [
                        'type' => 'string',
                    ],
                    'RequestGPU' => [
                        'type' => 'string',
                    ],
                    'Workloads' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'WorkloadId' => [
                                    'type' => 'string',
                                ],
                                'WorkloadType' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'WorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AncestorQuotaWorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SelfQuotaWorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DescendantQuotaWorkloadNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'NodeSpec' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'BindingPolicy' => [
                        '$ref' => '#/components/schemas/BindingPolicy',
                    ],
                    'HyperType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeType' => [
                'type' => 'object',
                'properties' => [
                    'NodeType' => [
                        'type' => 'string',
                    ],
                    'AcceleratorType' => [
                        'type' => 'string',
                    ],
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
                    'GPUMemory' => [
                        'type' => 'string',
                    ],
                    'AllocatableCPU' => [
                        'type' => 'string',
                    ],
                    'AllocatableMemory' => [
                        'type' => 'string',
                    ],
                    'SystemReservedCPU' => [
                        'type' => 'string',
                    ],
                    'SystemReservedMemory' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeTypeStatistic' => [
                'type' => 'object',
                'properties' => [
                    'NodeType' => [
                        'type' => 'string',
                    ],
                    'TotalCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CanBeBoundCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'NodeViewMetric' => [
                'type' => 'object',
                'properties' => [
                    'NodeID' => [
                        'type' => 'string',
                    ],
                    'NodeType' => [
                        'type' => 'string',
                    ],
                    'MachineGroupID' => [
                        'type' => 'string',
                    ],
                    'CreatedTime' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RequestMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RequestGPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NetworkInputRate' => [
                        'type' => 'string',
                    ],
                    'NetworkOutputRate' => [
                        'type' => 'string',
                    ],
                    'DiskReadRate' => [
                        'type' => 'string',
                    ],
                    'DiskWriteRate' => [
                        'type' => 'string',
                    ],
                    'TotalCPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalGPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                    'UserNumber' => [
                        'type' => 'string',
                    ],
                    'UserIDs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'CPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'MemoryUsageRate' => [
                        'type' => 'string',
                    ],
                    'NodeStatus' => [
                        'type' => 'string',
                    ],
                    'TotalTasks' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TaskIdMap' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'OversoldUsageConfig' => [
                'type' => 'object',
                'properties' => [
                    'DisabledBy' => [
                        'type' => 'string',
                    ],
                    'Disabled' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Permission' => [
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'IsEnabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'QueueInfo' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'UserName' => [
                        'type' => 'string',
                    ],
                    'WorkloadId' => [
                        'type' => 'string',
                    ],
                    'Position' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtEnqueuedTime' => [
                        'type' => 'string',
                    ],
                    'Priority' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtCreatedTime' => [
                        'type' => 'string',
                    ],
                    'WorkloadType' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Resource' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Reason' => [
                        'type' => 'string',
                    ],
                    'UseOversoldResource' => [
                        'type' => 'boolean',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'WorkloadStatus' => [
                        'type' => 'string',
                    ],
                    'WorkloadName' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'GmtPositionModifiedTime' => [
                        'type' => 'string',
                    ],
                    'CodeType' => [
                        'type' => 'string',
                    ],
                    'GmtDequeuedTime' => [
                        'type' => 'string',
                    ],
                    'WorkspaceName' => [
                        'type' => 'string',
                    ],
                    'QueueStrategy' => [
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
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'ParentQuotaId' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'AllocateStrategy' => [
                        'type' => 'string',
                    ],
                    'Min' => [
                        '$ref' => '#/components/schemas/ResourceSpec',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Label',
                        ],
                    ],
                    'CreatorId' => [
                        'type' => 'string',
                    ],
                    'LatestOperationId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                    'GmtCreatedTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'QuotaDetails' => [
                        '$ref' => '#/components/schemas/QuotaDetails',
                    ],
                    'QuotaConfig' => [
                        '$ref' => '#/components/schemas/QuotaConfig',
                    ],
                    'Workspaces' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/WorkspaceIdName',
                        ],
                    ],
                    'SubQuotas' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QuotaIdName',
                        ],
                    ],
                    'QueueStrategy' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'HyperZones' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'QuotaCluster' => [
                        '$ref' => '#/components/schemas/QuotaCluster',
                    ],
                ],
            ],
            'QuotaCluster' => [
                'type' => 'object',
                'properties' => [
                    'ClusterType' => [
                        'type' => 'string',
                    ],
                    'Image' => [
                        'type' => 'string',
                    ],
                    'DataSources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataSource',
                        ],
                    ],
                    'Endpoints' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'QuotaConfig' => [
                'type' => 'object',
                'properties' => [
                    'SupportRDMA' => [
                        'type' => 'boolean',
                    ],
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'UserVpc' => [
                        '$ref' => '#/components/schemas/UserVpc',
                    ],
                    'SupportGPUDrivers' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'DefaultGPUDriver' => [
                        'type' => 'string',
                    ],
                    'ACS' => [
                        '$ref' => '#/components/schemas/ACS',
                    ],
                    'ResourceSpecs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/WorkspaceSpecs',
                        ],
                    ],
                    'EnablePreemptSubquotaWorkloads' => [
                        'type' => 'boolean',
                    ],
                    'SubQuotaPreemptionConfig' => [
                        '$ref' => '#/components/schemas/SubQuotaPreemptionConfig',
                    ],
                    'EnableSubQuotaPreemption' => [
                        'type' => 'boolean',
                    ],
                    'EnableGPUShare' => [
                        'type' => 'boolean',
                    ],
                    'OversoldUsageInfo' => [
                        '$ref' => '#/components/schemas/OversoldUsageConfig',
                    ],
                    'SelfQuotaPreemptionConfig' => [
                        '$ref' => '#/components/schemas/SelfQuotaPreemptionConfig',
                    ],
                    'EniCacheConfig' => [
                        '$ref' => '#/components/schemas/EniCacheConfig',
                    ],
                    'SandboxCacheConfig' => [
                        '$ref' => '#/components/schemas/SandboxCacheConfig',
                    ],
                    'UseCase' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'QuotaDetails' => [
                'type' => 'object',
                'properties' => [
                    'DesiredMinQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'ActualMinQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'RequestedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'UsedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'AllocatedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'SelfAllocatedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'AncestorsAllocatedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'DescendantsAllocatedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'SelfSubmittedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'AllocatableQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'SystemReservedQuota' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                ],
            ],
            'QuotaIdName' => [
                'type' => 'object',
                'properties' => [
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'QuotaName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'QuotaJob' => [
                'type' => 'object',
                'properties' => [
                    'Total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Queuing' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Running' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'QuotaJobViewMetric' => [
                'type' => 'object',
                'properties' => [
                    'TotalCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'GPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'TotalMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MemoryUsageRate' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NetworkInputRate' => [
                        'type' => 'string',
                    ],
                    'NetworkOutputRate' => [
                        'type' => 'string',
                    ],
                    'DiskReadRate' => [
                        'type' => 'string',
                    ],
                    'DiskWriteRate' => [
                        'type' => 'string',
                    ],
                    'JobType' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'NodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'JobId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'QuotaMetric' => [
                'type' => 'object',
                'properties' => [
                    'Metrics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Metric',
                        ],
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'QuotaNodeViewMetric' => [
                'type' => 'object',
                'properties' => [
                    'NodeID' => [
                        'type' => 'string',
                    ],
                    'NodeType' => [
                        'type' => 'string',
                    ],
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'CreatedTime' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RequestMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RequestGPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NetworkInputRate' => [
                        'type' => 'string',
                    ],
                    'NetworkOutputRate' => [
                        'type' => 'string',
                    ],
                    'DiskReadRate' => [
                        'type' => 'string',
                    ],
                    'DiskWriteRate' => [
                        'type' => 'string',
                    ],
                    'TotalCPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalGPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GPUType' => [
                        'type' => 'string',
                    ],
                    'UserNumber' => [
                        'type' => 'string',
                    ],
                    'UserIDs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'CPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'MemoryUsageRate' => [
                        'type' => 'string',
                    ],
                    'NodeStatus' => [
                        'type' => 'string',
                    ],
                    'TotalTasks' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TaskIdMap' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'QuotaTopo' => [
                'type' => 'object',
                'properties' => [
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'QuotaName' => [
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'ParentQuotaId' => [
                        'type' => 'string',
                    ],
                    'Depth' => [
                        'type' => 'string',
                    ],
                    'QuotaDetails' => [
                        '$ref' => '#/components/schemas/QuotaDetails',
                    ],
                    'WorkloadDetails' => [
                        '$ref' => '#/components/schemas/WorkloadDetails',
                    ],
                ],
            ],
            'QuotaUser' => [
                'type' => 'object',
                'properties' => [
                    'Username' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'WorkloadCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Resources' => [
                        'type' => 'object',
                        'properties' => [
                            'Used' => [
                                '$ref' => '#/components/schemas/ResourceAmount',
                            ],
                            'Submitted' => [
                                '$ref' => '#/components/schemas/ResourceAmount',
                            ],
                        ],
                    ],
                ],
            ],
            'QuotaUserViewMetric' => [
                'type' => 'object',
                'properties' => [
                    'TotalCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'GPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'TotalMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MemoryUsageRate' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NetworkInputRate' => [
                        'type' => 'string',
                    ],
                    'NetworkOutputRate' => [
                        'type' => 'string',
                    ],
                    'DiskReadRate' => [
                        'type' => 'string',
                    ],
                    'DiskWriteRate' => [
                        'type' => 'string',
                    ],
                    'JobType' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'CPUNodeNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'GPUNodeNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CpuJobNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'GpuJobNames' => [
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
                    'CpuNodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'GpuNodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ResourceAmount' => [
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
                ],
            ],
            'ResourceDiagnosisDetail' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ExceedResources' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Limit' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'Used' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'WorkloadIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ResourceGroup' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupID' => [
                        'type' => 'string',
                    ],
                    'WorkspaceID' => [
                        'type' => 'string',
                    ],
                    'UserVpc' => [
                        '$ref' => '#/components/schemas/UserVpc',
                    ],
                    'GmtCreatedTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'CreatorID' => [
                        'type' => 'string',
                    ],
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceGroupMetric' => [
                'type' => 'object',
                'properties' => [
                    'ResourceGroupID' => [
                        'type' => 'string',
                    ],
                    'Metrics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Metric',
                        ],
                    ],
                    'GpuType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceInfo' => [
                'type' => 'object',
                'properties' => [],
            ],
            'ResourceInfos' => [
                'type' => 'object',
                'properties' => [
                    'UserName' => [
                        'type' => 'string',
                    ],
                    'GpuCardType' => [
                        'type' => 'string',
                    ],
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'EcsSpec' => [
                        'type' => 'string',
                    ],
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'MaxQuota' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'UsedQuota' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NetworkPodId' => [
                        'type' => 'string',
                    ],
                    'MachineModel' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceLimitDetails' => [
                'type' => 'object',
                'properties' => [
                    'GCLevel' => [
                        'type' => 'string',
                    ],
                    'ResourceLimit' => [
                        'type' => 'object',
                    ],
                    'ShouldIgnoreResourceCheck' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ResourceOperation' => [
                'type' => 'object',
                'properties' => [
                    'OperationId' => [
                        'type' => 'string',
                    ],
                    'ObjectType' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'OperationType' => [
                        'type' => 'string',
                    ],
                    'OperationSpecJson' => [
                        'type' => 'string',
                    ],
                    'OperationDescription' => [
                        'type' => 'string',
                    ],
                    'CreatorId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'type' => 'string',
                    ],
                    'GmtCreatedTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'GmtStartTime' => [
                        'type' => 'string',
                    ],
                    'GmtEndTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceSpec' => [
                'type' => 'object',
                'properties' => [
                    'NodeSpecs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/NodeSpec',
                        ],
                    ],
                ],
            ],
            'Rules' => [
                'type' => 'object',
                'properties' => [
                    'Scheduling' => [
                        '$ref' => '#/components/schemas/SchedulingRule',
                    ],
                ],
            ],
            'SandboxCacheConfig' => [
                'type' => 'object',
                'properties' => [
                    'Enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SchedulingRule' => [
                'type' => 'object',
                'properties' => [
                    'StartAt' => [
                        'type' => 'string',
                    ],
                    'EndAt' => [
                        'type' => 'string',
                    ],
                    'ExecuteOnce' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'CronTab' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SelfQuotaPreemptionConfig' => [
                'type' => 'object',
                'properties' => [
                    'PreemptedPriorities' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                            'minimum' => '1',
                            'maximum' => '9',
                        ],
                    ],
                    'PreemptedProducts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'PreemptorPriorities' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                            'minimum' => '1',
                            'maximum' => '9',
                        ],
                    ],
                ],
            ],
            'SpotPriceItem' => [
                'type' => 'object',
                'properties' => [
                    'ZoneId' => [
                        'type' => 'string',
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'SpotDiscount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Timestamp' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SpotStockPreview' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'StockStatus' => [
                        'type' => 'string',
                    ],
                    'SpotDiscount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'SubQuotaPreemptionConfig' => [
                'type' => 'object',
                'properties' => [
                    'PreemptedPriorityUpperBound' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'PreemptedProducts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Task' => [
                'type' => 'object',
                'properties' => [
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'TaskName' => [
                        'type' => 'string',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Rules' => [
                        '$ref' => '#/components/schemas/Rules',
                    ],
                    'Actions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Action',
                        ],
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'UserName' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'GmtCreatedTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'GmtActivatedTime' => [
                        'type' => 'string',
                    ],
                    'GmtStoppedTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskInstance' => [
                'type' => 'object',
                'properties' => [
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'TaskInstanceId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'GmtCreatedTime' => [
                        'type' => 'string',
                    ],
                    'GmtEndTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskInstanceEvent' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'GmtStartTime' => [
                        'type' => 'string',
                    ],
                    'GmtEndTime' => [
                        'type' => 'string',
                    ],
                    'WorkloadType' => [
                        'type' => 'string',
                    ],
                    'PodName' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TimeRangeFilter' => [
                'type' => 'object',
                'properties' => [
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UnschedulableNodeDetail' => [
                'type' => 'object',
                'properties' => [
                    'Nodes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Reason' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UserInfo' => [
                'type' => 'object',
                'properties' => [
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'UserName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UserQuotaPermission' => [
                'type' => 'object',
                'properties' => [
                    'QuotaId' => [
                        'type' => 'string',
                    ],
                    'Permissions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UserViewMetric' => [
                'type' => 'object',
                'properties' => [
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'TotalCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'GPUUsageRate' => [
                        'type' => 'string',
                    ],
                    'TotalMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MemoryUsageRate' => [
                        'type' => 'string',
                    ],
                    'RequestCPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestGPU' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RequestMemory' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NetworkInputRate' => [
                        'type' => 'string',
                    ],
                    'NetworkOutputRate' => [
                        'type' => 'string',
                    ],
                    'DiskReadRate' => [
                        'type' => 'string',
                    ],
                    'DiskWriteRate' => [
                        'type' => 'string',
                    ],
                    'JobType' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'CPUNodeNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'GPUNodeNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CpuJobNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'GpuJobNames' => [
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
                    'CpuNodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'GpuNodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
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
                    'ExtendedCIDRs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'RoleArn' => [
                        'type' => 'string',
                    ],
                    'DefaultRoute' => [
                        'type' => 'string',
                    ],
                    'DefaultForwardInfo' => [
                        '$ref' => '#/components/schemas/ForwardInfo',
                    ],
                ],
            ],
            'WorkloadDetails' => [
                'type' => 'object',
                'properties' => [
                    'Summary' => [
                        '$ref' => '#/components/schemas/QuotaJob',
                    ],
                    'DSW' => [
                        '$ref' => '#/components/schemas/QuotaJob',
                    ],
                    'DLC' => [
                        '$ref' => '#/components/schemas/QuotaJob',
                    ],
                    'EAS' => [
                        '$ref' => '#/components/schemas/QuotaJob',
                    ],
                ],
            ],
            'WorkspaceIdName' => [
                'type' => 'object',
                'properties' => [
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WorkspaceSpec' => [
                'type' => 'object',
                'properties' => [
                    'SpecName' => [
                        'type' => 'string',
                    ],
                    'IsGuaranteedValid' => [
                        'type' => 'boolean',
                    ],
                    'IsOverSoldValid' => [
                        'type' => 'boolean',
                    ],
                    'Spec' => [
                        '$ref' => '#/components/schemas/ResourceAmount',
                    ],
                    'CodeType' => [
                        'type' => 'string',
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Reason' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WorkspaceSpecs' => [
                'type' => 'object',
                'properties' => [
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Product' => [
                        'type' => 'string',
                    ],
                    'Specs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/WorkspaceSpec',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'UpdateResourceGroup' => [
            'path' => '/api/v1/resources/{ResourceGroupID}',
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
                            'UserVpc' => [
                                '$ref' => '#/components/schemas/UserVpc',
                                'required' => false,
                            ],
                            'Unbind' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetResourceGroupTotal' => [
            'path' => '/api/v1/resources/data/total',
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
                    'name' => 'ResourceGroupID',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListResourceGroups' => [
            'path' => '/api/v1/resources',
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
                    'name' => 'Name',
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
                    'name' => 'Order',
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
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ShowAll',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ComputingResourceProvider',
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
                    'name' => 'ResourceGroupIDs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HasResource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Versions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetResourceGroupRequest' => [
            'path' => '/api/v1/resources/data/request',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PodStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteResourceGroupMachineGroup' => [
            'path' => '/api/v1/resources/{ResourceGroupID}/machinegroups/{MachineGroupID}',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'MachineGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'GetNodeMetrics' => [
            'path' => '/api/v1/resources/{ResourceGroupID}/nodemetrics/{MetricType}',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GPUType',
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
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListResourceGroupMachineGroups' => [
            'path' => '/api/v1/resources/{ResourceGroupID}/machinegroups',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CreatorID',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
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
                    'name' => 'PaymentDurationUnit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaymentDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EcsSpec',
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
                    'name' => 'Order',
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
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MachineGroupIDs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUserViewMetrics' => [
            'path' => '/api/v1/resources/{ResourceGroupID}/usermetrics',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'PageNumber',
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
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'UserId',
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
            ],
        ],
        'GetResourceGroupMachineGroup' => [
            'path' => '/api/v1/resources/{ResourceGroupID}/machinegroups/{MachineGroupID}',
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
                    'name' => 'MachineGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'GetResourceGroup' => [
            'path' => '/api/v1/resources/{ResourceGroupID}',
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
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IsAIWorkspaceDataEnabled',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
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
            ],
        ],
        'DeleteMachineGroup' => [
            'path' => '/api/v1/resources/machinegroups/{MachineGroupID}',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'MachineGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'CreateResourceGroup' => [
            'path' => '/api/v1/resources',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserVpc' => [
                                '$ref' => '#/components/schemas/UserVpc',
                                'required' => false,
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ComputingResourceProvider' => [
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
                            'Version' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteResourceGroup' => [
            'path' => '/api/v1/resources/{ResourceGroupID}',
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
                    'name' => 'ResourceGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMachineGroup' => [
            'path' => '/api/v1/resources/machinegroups/{MachineGroupID}',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'MachineGroupID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAlgorithm' => [
            'path' => '/api/v1/algorithms',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmDescription',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAlgorithmVersion' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}/versions/{AlgorithmVersion}',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmVersion',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/AlgorithmSpec',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAlgorithm' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}',
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
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAlgorithmVersion' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}/versions/{AlgorithmVersion}',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AlgorithmVersion',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAlgorithm' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}',
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
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAlgorithmVersion' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}/versions/{AlgorithmVersion}',
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
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmVersion',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAlgorithms' => [
            'path' => '/api/v1/algorithms',
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmProvider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'ListAlgorithmVersions' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}/versions',
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAlgorithm' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AlgorithmDescription',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAlgorithmVersion' => [
            'path' => '/api/v1/algorithms/{AlgorithmId}/versions/{AlgorithmVersion}',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AlgorithmId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmVersion',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmSpec',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/AlgorithmSpec',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTrainingJob' => [
            'path' => '/api/v1/trainingjobs',
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
                            'AlgorithmName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AlgorithmProvider' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AlgorithmVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ComputeResource' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'EcsCount' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'EcsSpec' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ResourceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceCount' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'InstanceSpec' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'CPU' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Memory' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'SharedMemory' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'GPU' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'GPUType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'SpotSpec' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'SpotStrategy' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'SpotDiscountLimit' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'UseSpotInstance' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'HyperParameters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Name' => [
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
                            'InputChannels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DatasetId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'VersionName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'InputUri' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Options' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Labels' => [
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
                            'OutputChannels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'DatasetId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'OutputUri' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'VersionName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Scheduler' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'MaxRunningTimeInSeconds' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'MaxRunningTimeInMinutes' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'TrainingJobDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TrainingJobName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AlgorithmSpec' => [
                                '$ref' => '#/components/schemas/AlgorithmSpec',
                                'required' => false,
                            ],
                            'CodeDir' => [
                                '$ref' => '#/components/schemas/Location',
                                'required' => false,
                            ],
                            'RoleArn' => [
                                'type' => 'string',
                                'required' => false,
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
                            'Settings' => [
                                '$ref' => '#/components/schemas/JobSettings',
                                'required' => false,
                            ],
                            'ExperimentConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ExperimentId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Environments' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'PythonRequirements' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Priority' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'AssignNodeSpec' => [
                                '$ref' => '#/components/schemas/AssignNodeSpec',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateInstanceWebTerminal' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/instances/{InstanceId}/webterminals',
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
                    'name' => 'TrainingJobId',
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
        'CheckInstanceWebTerminal' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/instances/{InstanceId}/webterminals/action/check',
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
                    'name' => 'TrainingJobId',
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
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CheckInfo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTrainingJob' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTrainingJobLabels' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/labels',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TrainingJobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
        'GetTrainingJob' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTrainingJobErrorInfo' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/errorinfo',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTrainingJobLatestMetrics' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/latestmetrics',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTrainingJobs' => [
            'path' => '/api/v1/trainingjobs',
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
                    'name' => 'WorkspaceId',
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
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
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
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'GmtModifiedTime',
                            'GmtCreateTime',
                            'TrainingJobName',
                            'AlgorithmName',
                            'Status',
                        ],
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'desc',
                            'asc',
                        ],
                    ],
                ],
                [
                    'name' => 'TrainingJobName',
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
                    'name' => 'TrainingJobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
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
                    'name' => 'AlgorithmProvider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlgorithmName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IsTempAlgo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTrainingJobEvents' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/events',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
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
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '2000',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTrainingJobInstanceEvents' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/instances/{InstanceId}/events',
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
                    'name' => 'TrainingJobId',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '2000',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTrainingJobInstanceMetrics' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/instancemetrics',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTrainingJobLogs' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/logs',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'WorkerId',
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
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '2000',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
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
            ],
        ],
        'ListTrainingJobMetrics' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/metrics',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601',
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
            ],
        ],
        'ListTrainingJobOutputModels' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/outputmodels',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopTrainingJob' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/stop',
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
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateTrainingJobLabels' => [
            'path' => '/api/v1/trainingjobs/{TrainingJobId}/labels',
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
                            'Labels' => [
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
                [
                    'name' => 'TrainingJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateQuota' => [
            'path' => '/api/v1/quotas',
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
                            'QuotaName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ParentQuotaId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'AllocateStrategy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Min' => [
                                '$ref' => '#/components/schemas/ResourceSpec',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'QuotaConfig' => [
                                '$ref' => '#/components/schemas/QuotaConfig',
                                'required' => false,
                            ],
                            'QueueStrategy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ClusterSpec' => [
                                '$ref' => '#/components/schemas/ClusterSpec',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListQuotas' => [
            'path' => '/api/v1/quotas/',
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
                    'name' => 'QuotaName',
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
                    'name' => 'LayoutMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ParentQuotaId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QuotaIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkspaceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Statuses',
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
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkspaceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HasResource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Versions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetQuota' => [
            'path' => '/api/v1/quotas/{QuotaId}',
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
                    'name' => 'QuotaId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WithNodeMeta',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateQuota' => [
            'path' => '/api/v1/quotas/{QuotaId}',
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
                    'name' => 'QuotaId',
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
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'QueueStrategy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'QuotaConfig' => [
                                '$ref' => '#/components/schemas/QuotaConfig',
                                'required' => false,
                            ],
                            'QuotaName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ScaleQuota' => [
            'path' => '/api/v1/quotas/{QuotaId}/action/scale',
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
                    'name' => 'QuotaId',
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
                            'ResourceGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Min' => [
                                '$ref' => '#/components/schemas/ResourceSpec',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteQuota' => [
            'path' => '/api/v1/quotas/{QuotaId}',
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
                    'name' => 'QuotaId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListQuotaWorkloads' => [
            'path' => '/api/v1/quotas/{QuotaId}/workloads',
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
                    'name' => 'QuotaId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'WorkspaceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkloadType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkloadIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BeforeWorkloadId',
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
                        'enum' => [
                            'asc',
                            'desc',
                        ],
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
                    'name' => 'ShowOwn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubQuotaIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkloadCreatedTimeRange',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRangeFilter',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkloadStatuses',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GmtPositionModifiedTimeRange',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRangeFilter',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GmtEnqueuedTimeRange',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRangeFilter',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GmtDequeuedTimeRange',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRangeFilter',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WithHistoricalData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
            'path' => '/api/v1/tags',
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
            ],
        ],
        'TagResources' => [
            'path' => '/api/v1/tags',
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
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceId' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
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
                ],
            ],
        ],
        'UntagResources' => [
            'path' => '/api/v1/tags',
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
            'produces' => [
                'application/json',
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
        'ListNodes' => [
            'path' => '/api/v1/nodes',
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
                    'name' => 'ResourceGroupIds',
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
                    'name' => 'NodeTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AcceleratorType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GPUType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeStatuses',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderStatuses',
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
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeNames',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HyperNode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CliqueID',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FilterByQuotaId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FilterByResourceGroupIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MachineGroupIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ReasonCodes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HyperZone',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AvailabilityZone',
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
                    'name' => 'OrderInstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'GetSpotPriceHistory' => [
            'path' => '/api/v1/spots/{InstanceType}/pricehistory',
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
                    'name' => 'InstanceType',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SpotDuration',
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
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'pai.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'pai.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'pai.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'pai.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'pai.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'pai.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'pai.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'pai.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'pai.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'pai.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'pai.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'pai.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'pai.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'pai.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'pai.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'pai.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];