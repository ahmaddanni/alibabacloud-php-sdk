<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Emr',
        'version' => '2021-03-20',
    ],
    'components' => [
        'schemas' => [
            'AckConfig' => [
                'type' => 'object',
                'properties' => [
                    'AckInstanceId' => [
                        'type' => 'string',
                    ],
                    'NodeSelectors' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'Tolerations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Toleration',
                        ],
                    ],
                    'Namespace' => [
                        'type' => 'string',
                    ],
                    'RequestCpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'RequestMemory' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'LimitCpu' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'LimitMemory' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'DataDiskStorageClass' => [
                        'type' => 'string',
                    ],
                    'DataDiskSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CustomLabels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'CustomAnnotations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'MountHostCgroup' => [
                        'type' => 'boolean',
                    ],
                    'NodeAffinity' => [
                        'type' => 'string',
                    ],
                    'PodAntiAffinity' => [
                        'type' => 'string',
                    ],
                    'PodAffinity' => [
                        'type' => 'string',
                    ],
                    'PreStartCommand' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Pvcs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'DataDiskStorageClass' => [
                                    'type' => 'string',
                                ],
                                'DataDiskSize' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'Path' => [
                                    'type' => 'string',
                                ],
                                'Name' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'Volumes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Path' => [
                                    'type' => 'string',
                                ],
                                'Type' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'VolumeMounts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Path' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'AckNode' => [
                'type' => 'object',
                'properties' => [
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'NodeSelector' => [
                        '$ref' => '#/components/schemas/AckNodeSelector',
                    ],
                ],
            ],
            'AckNodePool' => [
                'type' => 'object',
                'properties' => [
                    'NodePoolId' => [
                        'type' => 'string',
                    ],
                    'NodeSelector' => [
                        '$ref' => '#/components/schemas/AckNodeSelector',
                    ],
                ],
            ],
            'AckNodeSelector' => [
                'type' => 'object',
                'properties' => [
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
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
                    ],
                    'Taints' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'Value' => [
                                    'type' => 'string',
                                ],
                                'Effect' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'AdviseSummary' => [
                'type' => 'object',
                'properties' => [
                    'VcoreUtilizationRate' => [
                        '$ref' => '#/components/schemas/DoubleMetric',
                    ],
                    'MemoryUtilizationRate' => [
                        '$ref' => '#/components/schemas/DoubleMetric',
                    ],
                ],
            ],
            'ApiTemplate' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'TemplateName' => [
                        'type' => 'string',
                    ],
                    'ApiName' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Application' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ApplicationConfig' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ConfigFileName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ConfigItemKey' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ConfigItemValue' => [
                        'type' => 'string',
                    ],
                    'ConfigScope' => [
                        'type' => 'string',
                    ],
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ApplicationConfigFile' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ConfigFileName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ApplicationConfigParam' => [
                'type' => 'object',
                'properties' => [
                    'ConfigFileName' => [
                        'type' => 'string',
                    ],
                    'ConfigItemKey' => [
                        'type' => 'string',
                    ],
                    'ConfigItemValue' => [
                        'type' => 'string',
                    ],
                    'ConfigItemDescription' => [
                        'type' => 'string',
                    ],
                    'ConfigScope' => [
                        'type' => 'string',
                    ],
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'ConfigAction' => [
                        'type' => 'string',
                    ],
                    'EffectiveType' => [
                        'type' => 'string',
                    ],
                    'EffectiveActions' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ApplicationConfigurationFile' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ConfigFileName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ConfigFilePath' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ConfigFileFormat' => [
                        'type' => 'string',
                    ],
                    'ConfigFileLink' => [
                        'type' => 'string',
                    ],
                    'ConfigFileOwner' => [
                        'type' => 'string',
                    ],
                    'ConfigFileGroup' => [
                        'type' => 'string',
                    ],
                    'ConfigFileMode' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Attribute' => [
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
            'AutoRenewInstance' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AutoRenew' => [
                        'type' => 'boolean',
                    ],
                    'AutoRenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AutoRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                    'EmrAutoRenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'EmrAutoRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AutoRenewInstanceParam' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'AutoRenewDuration' => [
                        'type' => 'string',
                    ],
                    'AutoRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                    'AutoRenew' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AutoScalingConstraints' => [
                'type' => 'object',
                'properties' => [
                    'SupportRuleTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'SupportMetrics' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'SupportMetricTags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'MetricName' => [
                                    'type' => 'string',
                                ],
                                'Tags' => [
                                    'type' => 'array',
                                    'items' => [
                                        '$ref' => '#/components/schemas/Tag',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'MaxAdjustmentValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MaxByLoadRuleCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MaxByTimeRuleCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AutoScalingMetricUnits' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/MetricUnitValue',
                        ],
                    ],
                    'DefaultMetricTriggeredRules' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingRule',
                        ],
                    ],
                ],
            ],
            'AutoScalingPolicy' => [
                'type' => 'object',
                'properties' => [
                    'ScalingRules' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingRule',
                            'required' => false,
                        ],
                    ],
                    'Constraints' => [
                        'type' => 'object',
                        'properties' => [
                            'MaxCapacity' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'MinCapacity' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'ByLoadScalingRule' => [
                'type' => 'object',
                'properties' => [
                    'MetricName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Statistics' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ComparisonOperator' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'TimeWindow' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'Threshold' => [
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                    ],
                    'EvaluationCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'CoolDownInterval' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ByLoadScalingRuleSpec' => [
                'type' => 'object',
                'properties' => [
                    'MetricName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Statistics' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ComparisonOperator' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'TimeWindow' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'Threshold' => [
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                    ],
                    'EvaluationCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
            'ByTimeScalingRule' => [
                'type' => 'object',
                'properties' => [
                    'LaunchTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LaunchExpirationTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RecurrenceType' => [
                        'type' => 'string',
                    ],
                    'RecurrenceValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ByTimeScalingRuleSpec' => [
                'type' => 'object',
                'properties' => [
                    'LaunchTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RecurrenceType' => [
                        'type' => 'string',
                    ],
                    'RecurrenceValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ClickhouseConf' => [
                'type' => 'object',
                'properties' => [
                    'InitialReplica' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'InitialShard' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'NewNodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ResizeType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Cluster' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'type' => 'string',
                    ],
                    'ClusterType' => [
                        'type' => 'string',
                    ],
                    'ClusterState' => [
                        'type' => 'string',
                    ],
                    'StateChangeReason' => [
                        '$ref' => '#/components/schemas/ClusterStateChangeReason',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'SubscriptionConfig' => [
                        '$ref' => '#/components/schemas/SubscriptionConfig',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ReadyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExpireTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ReleaseVersion' => [
                        'type' => 'string',
                    ],
                    'DeployMode' => [
                        'type' => 'string',
                    ],
                    'SecurityMode' => [
                        'type' => 'string',
                    ],
                    'NodeAttributes' => [
                        '$ref' => '#/components/schemas/NodeAttributes',
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'EmrDefaultRole' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'DeletionProtection' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ClusterScript' => [
                'type' => 'object',
                'properties' => [
                    'ScriptName' => [
                        'type' => 'string',
                    ],
                    'ScriptPath' => [
                        'type' => 'string',
                    ],
                    'ScriptArgs' => [
                        'type' => 'string',
                    ],
                    'Priority' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'NodeSelect' => [
                        '$ref' => '#/components/schemas/NodeSelector',
                    ],
                    'ExecutionMoment' => [
                        'type' => 'string',
                    ],
                    'ExecutionFailStrategy' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ClusterStateChangeReason' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ClusterSummary' => [
                'type' => 'object',
                'properties' => [
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'type' => 'string',
                    ],
                    'ClusterType' => [
                        'type' => 'string',
                    ],
                    'ClusterState' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ReadyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExpireTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ReleaseVersion' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'StateChangeReason' => [
                        '$ref' => '#/components/schemas/ClusterStateChangeReason',
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'EmrDefaultRole' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'DeletionProtection' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CollationTimeZone' => [
                'type' => 'object',
                'properties' => [
                    'TimeZone' => [
                        'type' => 'string',
                    ],
                    'CurrentTimeOffset' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ComponentInstanceSelector' => [
                'type' => 'object',
                'properties' => [
                    'ActionScope' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'RunActionScope' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ApplicationName' => [
                        'type' => 'string',
                    ],
                    'Components' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ApplicationName' => [
                                    'type' => 'string',
                                ],
                                'ComponentName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'ComponentInstances' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ApplicationName' => [
                                    'type' => 'string',
                                ],
                                'ComponentName' => [
                                    'type' => 'string',
                                ],
                                'NodeId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'ComponentLayout' => [
                'type' => 'object',
                'properties' => [
                    'NodeSelector' => [
                        'type' => 'object',
                        'properties' => [
                            'NodeSelectType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'NodeStartIndex' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'NodeEndIndex' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'NodeNames' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'NodeGroupId' => [
                                'type' => 'string',
                            ],
                            'NodeGroupTypes' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'NodeGroupIndex' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'NodeGroupName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ApplicationName' => [
                        'type' => 'string',
                    ],
                    'ComponentName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConfigEffectActions' => [
                'type' => 'object',
                'properties' => [
                    'ConfigEffectAction' => [
                        'type' => 'string',
                    ],
                    'ConfigFiles' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ConvertNodeGroup' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'PaymentDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConvertNodeGroupParam' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Subscription',
                        ],
                    ],
                    'PaymentDuration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CostInstanceType' => [
                'type' => 'object',
                'properties' => [
                    'SystemDisk' => [
                        '$ref' => '#/components/schemas/SystemDisk',
                    ],
                    'DataDisks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataDisk',
                        ],
                    ],
                    'Memory' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Cpu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CostNodeGroupConfig' => [
                'type' => 'object',
                'properties' => [
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MinimalNodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'NodeGroupType' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'InstanceTypes' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CostInstanceType',
                        ],
                    ],
                    'MaximalNodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'CostOptimizedConfig' => [
                'type' => 'object',
                'properties' => [
                    'OnDemandBaseCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'OnDemandPercentageAboveBaseCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'SpotInstancePools' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
            'CreateNodeGroupConfig' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'SubscriptionConfig' => [
                        '$ref' => '#/components/schemas/SubscriptionConfig',
                    ],
                    'SpotStrategy' => [
                        'type' => 'string',
                    ],
                    'WithPublicIp' => [
                        'type' => 'boolean',
                    ],
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SystemDisk' => [
                        '$ref' => '#/components/schemas/SystemDisk',
                    ],
                    'GracefulShutdown' => [
                        'type' => 'boolean',
                    ],
                    'SpotInstanceRemedy' => [
                        'type' => 'boolean',
                    ],
                    'CompensateWithOnDemand' => [
                        'type' => 'boolean',
                    ],
                    'NodeResizeStrategy' => [
                        'type' => 'string',
                    ],
                    'CostOptimizedConfig' => [
                        '$ref' => '#/components/schemas/CostOptimizedConfig',
                    ],
                    'DeploymentSetStrategy' => [
                        'type' => 'string',
                    ],
                    'AutoScalingPolicy' => [
                        '$ref' => '#/components/schemas/AutoScalingPolicy',
                    ],
                    'PrivatePoolOptions' => [
                        '$ref' => '#/components/schemas/PrivatePoolOptions',
                    ],
                    'SpotBidPrices' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'InstanceType' => [
                                    'type' => 'string',
                                ],
                                'BidPrice' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                            ],
                        ],
                        'maxItems' => 100,
                    ],
                    'VSwitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 20,
                    ],
                    'AdditionalSecurityGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 5,
                    ],
                    'InstanceTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 100,
                    ],
                    'DataDisks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataDisk',
                        ],
                        'maxItems' => 1,
                    ],
                    'ComponentTags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CreateNodeGroupParam' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'NodeGroupType' => [
                        'type' => 'string',
                    ],
                    'NodeRamRole' => [
                        'type' => 'string',
                    ],
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ZoneId' => [
                        'type' => 'string',
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'WithPublicIp' => [
                        'type' => 'boolean',
                    ],
                    'VSwitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'NodeKeyPairName' => [
                        'type' => 'string',
                    ],
                    'NodeRootPassword' => [
                        'type' => 'string',
                    ],
                    'InstanceTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'DataDisks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DiskInfo',
                        ],
                    ],
                    'SystemDisk' => [
                        '$ref' => '#/components/schemas/SystemDiskParam',
                    ],
                    'SpotStrategy' => [
                        'type' => 'string',
                        'enum' => [
                            'NoSpot',
                            'SpotAsPriceGo',
                            'SpotWithPriceLimit',
                        ],
                    ],
                    'PaymentDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                    ],
                    'AutoRenew' => [
                        'type' => 'boolean',
                    ],
                    'AutoRenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AutoRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DRPlanConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ClusterType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ReleaseVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DeployMode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'LogCollectStrategy' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ClusterName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DeletionProtection' => [
                        'type' => 'boolean',
                    ],
                    'SecurityMode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'NodeAttributes' => [
                        '$ref' => '#/components/schemas/NodeAttributes',
                        'required' => true,
                    ],
                    'ManagedScalingPolicy' => [
                        'type' => 'object',
                        'properties' => [
                            'Constraints' => [
                                '$ref' => '#/components/schemas/ManagedScalingConstraints',
                            ],
                        ],
                    ],
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'SubscriptionConfig' => [
                        '$ref' => '#/components/schemas/SubscriptionConfig',
                    ],
                    'BootstrapScripts' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Script',
                        ],
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'NodeGroups' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/NodeGroupConfig',
                        ],
                    ],
                    'Applications' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Application',
                        ],
                    ],
                    'ApplicationConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ApplicationConfig',
                        ],
                    ],
                ],
            ],
            'DRPlanConfigurationDetail' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ClusterType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ReleaseVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DeployMode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'LogCollectStrategy' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ClusterName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'DeletionProtection' => [
                        'type' => 'boolean',
                    ],
                    'MetaStoreType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'SecurityMode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'NodeAttributes' => [
                        '$ref' => '#/components/schemas/NodeAttributes',
                        'required' => true,
                    ],
                    'ManagedScalingPolicy' => [
                        'type' => 'object',
                        'properties' => [
                            'Constraints' => [
                                '$ref' => '#/components/schemas/ManagedScalingConstraints',
                            ],
                        ],
                    ],
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'SubscriptionConfig' => [
                        '$ref' => '#/components/schemas/SubscriptionConfig',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'BootstrapScripts' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Script',
                        ],
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'NodeGroups' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/NodeGroupConfig',
                        ],
                    ],
                    'Applications' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Application',
                        ],
                    ],
                    'ApplicationConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ApplicationConfig',
                        ],
                    ],
                    'ScalingPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingPolicy',
                        ],
                    ],
                    'ScalingTimeZone' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DataDisk' => [
                'type' => 'object',
                'properties' => [
                    'Category' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'PerformanceLevel' => [
                        'type' => 'string',
                    ],
                    'Count' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DecreaseNodeGroupParam' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ReleaseInstanceIds' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'DeploymentLayout' => [
                'type' => 'object',
                'properties' => [
                    'ApplicationName' => [
                        'type' => 'string',
                    ],
                    'ComponentName' => [
                        'type' => 'string',
                    ],
                    'NodeSelector' => [
                        '$ref' => '#/components/schemas/NodeSelector',
                    ],
                ],
            ],
            'DeploymentSetConstraints' => [
                'type' => 'object',
                'properties' => [
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'DefaultValue' => [
                        'type' => 'string',
                    ],
                    'ReplacementStrategy' => [
                        '$ref' => '#/components/schemas/ReplacementStrategy',
                    ],
                    'EnableState' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Disk' => [
                'type' => 'object',
                'properties' => [
                    'Category' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PerformanceLevel' => [
                        'type' => 'string',
                    ],
                    'Count' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DiskConstraints' => [
                'type' => 'object',
                'properties' => [
                    'Categories' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'SizeConstraint' => [
                        '$ref' => '#/components/schemas/ValueConstraints',
                    ],
                    'CountConstraint' => [
                        '$ref' => '#/components/schemas/ValueConstraints',
                    ],
                ],
            ],
            'DiskInfo' => [
                'type' => 'object',
                'properties' => [
                    'Category' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PerformanceLevel' => [
                        'type' => 'string',
                    ],
                    'Count' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DiskSize' => [
                'type' => 'object',
                'properties' => [
                    'Category' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DoubleMetric' => [
                'type' => 'object',
                'properties' => [
                    'Value' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Unit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FailedReason' => [
                'type' => 'object',
                'properties' => [
                    'ErrorCode' => [
                        'type' => 'string',
                    ],
                    'ErrorMessage' => [
                        'type' => 'string',
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HealthSummary' => [
                'type' => 'object',
                'properties' => [
                    'StoppedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'BadCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'WarningCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GoodCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NoneCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'UnknownCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IncreaseNodeGroup' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'PaymentDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                    ],
                    'VSwitchId' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'IncreaseNodeGroupParam' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'VSwitchId' => [
                        'type' => 'string',
                    ],
                    'PaymentDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceCategory' => [
                'type' => 'object',
                'properties' => [
                    'Keys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'DefaultValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InstanceType' => [
                'type' => 'object',
                'properties' => [
                    'InstanceTypeFamily' => [
                        'type' => 'string',
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'Optimized' => [
                        'type' => 'boolean',
                    ],
                    'CpuCore' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'InstanceCategory' => [
                        'type' => 'string',
                    ],
                    'CpuArchitecture' => [
                        'type' => 'string',
                    ],
                    'LocalStorageCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LocalStorageAmount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ModifyType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'IntegerMetric' => [
                'type' => 'object',
                'properties' => [
                    'Value' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Unit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'KeyValue' => [
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
            'ListApiTemplatesDTO' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtModified' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtCreate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'OperatorId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'TemplateName' => [
                        'type' => 'string',
                    ],
                    'ResourceGroupId' => [
                        'type' => 'string',
                    ],
                    'ApiName' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ManagedScalingConstraints' => [
                'type' => 'object',
                'properties' => [
                    'MaxCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MinCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MaxOnDemandCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'MetaStoreConf' => [
                'type' => 'object',
                'properties' => [
                    'DbUrl' => [
                        'type' => 'string',
                    ],
                    'DbUserName' => [
                        'type' => 'string',
                    ],
                    'DbPassword' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetricUnitValue' => [
                'type' => 'object',
                'properties' => [
                    'MetricName' => [
                        'type' => 'string',
                    ],
                    'MetricUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetricsTrigger' => [
                'type' => 'object',
                'properties' => [
                    'TimeWindow' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'EvaluationCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'CoolDownInterval' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'TimeConstraints' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TimeConstraint',
                        ],
                    ],
                    'ConditionLogicOperator' => [
                        'type' => 'string',
                    ],
                    'Conditions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TriggerCondition',
                        ],
                    ],
                ],
            ],
            'Node' => [
                'type' => 'object',
                'properties' => [
                    'ZoneId' => [
                        'type' => 'string',
                    ],
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'NodeGroupType' => [
                        'type' => 'string',
                    ],
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'NodeName' => [
                        'type' => 'string',
                    ],
                    'PublicIp' => [
                        'type' => 'string',
                    ],
                    'PrivateIp' => [
                        'type' => 'string',
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'NodeState' => [
                        'type' => 'string',
                    ],
                    'MaintenanceStatus' => [
                        'type' => 'string',
                    ],
                    'ExpireTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AutoRenew' => [
                        'type' => 'boolean',
                    ],
                    'AutoRenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AutoRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'NodeAttributes' => [
                'type' => 'object',
                'properties' => [
                    'VpcId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ZoneId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'SecurityGroupId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'RamRole' => [
                        'type' => 'string',
                    ],
                    'KeyPairName' => [
                        'type' => 'string',
                    ],
                    'MasterRootPassword' => [
                        'type' => 'string',
                    ],
                    'SystemDiskEncrypted' => [
                        'type' => 'boolean',
                    ],
                    'SystemDiskKMSKeyId' => [
                        'type' => 'string',
                    ],
                    'DataDiskEncrypted' => [
                        'type' => 'boolean',
                    ],
                    'DataDiskKMSKeyId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeCountConstraint' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                    'Min' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Max' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'NodeGroup' => [
                'type' => 'object',
                'properties' => [
                    'ZoneId' => [
                        'type' => 'string',
                    ],
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'NodeGroupType' => [
                        'type' => 'string',
                    ],
                    'RunningNodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'InstanceTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'DataDisks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataDisk',
                        ],
                    ],
                    'SystemDisk' => [
                        '$ref' => '#/components/schemas/SystemDisk',
                    ],
                    'NodeGroupState' => [
                        'type' => 'string',
                    ],
                    'AdditionalSecurityGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'WithPublicIp' => [
                        'type' => 'boolean',
                    ],
                    'VSwitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'SpotStrategy' => [
                        'type' => 'string',
                    ],
                    'SpotBidPrices' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SpotBidPrice',
                        ],
                    ],
                    'StateChangeReason' => [
                        '$ref' => '#/components/schemas/NodeGroupStateChangeReason',
                    ],
                    'GracefulShutdown' => [
                        'type' => 'boolean',
                    ],
                    'SpotInstanceRemedy' => [
                        'type' => 'boolean',
                    ],
                    'CompensateWithOnDemand' => [
                        'type' => 'boolean',
                    ],
                    'NodeResizeStrategy' => [
                        'type' => 'string',
                    ],
                    'CostOptimizedConfig' => [
                        '$ref' => '#/components/schemas/CostOptimizedConfig',
                    ],
                    'DeploymentSetStrategy' => [
                        'type' => 'string',
                    ],
                    'PrivatePoolOptions' => [
                        '$ref' => '#/components/schemas/PrivatePoolOptions',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeGroupConfig' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'SubscriptionConfig' => [
                        '$ref' => '#/components/schemas/SubscriptionConfig',
                    ],
                    'SpotStrategy' => [
                        'type' => 'string',
                    ],
                    'SpotBidPrices' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SpotBidPrice',
                        ],
                        'maxItems' => 100,
                    ],
                    'VSwitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 20,
                    ],
                    'WithPublicIp' => [
                        'type' => 'boolean',
                    ],
                    'AdditionalSecurityGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 5,
                    ],
                    'InstanceTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 100,
                    ],
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SystemDisk' => [
                        '$ref' => '#/components/schemas/SystemDisk',
                    ],
                    'DataDisks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataDisk',
                        ],
                        'maxItems' => 1,
                    ],
                    'GracefulShutdown' => [
                        'type' => 'boolean',
                    ],
                    'SpotInstanceRemedy' => [
                        'type' => 'boolean',
                    ],
                    'CompensateWithOnDemand' => [
                        'type' => 'boolean',
                    ],
                    'NodeResizeStrategy' => [
                        'type' => 'string',
                    ],
                    'CostOptimizedConfig' => [
                        '$ref' => '#/components/schemas/CostOptimizedConfig',
                    ],
                    'DeploymentSetStrategy' => [
                        'type' => 'string',
                    ],
                    'ComponentTags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'AutoScalingPolicy' => [
                        '$ref' => '#/components/schemas/AutoScalingPolicy',
                    ],
                    'PrivatePoolOptions' => [
                        '$ref' => '#/components/schemas/PrivatePoolOptions',
                    ],
                ],
            ],
            'NodeGroupParam' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'NodeGroupIndex' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'NodeGroupType' => [
                        'type' => 'string',
                    ],
                    'NodeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ZoneId' => [
                        'type' => 'string',
                    ],
                    'PaymentType' => [
                        'type' => 'string',
                    ],
                    'PaymentDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                    ],
                    'AutoPayOrder' => [
                        'type' => 'boolean',
                    ],
                    'AutoRenew' => [
                        'type' => 'boolean',
                    ],
                    'AutoRenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'AutoRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'VSwitchIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'InstanceTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'DataDisks' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DiskInfo',
                        ],
                    ],
                    'SystemDisk' => [
                        '$ref' => '#/components/schemas/SystemDiskParam',
                    ],
                ],
            ],
            'NodeGroupStateChangeReason' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NodeSelector' => [
                'type' => 'object',
                'properties' => [
                    'NodeSelectType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'NodeNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'NodeGroupId' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'NodeGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'NodeGroupTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'maxItems' => 10,
                    ],
                    'NodeGroupName' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'NodeGroupNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'OSUser' => [
                'type' => 'object',
                'properties' => [
                    'Group' => [
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
                ],
            ],
            'OnKubeClusterResource' => [
                'type' => 'object',
                'properties' => [
                    'Cpu' => [
                        'type' => 'string',
                    ],
                    'Memory' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Operation' => [
                'type' => 'object',
                'properties' => [
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'OperationId' => [
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
                    'OperationType' => [
                        'type' => 'string',
                    ],
                    'OperationState' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'StateChangeReason' => [
                        '$ref' => '#/components/schemas/OperationStateChangeReason',
                    ],
                ],
            ],
            'OperationData' => [
                'type' => 'object',
                'properties' => [
                    'actualDeliveredAmounts' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'toBeDeliveredAmounts' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'OperationStateChangeReason' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Order' => [
                'type' => 'object',
                'properties' => [
                    'OrderId' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Page' => [
                'type' => 'object',
                'properties' => [
                    'TotalCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NextToken' => [
                        'type' => 'string',
                    ],
                    'MaxResults' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Items' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Pod' => [
                'type' => 'object',
                'properties' => [
                    'PodName' => [
                        'type' => 'string',
                    ],
                    'PodStatus' => [
                        'type' => 'string',
                    ],
                    'Reason' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PriceInfo' => [
                'type' => 'object',
                'properties' => [
                    'PayType' => [
                        'type' => 'string',
                    ],
                    'OriginalPrice' => [
                        'type' => 'string',
                    ],
                    'SpotOriginalPrice' => [
                        'type' => 'string',
                    ],
                    'DiscountPrice' => [
                        'type' => 'string',
                    ],
                    'TaxPrice' => [
                        'type' => 'string',
                    ],
                    'Currency' => [
                        'type' => 'string',
                    ],
                    'SpotPrice' => [
                        'type' => 'string',
                    ],
                    'TradePrice' => [
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'SpotInstanceTypeOriginalPrice' => [
                        'type' => 'string',
                    ],
                    'SpotInstanceTypePrice' => [
                        'type' => 'string',
                    ],
                    'PromotionResults' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PromotionInfo',
                        ],
                    ],
                ],
            ],
            'PrivatePoolOptions' => [
                'type' => 'object',
                'properties' => [
                    'PrivatePoolIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'MatchCriteria' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Promotion' => [
                'type' => 'object',
                'properties' => [
                    'PromotionName' => [
                        'type' => 'string',
                    ],
                    'PromotionDesc' => [
                        'type' => 'string',
                    ],
                    'PromotionOptionNo' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'PromotionOptionCode' => [
                        'type' => 'string',
                    ],
                    'ProductCode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PromotionInfo' => [
                'type' => 'object',
                'properties' => [
                    'PromotionOptionCode' => [
                        'type' => 'string',
                    ],
                    'PromotionOptionNo' => [
                        'type' => 'string',
                    ],
                    'PromotionName' => [
                        'type' => 'string',
                    ],
                    'PromotionDesc' => [
                        'type' => 'string',
                    ],
                    'CanPromFee' => [
                        'type' => 'string',
                    ],
                    'IsSelected' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PromotionParam' => [
                'type' => 'object',
                'properties' => [
                    'PromotionOptionNo' => [
                        'type' => 'string',
                    ],
                    'PromotionOptionCode' => [
                        'type' => 'string',
                    ],
                    'ProductCode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RecommendScalingRule' => [
                'type' => 'object',
                'properties' => [
                    'RuleName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'TriggerType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ActivityType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AdjustmentValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'TimeTrigger' => [
                        '$ref' => '#/components/schemas/TimeTrigger',
                    ],
                    'MetricsTrigger' => [
                        '$ref' => '#/components/schemas/MetricsTrigger',
                    ],
                    'MaxSave' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RenewInstance' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'RenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RenewDurationUnit' => [
                        'type' => 'string',
                    ],
                    'EmrRenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'EmrRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RenewInstanceParam' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'RenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RenewDurationUnit' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReplacementStrategy' => [
                'type' => 'object',
                'properties' => [
                    'InstanceCategories' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/InstanceCategory',
                        ],
                    ],
                ],
            ],
            'RequestTag' => [
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
            'ResizeDiskNodeGroupParam' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'DataDiskCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RollingRestart' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ResourceSummary' => [
                'type' => 'object',
                'properties' => [
                    'VcoreUtilizationRate' => [
                        '$ref' => '#/components/schemas/DoubleMetric',
                    ],
                    'OriginalTotalVcore' => [
                        '$ref' => '#/components/schemas/IntegerMetric',
                    ],
                    'InefficientTaskRate' => [
                        '$ref' => '#/components/schemas/DoubleMetric',
                    ],
                    'MemoryUtilizationRate' => [
                        '$ref' => '#/components/schemas/DoubleMetric',
                    ],
                ],
            ],
            'ScalingActivity' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
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
                    'ExpectNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'InstanceIds' => [
                        'type' => 'string',
                    ],
                    'TotalCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Cause' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Transition' => [
                        'type' => 'string',
                    ],
                    'ScalingRuleName' => [
                        'type' => 'string',
                    ],
                    'EssScalingRuleId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ScalingGroupId' => [
                        'type' => 'string',
                    ],
                    'HostGroupName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScalingActivityResult' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScalingActivityResultDTO' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScalingAnalyzeResult' => [
                'type' => 'object',
                'properties' => [
                    'ActualUsage' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'IdealUsage' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'ReservedCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ReleaseCores' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ScalingAnalyzeTimeRange' => [
                'type' => 'object',
                'properties' => [
                    'StartTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScalingConstraints' => [
                'type' => 'object',
                'properties' => [
                    'MaxCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MinCapacity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ScalingGroupConfig' => [
                'type' => 'object',
                'properties' => [
                    'SpotStrategy' => [
                        'type' => 'string',
                    ],
                    'InstanceTypeList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'InstanceType' => [
                                    'type' => 'string',
                                ],
                                'SpotPriceLimit' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                            ],
                        ],
                    ],
                    'SysDiskCategory' => [
                        'type' => 'string',
                    ],
                    'SysDiskSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DataDiskCategory' => [
                        'type' => 'string',
                    ],
                    'DataDiskSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DataDiskCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ScalingMaxSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ScalingMinSize' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DefaultCoolDownTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'NodeOfflinePolicy' => [
                        'type' => 'object',
                        'properties' => [
                            'Mode' => [
                                'type' => 'string',
                            ],
                            'TimeoutMs' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'TriggerMode' => [
                        'type' => 'string',
                    ],
                    'MultiAvailablePolicy' => [
                        'type' => 'object',
                        'properties' => [
                            'PolicyType' => [
                                'type' => 'string',
                            ],
                            'PolicyParam' => [
                                'type' => 'object',
                                'properties' => [
                                    'OnDemandBaseCapacity' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'OnDemandPercentageAboveBaseCapacity' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'SpotInstanceRemedy' => [
                                        'type' => 'boolean',
                                    ],
                                    'SpotInstancePools' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'PrivatePoolOptions' => [
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                            ],
                            'MatchCriteria' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'ScalingPolicy' => [
                'type' => 'object',
                'properties' => [
                    'ScalingRules' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingRule',
                        ],
                    ],
                    'ScalingPolicyId' => [
                        'type' => 'string',
                    ],
                    'Constraints' => [
                        '$ref' => '#/components/schemas/ManagedScalingConstraints',
                    ],
                    'NodeGroupName' => [
                        'type' => 'string',
                    ],
                    'ClusterId' => [
                        'type' => 'string',
                    ],
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'ScalingPolicyType' => [
                        'type' => 'string',
                    ],
                    'Disabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ScalingRule' => [
                'type' => 'object',
                'properties' => [
                    'RuleName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'TriggerType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ActivityType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AdjustmentValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'TimeTrigger' => [
                        '$ref' => '#/components/schemas/TimeTrigger',
                    ],
                    'MetricsTrigger' => [
                        '$ref' => '#/components/schemas/MetricsTrigger',
                    ],
                    'MinAdjustmentValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ScalingRuleSpec' => [
                'type' => 'object',
                'properties' => [
                    'ScalingRuleName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ScalingRuleType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ScalingActivityType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AdjustmentValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'CoolDownInterval' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'ByTimeScalingRuleSpec' => [
                        'type' => 'object',
                        'properties' => [
                            'LaunchTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'EndTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'RecurrenceType' => [
                                'type' => 'string',
                            ],
                            'RecurrenceValue' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ByLoadScalingRuleSpec' => [
                        'type' => 'object',
                        'properties' => [
                            'MetricName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Statistics' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ComparisonOperator' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TimeWindow' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Threshold' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => true,
                            ],
                            'EvaluationCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'ScalingRuleV1' => [
                'type' => 'object',
                'properties' => [
                    'ScalingConfigBizId' => [
                        'type' => 'string',
                    ],
                    'RuleType' => [
                        'type' => 'string',
                    ],
                    'RuleName' => [
                        'type' => 'string',
                    ],
                    'CoolDownTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RuleParam' => [
                        'type' => 'object',
                        'properties' => [
                            'MetricName' => [
                                'type' => 'string',
                            ],
                            'Statistics' => [
                                'type' => 'string',
                            ],
                            'ComparisonOperator' => [
                                'type' => 'string',
                            ],
                            'Period' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Threshold' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'EvaluationCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'RecurrenceType' => [
                                'type' => 'string',
                            ],
                            'RecurrenceValue' => [
                                'type' => 'string',
                            ],
                            'RecurrenceEndTime' => [
                                'type' => 'string',
                            ],
                            'LaunchTime' => [
                                'type' => 'string',
                            ],
                            'LaunchExpirationTime' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'AdjustmentType' => [
                        'type' => 'string',
                    ],
                    'AdjustmentValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Script' => [
                'type' => 'object',
                'properties' => [
                    'ScriptName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ScriptPath' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ScriptArgs' => [
                        'type' => 'string',
                    ],
                    'Priority' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => true,
                    ],
                    'NodeSelector' => [
                        '$ref' => '#/components/schemas/NodeSelector',
                        'required' => true,
                    ],
                    'ExecutionMoment' => [
                        'type' => 'string',
                    ],
                    'ExecutionFailStrategy' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SpotBidPrice' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'BidPrice' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'SpotPriceLimit' => [
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'type' => 'string',
                    ],
                    'PriceLimit' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'StateChangeReason' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SubscriptionConfig' => [
                'type' => 'object',
                'properties' => [
                    'PaymentDurationUnit' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'PaymentDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'AutoRenew' => [
                        'type' => 'boolean',
                    ],
                    'AutoRenewDurationUnit' => [
                        'type' => 'string',
                    ],
                    'AutoRenewDuration' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'SystemDisk' => [
                'type' => 'object',
                'properties' => [
                    'Category' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'PerformanceLevel' => [
                        'type' => 'string',
                    ],
                    'Count' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'SystemDiskParam' => [
                'type' => 'object',
                'properties' => [
                    'Category' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PerformanceLevel' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Tag' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TagResource' => [
                'type' => 'object',
                'properties' => [
                    'TagKey' => [
                        'type' => 'string',
                    ],
                    'TagValue' => [
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'ResourceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TimeConstraint' => [
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
            'TimeRange' => [
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
            'TimeTrigger' => [
                'type' => 'object',
                'properties' => [
                    'LaunchTime' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'StartTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LaunchExpirationTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RecurrenceType' => [
                        'type' => 'string',
                    ],
                    'RecurrenceValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Toleration' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                    'Operator' => [
                        'type' => 'string',
                    ],
                    'Effect' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TriggerCondition' => [
                'type' => 'object',
                'properties' => [
                    'MetricName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'Statistics' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ComparisonOperator' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Threshold' => [
                        'type' => 'number',
                        'format' => 'double',
                        'required' => true,
                    ],
                ],
            ],
            'UpdateApplicationConfig' => [
                'type' => 'object',
                'properties' => [
                    'ConfigFileName' => [
                        'type' => 'string',
                    ],
                    'ConfigItemKey' => [
                        'type' => 'string',
                    ],
                    'ConfigItemValue' => [
                        'type' => 'string',
                    ],
                    'ConfigDescription' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateSpecNodeGroup' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'NewInstanceType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ModifyType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateSpecNodeGroupParam' => [
                'type' => 'object',
                'properties' => [
                    'NodeGroupId' => [
                        'type' => 'string',
                    ],
                    'NewInstanceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'User' => [
                'type' => 'object',
                'properties' => [
                    'UserId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'UserName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Password' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Group' => [
                        'type' => 'string',
                    ],
                    'UserType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UserParam' => [
                'type' => 'object',
                'properties' => [
                    'UserName' => [
                        'type' => 'string',
                    ],
                    'Password' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ValueConstraints' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Start' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Step' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'End' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                    'DefaultValue' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListReleaseVersions' => [
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
                    'name' => 'IaasType',
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
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListInstanceTypes' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IsModification',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ReleaseVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeployMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RunCluster' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubscriptionConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/SubscriptionConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ReleaseVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeployMode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityMode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Applications',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Application',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'ApplicationConfigs',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ApplicationConfig',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'NodeAttributes',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/NodeAttributes',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroups',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/NodeGroupConfig',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'BootstrapScripts',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Script',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
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
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'DeletionProtection',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Promotions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Promotion',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'CreateCluster' => [
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
                    'name' => 'ResourceGroupId',
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
                    'name' => 'SubscriptionConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/SubscriptionConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ReleaseVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeployMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SecurityMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Applications',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Application',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ApplicationConfigs',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ApplicationConfig',
                            'required' => false,
                        ],
                        'maxItems' => 1000,
                    ],
                ],
                [
                    'name' => 'NodeAttributes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/NodeAttributes',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroups',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/NodeGroupConfig',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'BootstrapScripts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Script',
                            'required' => false,
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ClientToken',
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
                    'name' => 'DeletionProtection',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCluster' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateClusterAttribute' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterName',
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
                    'name' => 'DeletionProtection',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListClusters' => [
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
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'cn-qingdao',
                            'cn-beijing',
                            'cn-zhangjiakou',
                            'cn-huhehaote',
                            'cn-hangzhou',
                            'cn-shanghai',
                            'cn-shenzhen',
                            'cn-chengdu',
                            'cn-hongkong',
                            'cn-wulanchabu',
                            'cn-heyuan-acdr-1',
                            'cn-qingdao-acdr-ut-1',
                            'ap-northeast-1',
                            'ap-southeast-1',
                            'ap-southeast-2',
                            'ap-southeast-3',
                            'ap-southeast-5',
                            'ap-south-1',
                            'us-east-1',
                            'us-west-1',
                            'me-east-1',
                            'me-central-1',
                            'eu-central-1',
                            'eu-west-1',
                            'cn-north-2-gov-1',
                            'cn-wulanchabu-acdr-1',
                            'cn-shanghai-cloudspe',
                            'na-south-1',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterName',
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
                [
                    'name' => 'ClusterIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ClusterTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ClusterStates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'PaymentTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'DeleteCluster' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetClusterCloneMeta' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateClusterAutoRenew' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterAutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterAutoRenewDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterAutoRenewDurationUnit',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RenewAllInstances',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoRenewInstances',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/AutoRenewInstance',
                            'required' => false,
                        ],
                        'maxItems' => 5000,
                    ],
                ],
            ],
        ],
        'CreateApiTemplate' => [
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
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
        'UpdateApiTemplate' => [
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
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListApiTemplates' => [
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
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateName',
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
        'GetApiTemplate' => [
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
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteApiTemplate' => [
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
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
        'RunApiTemplate' => [
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
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateNodeGroup' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroup',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/NodeGroupConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListNodeGroups' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NodeGroupNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NodeGroupTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NodeGroupStates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetNodeGroup' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'IncreaseNodes' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IncreaseNodeCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AutoPayOrder',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AutoRenew',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaymentDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'ApplicationConfigs',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ApplicationConfig',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'MinIncreaseNodeCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Promotions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Promotion',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'DecreaseNodes' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DecreaseNodeCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'BatchInterval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BatchSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListNodes' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'NodeIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NodeNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'PrivateIps',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'PublicIps',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'NodeStates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'PutAutoScalingPolicy' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingRules',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ScalingRule',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Constraints',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/ScalingConstraints',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutManagedScalingPolicy' => [
            'methods' => [
                'get',
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Constraints',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/ManagedScalingConstraints',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAutoScalingPolicy' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetManagedScalingPolicy' => [
            'methods' => [
                'get',
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveAutoScalingPolicy' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAutoScalingActivities' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScalingRuleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScalingActivityStates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'ScalingActivityType',
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
                [
                    'name' => 'ScalingPolicyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceChargeTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'enum' => [],
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'GetAutoScalingActivity' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScalingActivityId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListApplications' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
            ],
        ],
        'GetApplication' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RunApplicationAction' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ActionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ComponentInstanceSelector',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/ComponentInstanceSelector',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RollingExecute',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExecuteStrategy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BatchSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
            ],
        ],
        'ListApplicationConfigs' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigFileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigItemKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigItemValue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateApplicationConfigs' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RefreshConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigAction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigScope',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationConfigs',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/UpdateApplicationConfig',
                            'required' => false,
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
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListComponents' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ComponentNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ComponentStates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
            ],
        ],
        'ListComponentInstances' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NodeIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NodeNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ComponentNames',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ComponentStates',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetOperation' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OperationId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'JoinResourceGroup' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'TagResources' => [
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
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'UntagResources' => [
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
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'TagKeys',
                    'in' => 'query',
                    'style' => 'flat',
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
        'ListTagResources' => [
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
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'CreateScript' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScriptType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Scripts',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/Script',
                            'required' => false,
                        ],
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'TimeoutSecs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListScripts' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScriptType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScriptName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScriptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
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
        'UpdateScript' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScriptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScriptType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Script',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Script',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteScript' => [
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
                [
                    'APP' => [],
                ],
            ],
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScriptType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScriptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDoctorHiveDatabases' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatabaseNames',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'GetDoctorHiveDatabase' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDoctorHiveCluster' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDoctorHiveTables' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TableNames',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'GetDoctorHiveTable' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDoctorHDFSUGI' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                [
                    'name' => 'OrderType',
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
            ],
        ],
        'ListDoctorHBaseTables' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TableNames',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'ListDoctorHBaseRegionServers' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionServerHosts',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'GetDoctorHBaseTable' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDoctorHBaseRegionServer' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionServerHost',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDoctorHBaseRegion' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'HbaseRegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDoctorHBaseCluster' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDoctorHDFSDirectory' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DirPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDoctorJobsStats' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartRange',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'StartTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'EndTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'EndRange',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'StartTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'EndTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'GroupBy',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'ListDoctorReports' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDoctorReportComponentSummary' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ComponentType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDoctorJobs' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartRange',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'StartTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'EndTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'EndRange',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'StartTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'EndTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AppIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Users',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Queues',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Types',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'ListDoctorComputeSummary' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ComponentTypes',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'GetDoctorComputeSummary' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ComponentInfo',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ComponentType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ComponentName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDoctorJob' => [
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
                    'name' => 'ClusterId',
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
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDoctorApplications' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Users',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Queues',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'Types',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'OrderType',
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
            ],
        ],
        'ListDoctorHDFSDirectories' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DirPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderType',
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
            ],
        ],
        'GetDoctorHDFSCluster' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDoctorApplication' => [
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
                    'name' => 'ClusterId',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateUsers' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Users',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'UserName' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Password' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'DeleteUsers' => [
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
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserNames',
                    'in' => 'formData',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateUserAttribute' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Password',
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
            ],
        ],
        'ListUsers' => [
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
                    'name' => 'ClusterId',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserNames',
                    'in' => 'query',
                    'style' => 'flat',
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
        'ExportApplicationConfigs' => [
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
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationConfigFiles',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ApplicationConfigFile',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'FileFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExportMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'MODIFICATION',
                            'ALL',
                        ],
                    ],
                ],
                [
                    'name' => 'ConfigScope',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
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
                    'name' => 'NodeIds',
                    'in' => 'query',
                    'style' => 'flat',
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
    ],
    'endpoints' => [
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'emr.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'emr.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'emr.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'emr.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'emr.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'emr.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'emr.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'emr.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'emr.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'emr.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'emr.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'emr.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'emr.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'emr.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'emr.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'emr.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'emr.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'emr.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'emr.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'emr.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'emr.me-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan-acdr-1',
            'endpoint' => 'emr.cn-heyuan-acdr-1.aliyuncs.com',
        ],
    ],
];