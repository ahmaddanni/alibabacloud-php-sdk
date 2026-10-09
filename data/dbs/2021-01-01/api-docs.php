<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dbs',
        'version' => '2021-01-01',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ChangeResourceGroup' => [
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
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAdvancedPolicy' => [
            'methods' => [
                'post',
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDownload' => [
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BakSetType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BakSetId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DownloadPointInTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BakSetSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FormatType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetOssRegion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PrimaryKeyTypeOnly',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IsCluster',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AdminDatabase',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UseZstd',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'IsPhysical',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteSandboxInstance' => [
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
        'DescribeBackupDataList' => [
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
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SceneType',
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
                    'name' => 'BackupStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupMethod',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupScale',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceIsDeleted',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceRegion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DataSourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeBackupPolicy' => [
            'methods' => [
                'post',
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeCostInfoByDbsInstance' => [
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeDownloadBackupSetStorageInfo' => [
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'DescribeDownloadSupport' => [
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceName',
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
            ],
        ],
        'DescribeDownloadTask' => [
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                [
                    'name' => 'TaskType',
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
                    'name' => 'PageSize',
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
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderDirect',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderColumn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'DescribeSandboxBackupSets' => [
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BackupSetId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
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
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeSandboxInstances' => [
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'PageSize',
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
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeSandboxRecoveryTime' => [
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
                    'name' => 'BackupPlanId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyBackupPolicy' => [
            'methods' => [
                'post',
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreferredBackupWindowBegin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AdvanceLogPolicies',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'LogRetentionType' => [
                                    'type' => 'string',
                                ],
                                'DestType' => [
                                    'type' => 'string',
                                ],
                                'FilterType' => [
                                    'type' => 'string',
                                ],
                                'ActionType' => [
                                    'type' => 'string',
                                ],
                                'SrcRegion' => [
                                    'type' => 'string',
                                ],
                                'EnableLogBackup' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'SrcType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'LogRetentionValue' => [
                                    'type' => 'string',
                                ],
                                'PolicyId' => [
                                    'type' => 'string',
                                ],
                                'FilterKey' => [
                                    'type' => 'string',
                                ],
                                'DestRegion' => [
                                    'type' => 'string',
                                ],
                                'FilterValue' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AdvanceDataPolicies',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'DestType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'FilterType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ActionType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SrcRegion' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'SrcType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'OnlyPreserveOneEachDay' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'RetentionValue' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PolicyId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'FilterKey' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DestRegion' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'FilterValue' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'RetentionType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'StorageClass' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AdvanceIncPolicies',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'DestType' => [
                                    'type' => 'string',
                                ],
                                'FilterType' => [
                                    'type' => 'string',
                                ],
                                'ActionType' => [
                                    'type' => 'string',
                                ],
                                'SrcRegion' => [
                                    'type' => 'string',
                                ],
                                'SrcType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'OnlyPreserveOneEachDay' => [
                                    'type' => 'boolean',
                                ],
                                'RetentionValue' => [
                                    'type' => 'string',
                                ],
                                'PolicyId' => [
                                    'type' => 'string',
                                ],
                                'FilterKey' => [
                                    'type' => 'string',
                                ],
                                'DestRegion' => [
                                    'type' => 'string',
                                ],
                                'FilterValue' => [
                                    'type' => 'string',
                                ],
                                'RetentionType' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'BackupRetentionPolicyOnClusterDeletion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'BackupMethod',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'BackupPriority',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'EnableIncBackup',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
        ],
        'RetryDownloadTask' => [
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
                    'name' => 'RegionCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wulanchabu',
            'regionName' => '华北6（乌兰察布）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-wulanchabu.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-wulanchabu.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'regionName' => '华北2（北京）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'regionName' => '华北1（青岛）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'regionName' => '华东2（上海）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'regionName' => '中国香港',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'regionName' => '华北3（张家口）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-zhangjiakou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-zhangjiakou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'regionName' => '华南1（深圳）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'regionName' => '日本（东京）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.ap-northeast-1.aliyuncs.com',
            'endpoint' => 'dbs-api.ap-northeast-1.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'regionName' => '西南1（成都）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-chengdu.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-chengdu.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'regionName' => '新加坡',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.ap-southeast-1.aliyuncs.com',
            'endpoint' => 'dbs-api.ap-southeast-1.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'regionName' => '马来西亚（吉隆坡）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.ap-southeast-3.aliyuncs.com',
            'endpoint' => 'dbs-api.ap-southeast-3.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'regionName' => '华北5（呼和浩特）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-huhehaote.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-huhehaote.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'regionName' => '印度尼西亚（雅加达）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.ap-southeast-5.aliyuncs.com',
            'endpoint' => 'dbs-api.ap-southeast-5.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'regionName' => '华东1（杭州）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'regionName' => '美国（弗吉尼亚）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'regionName' => '英国（伦敦）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'dbs-api.eu-west-1.aliyuncs.com',
            'endpoint' => 'dbs-api.eu-west-1.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'regionName' => '美国（硅谷）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'regionName' => '德国（法兰克福）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'dbs-api.eu-central-1.aliyuncs.com',
            'endpoint' => 'dbs-api.eu-central-1.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'regionName' => '华南1 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'regionName' => '华东2 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => 'dbs-api-vpc.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'regionName' => '华东1 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'dbs-api.cn-hangzhou.aliyuncs.com',
            'vpc' => '',
        ],
    ],
];