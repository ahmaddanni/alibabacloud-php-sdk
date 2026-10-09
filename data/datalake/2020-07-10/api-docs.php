<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'DataLake',
        'version' => '2020-07-10',
    ],
    'components' => [
        'schemas' => [
            'AccessRequest' => [
                'type' => 'object',
                'properties' => [
                    'PrivilegeResources' => [
                        '$ref' => '#/components/schemas/PrivilegeResources',
                    ],
                    'Principal' => [
                        '$ref' => '#/components/schemas/Principal',
                    ],
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Accesses' => [
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                ],
            ],
            'BatchGrantRevokeFailureResult' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/GrantRevokeFailureEntry',
                ],
            ],
            'Catalog' => [
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'LocationUri' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'CreatedBy' => [
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
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CatalogType' => [
                        'type' => 'string',
                    ],
                    'DefaultCatalog' => [
                        'type' => 'boolean',
                    ],
                    'ThriftEnabled' => [
                        'type' => 'boolean',
                    ],
                    'JdbcEnabled' => [
                        'type' => 'boolean',
                    ],
                    'StorageAccessConfig' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogConnection' => [
                'type' => 'object',
                'properties' => [
                    'VpcConnectionId' => [
                        'type' => 'string',
                    ],
                    'ThriftUri' => [
                        'type' => 'string',
                    ],
                    'JdbcUri' => [
                        'type' => 'string',
                    ],
                    'JdbcUserName' => [
                        'type' => 'string',
                    ],
                    'JdbcPassword' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogInput' => [
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'LocationUri' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'CatalogType' => [
                        'type' => 'string',
                    ],
                    'ThriftEnabled' => [
                        'type' => 'boolean',
                    ],
                    'JdbcEnabled' => [
                        'type' => 'boolean',
                    ],
                    'StorageAccessConfig' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogResource' => [
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogSettings' => [
                'type' => 'object',
                'properties' => [
                    'Config' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CatalogVpcConnection' => [
                'type' => 'object',
                'properties' => [
                    'GmtModified' => [
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'type' => 'string',
                    ],
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Creator' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Modifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'VpcConnectionId' => [
                        'type' => 'string',
                    ],
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'ConnectionName' => [
                        'type' => 'string',
                    ],
                    'Zones' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'type' => 'string',
                                ],
                                'ZoneId' => [
                                    'type' => 'string',
                                ],
                                'IP' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'SecurityGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ThriftUri' => [
                        'type' => 'string',
                    ],
                    'JdbcUri' => [
                        'type' => 'string',
                    ],
                    'ConnectionStatus' => [
                        'type' => 'string',
                    ],
                    'ErrorMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CatalogVpcConnectionInput' => [
                'type' => 'object',
                'properties' => [
                    'VpcId' => [
                        'type' => 'string',
                    ],
                    'ConnectionName' => [
                        'type' => 'string',
                    ],
                    'Zones' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'VSwitchId' => [
                                    'type' => 'string',
                                ],
                                'ZoneId' => [
                                    'type' => 'string',
                                ],
                                'IP' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'SecurityGroupIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ColumnResource' => [
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'ColumnNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ColumnStatistics' => [
                'type' => 'object',
                'properties' => [
                    'ColumnStatisticsDesc' => [
                        '$ref' => '#/components/schemas/ColumnStatisticsDesc',
                    ],
                    'ColumnStatisticsObjList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ColumnStatisticsObj',
                        ],
                    ],
                    'Engine' => [
                        'type' => 'string',
                    ],
                    'IsStatsCompliant' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ColumnStatisticsDesc' => [
                'type' => 'object',
                'properties' => [
                    'LastAnalyzedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'PartitionName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ColumnStatisticsObj' => [
                'type' => 'object',
                'properties' => [
                    'ColumnName' => [
                        'type' => 'string',
                    ],
                    'ColumnType' => [
                        'type' => 'string',
                    ],
                    'ColumnStatisticsData' => [
                        'type' => 'object',
                        'properties' => [
                            'StatisticsData' => [
                                'type' => 'string',
                            ],
                            'StatisticsType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'Database' => [
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'LocationUri' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'OwnerName' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'Privileges' => [
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'UpdateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CreatedBy' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DatabaseInput' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'LocationUri' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'OwnerName' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'Privileges' => [
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DatabaseProfile' => [
                'type' => 'object',
                'properties' => [
                    'FileCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                    'ObjectSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LatestDate' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DatabaseResource' => [
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'DatabaseWildcard' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DbStorageRank' => [
                'type' => 'object',
                'properties' => [
                    'Quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DbName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ErrorDetail' => [
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
            'FieldSchema' => [
                'type' => 'object',
                'properties' => [
                    'Comment' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FileCnt' => [
                'type' => 'object',
                'properties' => [
                    'Small' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Large' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Tiny' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Middle' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Function' => [
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                    'ClassName' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'FunctionName' => [
                        'type' => 'string',
                    ],
                    'FunctionType' => [
                        'type' => 'string',
                    ],
                    'OwnerName' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'ResourceUri' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourceUri',
                        ],
                    ],
                    'UpdateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CreatedBy' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FunctionInput' => [
                'type' => 'object',
                'properties' => [
                    'ClassName' => [
                        'type' => 'string',
                    ],
                    'FunctionName' => [
                        'type' => 'string',
                    ],
                    'FunctionType' => [
                        'type' => 'string',
                    ],
                    'OwnerName' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'ResourceUri' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourceUri',
                        ],
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'FunctionResource' => [
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'FunctionName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GrantRevokeEntry' => [
                'type' => 'object',
                'properties' => [
                    'MetaResource' => [
                        '$ref' => '#/components/schemas/MetaResource',
                    ],
                    'Accesses' => [
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                    'DelegateAccesses' => [
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                    'Principal' => [
                        '$ref' => '#/components/schemas/Principal',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GrantRevokeFailureEntry' => [
                'type' => 'object',
                'properties' => [
                    'GrantRevokeEntry' => [
                        '$ref' => '#/components/schemas/GrantRevokeEntry',
                    ],
                    'ErrorDetail' => [
                        '$ref' => '#/components/schemas/ErrorDetail',
                    ],
                ],
            ],
            'HighLight' => [
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
            'IndicatorStatistic' => [
                'type' => 'object',
                'properties' => [
                    'Data' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Date' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LifecycleResource' => [
                'type' => 'object',
                'properties' => [
                    'LifecycleRuleBizId' => [
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'type' => 'string',
                    ],
                    'TableProfile' => [
                        '$ref' => '#/components/schemas/TableProfile',
                    ],
                    'Database' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'UpdateTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Description' => [
                                'type' => 'string',
                            ],
                            'LocationUri' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Table' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                            ],
                            'TableName' => [
                                'type' => 'string',
                            ],
                            'TableType' => [
                                'type' => 'string',
                            ],
                            'Sd' => [
                                'type' => 'object',
                                'properties' => [
                                    'BucketCols' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'InputFormat' => [
                                        'type' => 'string',
                                    ],
                                    'Location' => [
                                        'type' => 'string',
                                    ],
                                    'OutputFormat' => [
                                        'type' => 'string',
                                    ],
                                    'Parameters' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SerDeInfo' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Parameters' => [
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'SerializationLib' => [
                                                'type' => 'string',
                                            ],
                                            'Name' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'DatabaseProfile' => [
                        '$ref' => '#/components/schemas/DatabaseProfile',
                    ],
                    'Owner' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LifecycleRule' => [
                'type' => 'object',
                'properties' => [
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'type' => 'string',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'BindCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'RuleType' => [
                        'type' => 'string',
                    ],
                    'Config' => [
                        'type' => 'string',
                    ],
                    'IaDays' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ArchiveDays' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ColdArchiveDays' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ScheduleStatus' => [
                        'type' => 'string',
                    ],
                    'Workflow' => [
                        '$ref' => '#/components/schemas/Workflow',
                    ],
                    'WorkflowId' => [
                        'type' => 'string',
                    ],
                    'WorkflowInstance' => [
                        '$ref' => '#/components/schemas/WorkflowInstance',
                    ],
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LifecycleTask' => [
                'type' => 'object',
                'properties' => [
                    'BizId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'WorkflowInstance' => [
                        '$ref' => '#/components/schemas/WorkflowInstance',
                    ],
                    'LifecycleRule' => [
                        '$ref' => '#/components/schemas/LifecycleRule',
                    ],
                ],
            ],
            'ListFieldSchema' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/FieldSchema',
                ],
            ],
            'ListListString' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/ListString',
                ],
            ],
            'ListResourceUri' => [
                'type' => 'array',
                'items' => [
                    'type' => 'object',
                    'properties' => [
                        'ResourceType' => [
                            'type' => 'string',
                        ],
                        'Uri' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ListString' => [
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                ],
            ],
            'LocationStorageRankDTO' => [
                'type' => 'object',
                'properties' => [
                    'Location' => [
                        'type' => 'string',
                    ],
                    'Storage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'LockObj' => [
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'PartitionName' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LockStatus' => [
                'type' => 'object',
                'properties' => [
                    'LockId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LockState' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LogInfo' => [
                'type' => 'object',
                'properties' => [
                    'GmtCreate' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'BizTime' => [
                        'type' => 'string',
                    ],
                    'LogType' => [
                        'type' => 'string',
                    ],
                    'LogId' => [
                        'type' => 'string',
                    ],
                    'LogSummary' => [
                        'type' => 'string',
                    ],
                    'LogContent' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaResource' => [
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'CatalogResource' => [
                        '$ref' => '#/components/schemas/CatalogResource',
                    ],
                    'DatabaseResource' => [
                        '$ref' => '#/components/schemas/DatabaseResource',
                    ],
                    'TableResource' => [
                        '$ref' => '#/components/schemas/TableResource',
                    ],
                    'FunctionResource' => [
                        '$ref' => '#/components/schemas/FunctionResource',
                    ],
                    'ColumnResource' => [
                        '$ref' => '#/components/schemas/ColumnResource',
                    ],
                ],
            ],
            'Order' => [
                'type' => 'object',
                'properties' => [
                    'Col' => [
                        'type' => 'string',
                    ],
                    'Order' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Parameters' => [
                'type' => 'object',
                'additionalProperties' => [
                    'type' => 'string',
                ],
            ],
            'Partition' => [
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'LastAnalyzedTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Privileges' => [
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Sd' => [
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'PartitionError' => [
                'type' => 'object',
                'properties' => [
                    'ErrorDetail' => [
                        '$ref' => '#/components/schemas/ErrorDetail',
                    ],
                    'PartitionValues' => [
                        '$ref' => '#/components/schemas/ListString',
                    ],
                ],
            ],
            'PartitionInput' => [
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'LastAnalyzedTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Privileges' => [
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Sd' => [
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'Values' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'PartitionProfile' => [
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'PartitionName' => [
                        'type' => 'string',
                    ],
                    'ArchiveStatus' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'LastModifyTime' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'string',
                    ],
                    'LastAccessNumTime' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                    'FileSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AccessNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AccessNumWeekly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AccessNumMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectAccessNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectAccessNumWeekly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectAccessNumMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DataSourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PartitionSpec' => [
                'type' => 'object',
                'properties' => [
                    'SharedSDPartitions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Partition',
                        ],
                    ],
                    'SharedStorageDescriptor' => [
                        'type' => 'object',
                        'properties' => [
                            'Cols' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/FieldSchema',
                                ],
                            ],
                            'Location' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'PartitionValueList' => [
                'type' => 'array',
                'items' => [
                    'type' => 'object',
                    'properties' => [
                        'Values' => [
                            '$ref' => '#/components/schemas/ListString',
                        ],
                    ],
                ],
            ],
            'Principal' => [
                'type' => 'object',
                'properties' => [
                    'PrincipalArn' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PrincipalPrivilegeSet' => [
                'type' => 'object',
                'properties' => [
                    'GroupPrivileges' => [
                        '$ref' => '#/components/schemas/Privileges',
                    ],
                    'RolePrivileges' => [
                        '$ref' => '#/components/schemas/Privileges',
                    ],
                    'UserPrivileges' => [
                        '$ref' => '#/components/schemas/Privileges',
                    ],
                ],
            ],
            'PrincipalResourcePermissions' => [
                'type' => 'object',
                'properties' => [
                    'Principal' => [
                        '$ref' => '#/components/schemas/Principal',
                        'required' => true,
                    ],
                    'MetaResource' => [
                        '$ref' => '#/components/schemas/MetaResource',
                        'required' => true,
                    ],
                    'Accesses' => [
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                    'DelegateAccesses' => [
                        '$ref' => '#/components/schemas/Accesses',
                    ],
                ],
            ],
            'PrincipalResourcePermissionsList' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/PrincipalResourcePermissions',
                ],
            ],
            'Principals' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/Principal',
                ],
            ],
            'PrivilegeGrantInfo' => [
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'GrantOption' => [
                        'type' => 'boolean',
                    ],
                    'Grantor' => [
                        'type' => 'string',
                    ],
                    'GrantorType' => [
                        'type' => 'string',
                    ],
                    'Privilege' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PrivilegeResource' => [
                'type' => 'object',
                'properties' => [
                    'MetaResource' => [
                        '$ref' => '#/components/schemas/MetaResource',
                    ],
                    'Access' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PrivilegeResources' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/PrivilegeResource',
                ],
            ],
            'Privileges' => [
                'type' => 'object',
                'additionalProperties' => [
                    'type' => 'array',
                    'items' => [
                        '$ref' => '#/components/schemas/PrivilegeGrantInfo',
                    ],
                ],
            ],
            'ResourceUri' => [
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Role' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Users' => [
                        '$ref' => '#/components/schemas/Principals',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                    'PrincipalArn' => [
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
                    'IsPredefined' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'RoleInput' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Roles' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/Role',
                ],
            ],
            'SerDeInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'SerializationLib' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SingleIndicatorDTO' => [
                'type' => 'object',
                'properties' => [
                    'DayOnDay' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'MonthOnMonth' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'DayIncrement' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MonthIncrement' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Total' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'SkewedInfo' => [
                'type' => 'object',
                'properties' => [
                    'SkewedColNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'SkewedColValueLocationMaps' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'SkewedColValues' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'array',
                            'items' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'SmallFileCntRank' => [
                'type' => 'object',
                'properties' => [
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'Quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DbName' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SortCriterion' => [
                'type' => 'object',
                'properties' => [
                    'FieldName' => [
                        'type' => 'string',
                    ],
                    'Sort' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StorageCollectTaskOperationResult' => [
                'type' => 'object',
                'properties' => [
                    'Success' => [
                        'type' => 'boolean',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'TaskType' => [
                        'type' => 'string',
                    ],
                    'DlfCreated' => [
                        'type' => 'boolean',
                    ],
                    'ErrCode' => [
                        'type' => 'string',
                    ],
                    'ErrMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StorageDescriptor' => [
                'type' => 'object',
                'properties' => [
                    'BucketCols' => [
                        '$ref' => '#/components/schemas/ListString',
                    ],
                    'Cols' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/FieldSchema',
                        ],
                    ],
                    'Compressed' => [
                        'type' => 'boolean',
                    ],
                    'InputFormat' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                    'NumBuckets' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'OutputFormat' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'SerDeInfo' => [
                        '$ref' => '#/components/schemas/SerDeInfo',
                    ],
                    'SkewedInfo' => [
                        '$ref' => '#/components/schemas/SkewedInfo',
                    ],
                    'SortCols' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Order',
                        ],
                    ],
                    'StoredAsSubDirectories' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'StorageFormat' => [
                'type' => 'object',
                'properties' => [
                    'Parquet' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Orc' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Delta' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Csv' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Iceberg' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Uncategorized' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Json' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Avro' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Hudi' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'StorageLayer' => [
                'type' => 'object',
                'properties' => [
                    'Archive' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColdArchive' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Standard' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Infrequent' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Unknown' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'StorageRankDTO' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'dbStorageRank' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/DbStorageRank',
                        ],
                    ],
                    'tableStorageRank' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TableStorageRank',
                        ],
                    ],
                    'smallFileCntRank' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SmallFileCntRank',
                        ],
                    ],
                ],
            ],
            'StorageSummary' => [
                'type' => 'object',
                'properties' => [
                    'DatabaseNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'PartitionNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'TableNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'StrogeCollectTask' => [
                'type' => 'object',
                'properties' => [
                    'GmtModified' => [
                        'type' => 'string',
                    ],
                    'GmtCreate' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                    'DestinationBucketName' => [
                        'type' => 'string',
                    ],
                    'DestinationPrefix' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'DlfCreated' => [
                        'type' => 'boolean',
                    ],
                    'TaskType' => [
                        'type' => 'string',
                    ],
                    'InventoryId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Table' => [
                'type' => 'object',
                'properties' => [
                    'Cascade' => [
                        'type' => 'boolean',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CreatedBy' => [
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'LastAnalyzedTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'PartitionKeys' => [
                        '$ref' => '#/components/schemas/ListFieldSchema',
                    ],
                    'Privileges' => [
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Retention' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RewriteEnabled' => [
                        'type' => 'boolean',
                    ],
                    'Sd' => [
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'TableType' => [
                        'type' => 'string',
                    ],
                    'Temporary' => [
                        'type' => 'boolean',
                    ],
                    'UpdateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ViewExpandedText' => [
                        'type' => 'string',
                    ],
                    'ViewOriginalText' => [
                        'type' => 'string',
                    ],
                    'TableId' => [
                        'type' => 'string',
                    ],
                    'TableVersion' => [
                        '$ref' => '#/components/schemas/TableVersion',
                    ],
                ],
            ],
            'TableError' => [
                'type' => 'object',
                'properties' => [
                    'ErrorDetail' => [
                        '$ref' => '#/components/schemas/ErrorDetail',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableExtended' => [
                'type' => 'object',
                'properties' => [
                    'Cascade' => [
                        'type' => 'boolean',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CreatedBy' => [
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'LastAnalyzedTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'PartitionKeys' => [
                        '$ref' => '#/components/schemas/ListFieldSchema',
                    ],
                    'Privileges' => [
                        'type' => 'object',
                        'properties' => [
                            'groupPrivileges' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateTime' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'GrantOption' => [
                                                'type' => 'boolean',
                                            ],
                                            'Grantor' => [
                                                'type' => 'string',
                                            ],
                                            'GrantorType' => [
                                                'type' => 'string',
                                            ],
                                            'Privilege' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RolePrivileges' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateTime' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'GrantOption' => [
                                                'type' => 'boolean',
                                            ],
                                            'Grantor' => [
                                                'type' => 'string',
                                            ],
                                            'GrantorType' => [
                                                'type' => 'string',
                                            ],
                                            'Privilege' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'UserPrivileges' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'CreateTime' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'GrantOption' => [
                                                'type' => 'boolean',
                                            ],
                                            'Grantor' => [
                                                'type' => 'string',
                                            ],
                                            'GrantorType' => [
                                                'type' => 'string',
                                            ],
                                            'Privilege' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Retention' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RewriteEnabled' => [
                        'type' => 'boolean',
                    ],
                    'Sd' => [
                        'type' => 'object',
                        'properties' => [
                            'BucketCols' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Cols' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/FieldSchema',
                                ],
                            ],
                            'Compressed' => [
                                'type' => 'boolean',
                            ],
                            'InputFormat' => [
                                'type' => 'string',
                            ],
                            'Location' => [
                                'type' => 'string',
                            ],
                            'NumBuckets' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'OutputFormat' => [
                                'type' => 'string',
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'SerDeInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Parameters' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SerializationLib' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'SkewedInfo' => [
                                'type' => 'object',
                                'properties' => [
                                    'SkewedColNames' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SkewedColValueLocationMaps' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'SkewedColValues' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'SortCols' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/Order',
                                ],
                            ],
                            'StoredAsSubDirectories' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'TableType' => [
                        'type' => 'string',
                    ],
                    'Temporary' => [
                        'type' => 'boolean',
                    ],
                    'UpdateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ViewExpandedText' => [
                        'type' => 'string',
                    ],
                    'ViewOriginalText' => [
                        'type' => 'string',
                    ],
                    'TableFormat' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableInput' => [
                'type' => 'object',
                'properties' => [
                    'Cascade' => [
                        'type' => 'boolean',
                    ],
                    'CreatedBy' => [
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'LastAnalyzedTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'OwnerType' => [
                        'type' => 'string',
                    ],
                    'Parameters' => [
                        '$ref' => '#/components/schemas/Parameters',
                    ],
                    'PartitionKeys' => [
                        '$ref' => '#/components/schemas/ListFieldSchema',
                    ],
                    'Privileges' => [
                        '$ref' => '#/components/schemas/PrincipalPrivilegeSet',
                    ],
                    'Retention' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'RewriteEnabled' => [
                        'type' => 'boolean',
                    ],
                    'Sd' => [
                        '$ref' => '#/components/schemas/StorageDescriptor',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'TableType' => [
                        'type' => 'string',
                    ],
                    'Temporary' => [
                        'type' => 'boolean',
                    ],
                    'ViewExpandedText' => [
                        'type' => 'string',
                    ],
                    'ViewOriginalText' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'TableProfile' => [
                'type' => 'object',
                'properties' => [
                    'PartitionCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RecordCnt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IsPartitioned' => [
                        'type' => 'boolean',
                    ],
                    'LastModifyTime' => [
                        'type' => 'string',
                    ],
                    'LastAccessTime' => [
                        'type' => 'string',
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                    'AccessNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AccessNumWeekly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AccessNumMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastAccessNumTime' => [
                        'type' => 'string',
                    ],
                    'LatestDate' => [
                        'type' => 'string',
                    ],
                    'LatestAccessNumDate' => [
                        'type' => 'string',
                    ],
                    'LastDdlTime' => [
                        'type' => 'string',
                    ],
                    'ObjectAccessNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectAccessNumWeekly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectAccessNumMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DataSourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableResource' => [
                'type' => 'object',
                'properties' => [
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableStorageRank' => [
                'type' => 'object',
                'properties' => [
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'Quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DbName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableVersion' => [
                'type' => 'object',
                'properties' => [
                    'Table' => [
                        '$ref' => '#/components/schemas/Table',
                    ],
                    'VersionId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'TaskStatus' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UnarchiveDetail' => [
                'type' => 'object',
                'properties' => [
                    'ApiCallTimes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StorageSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Cost' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StorageType' => [
                        'type' => 'string',
                    ],
                    'UnarchiveTaskStatus' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateTablePartitionColumnStatisticsRequest' => [
                'type' => 'object',
                'properties' => [
                    'CatalogId' => [
                        'type' => 'string',
                    ],
                    'ColumnStatisticsList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ColumnStatistics',
                        ],
                    ],
                    'DatabaseName' => [
                        'type' => 'string',
                    ],
                    'Engine' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'ValidWriteIdList' => [
                        'type' => 'string',
                    ],
                    'WriteId' => [
                        'type' => 'string',
                    ],
                    'IsStatsCompliant' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'UserRole' => [
                'type' => 'object',
                'properties' => [
                    'Role' => [
                        '$ref' => '#/components/schemas/Role',
                    ],
                    'GrantTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'User' => [
                        '$ref' => '#/components/schemas/Principal',
                    ],
                ],
            ],
            'UserRoles' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/UserRole',
                ],
            ],
            'Workflow' => [
                'type' => 'object',
                'properties' => [
                    'LatestInstanceId' => [
                        'type' => 'string',
                    ],
                    'LatestInstanceStatus' => [
                        'type' => 'string',
                    ],
                    'LatestStartTime' => [
                        'type' => 'string',
                    ],
                    'LatestEndTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WorkflowInstance' => [
                'type' => 'object',
                'properties' => [
                    'DlfWorkflowId' => [
                        'type' => 'string',
                    ],
                    'ExternalInstanceId' => [
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
                    'RuntimeLogs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LogInfo',
                        ],
                    ],
                    'BatchProgress' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateCatalog' => [
            'path' => '/api/metastore/catalogs',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogInput' => [
                                '$ref' => '#/components/schemas/CatalogInput',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteCatalog' => [
            'path' => '/api/metastore/catalogs',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IsAsync',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateCatalog' => [
            'path' => '/api/metastore/catalogs',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogInput' => [
                                '$ref' => '#/components/schemas/CatalogInput',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListCatalogs' => [
            'path' => '/api/metastore/catalogs/list',
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
                    'name' => 'IdPattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
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
                        'minimum' => '-2',
                        'maximum' => '1000000',
                    ],
                ],
            ],
        ],
        'GetCatalog' => [
            'path' => '/api/metastore/catalogs',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDatabase' => [
            'path' => '/api/metastore/catalogs/databases',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseInput' => [
                                '$ref' => '#/components/schemas/DatabaseInput',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDatabase' => [
            'path' => '/api/metastore/catalogs/databases',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'Cascade',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Async',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateDatabase' => [
            'path' => '/api/metastore/catalogs/databases',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseInput' => [
                                '$ref' => '#/components/schemas/DatabaseInput',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDatabase' => [
            'path' => '/api/metastore/catalogs/databases',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
            ],
        ],
        'ListDatabases' => [
            'path' => '/api/metastore/catalogs/databases/list',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
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
                        'minimum' => '-2',
                        'maximum' => '1000000',
                    ],
                ],
            ],
        ],
        'CreateTable' => [
            'path' => '/api/metastore/catalogs/databases/tables',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableInput' => [
                                '$ref' => '#/components/schemas/TableInput',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTable' => [
            'path' => '/api/metastore/catalogs/databases/tables',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTableColumnStatistics' => [
            'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/ListString',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTableVersion' => [
            'path' => '/api/metastore/catalogs/databases/tables/versions',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateTable' => [
            'path' => '/api/metastore/catalogs/databases/tables',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SkipArchive' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'TableInput' => [
                                '$ref' => '#/components/schemas/TableInput',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsAsync' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'AllowPartitionKeyChange' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateTableColumnStatistics' => [
            'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
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
                    'name' => 'UpdateTablePartitionColumnStatisticsRequest',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateTablePartitionColumnStatisticsRequest',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTable' => [
            'path' => '/api/metastore/catalogs/databases/tables',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTableColumnStatistics' => [
            'path' => '/api/metastore/catalogs/databases/tables/columnstatistics',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/ListString',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTableVersion' => [
            'path' => '/api/metastore/catalogs/databases/tables/versions',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTableNames' => [
            'path' => '/api/metastore/catalogs/databases/tables/names',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
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
                        'minimum' => '-1',
                        'maximum' => '1000000',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTables' => [
            'path' => '/api/metastore/databases/tables/list',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
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
                        'minimum' => '-1',
                        'maximum' => '1000000',
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTableVersions' => [
            'path' => '/api/metastore/catalogs/databases/tables/versions/list',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
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
            ],
        ],
        'GetTableProfile' => [
            'path' => '/webapi/metastorehouse/catalog/database/tableprofile',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
        'RenameTable' => [
            'path' => '/api/metastore/catalogs/databases/tables/rename',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableInput' => [
                                '$ref' => '#/components/schemas/TableInput',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsAsync' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchGetTables' => [
            'path' => '/api/metastore/catalogs/databases/tables/batchget',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableNames' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchCreateTables' => [
            'path' => '/api/metastore/catalogs/databases/tables/batchcreate',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IfNotExists' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'TableInputs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/TableInput',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchDeleteTables' => [
            'path' => '/api/metastore/catalogs/databases/tables/batchdelete',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IfExists' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'TableNames' => [
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
        'BatchDeleteTableVersions' => [
            'path' => '/api/metastore/catalogs/databases/tables/versions/batchdelete',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VersionIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
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
        'BatchUpdateTables' => [
            'path' => '/api/metastore/catalogs/databases/tables/batchupdate',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableInputs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/TableInput',
                                    'required' => false,
                                ],
                            ],
                            'IsAsync' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePartition' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IfNotExists' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'NeedResult' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PartitionInput' => [
                                '$ref' => '#/components/schemas/PartitionInput',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeletePartition' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/delete',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IfExists' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PartitionValues' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeletePartitionColumnStatistics' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PartitionNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/ListString',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/ListString',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdatePartitionColumnStatistics' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
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
                    'name' => 'UpdateTablePartitionColumnStatisticsRequest',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        '$ref' => '#/components/schemas/UpdateTablePartitionColumnStatisticsRequest',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPartition' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/get',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PartitionValues' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPartitionColumnStatistics' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PartitionNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/ListString',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ColumnNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/ListString',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPartitionNames' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/names',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NextPageToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PartialPartValues' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPartitions' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/list',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NextPageToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PartialPartValues' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsShareSd' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPartitionsByFilter' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/listbyfilter',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Filter' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NextPageToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsShareSd' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchCreatePartitions' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchcreate',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IfNotExists' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'NeedResult' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PartitionInputs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/PartitionInput',
                                    'required' => false,
                                ],
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchDeletePartitions' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchdelete',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IfExists' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PartitionValueList' => [
                                '$ref' => '#/components/schemas/PartitionValueList',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchGetPartitionColumnStatistics' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/columnstatistics/batchget',
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
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PartitionNames' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                            'ColumnNames' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchGetPartitions' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchget',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PartitionValueList' => [
                                '$ref' => '#/components/schemas/PartitionValueList',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'IsShareSd' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchUpdatePartitions' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/batchupdate',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PartitionInputs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/PartitionInput',
                                    'required' => false,
                                ],
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RenamePartition' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/rename',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PartitionInput' => [
                                '$ref' => '#/components/schemas/PartitionInput',
                                'required' => false,
                            ],
                            'PartitionValues' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                            'TableName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFunction' => [
            'path' => '/api/metastore/catalogs/databases/functions',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FunctionInput' => [
                                '$ref' => '#/components/schemas/FunctionInput',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteFunction' => [
            'path' => '/api/metastore/catalogs/databases/functions',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FunctionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateFunction' => [
            'path' => '/api/metastore/catalogs/databases/functions',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatabaseName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FunctionInput' => [
                                '$ref' => '#/components/schemas/FunctionInput',
                                'required' => false,
                            ],
                            'FunctionName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFunctionNames' => [
            'path' => '/api/metastore/catalogs/databases/functions/names',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FunctionNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
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
                        'minimum' => '-1',
                        'maximum' => '1000000',
                    ],
                ],
            ],
        ],
        'ListFunctions' => [
            'path' => '/api/metastore/catalogs/databases/functions/list',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FunctionNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
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
                        'minimum' => '-1',
                        'maximum' => '1000000',
                    ],
                ],
            ],
        ],
        'GetFunction' => [
            'path' => '/api/metastore/catalogs/databases/functions',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatabaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FunctionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLock' => [
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'LockObjList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/LockObj',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetLock' => [
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AbortLock' => [
            'path' => '/api/metastore/catalogs/databases/tables/locks/abort',
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
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefreshLock' => [
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UnLock' => [
            'path' => '/api/metastore/catalogs/databases/tables/locks',
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
                    'name' => 'LockId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopMigrationWorkflow' => [
            'path' => '/webapi/migration/workflow/stop',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RunMigrationWorkflow' => [
            'path' => '/webapi/migration/workflow/run',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAsyncTaskStatus' => [
            'path' => '/api/metastore/catalogs/tasks',
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
                    'name' => 'CatalogId',
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
            ],
        ],
        'Search' => [
            'path' => '/api/metastore/catalogs/search',
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
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SortCriteria' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/SortCriterion',
                                    'required' => false,
                                ],
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'SearchType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'table',
                                    'all',
                                    'database',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateRole' => [
            'path' => '/api/metastore/auth/roles',
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
                        '$ref' => '#/components/schemas/RoleInput',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GrantRoleToUsers' => [
            'path' => '/api/metastore/auth/roles/grantusers',
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
                            'RoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Users' => [
                                '$ref' => '#/components/schemas/Principals',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GrantRolesToUser' => [
            'path' => '/api/metastore/auth/roles/grantroles',
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
                            'RoleNames' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => true,
                            ],
                            'User' => [
                                '$ref' => '#/components/schemas/Principal',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GrantPermissions' => [
            'path' => '/api/metastore/auth/permissions/grant',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                '$ref' => '#/components/schemas/MetaResource',
                                'required' => true,
                            ],
                            'Accesses' => [
                                '$ref' => '#/components/schemas/Accesses',
                                'required' => true,
                            ],
                            'DelegateAccesses' => [
                                '$ref' => '#/components/schemas/Accesses',
                                'required' => true,
                            ],
                            'Principal' => [
                                '$ref' => '#/components/schemas/Principal',
                                'required' => true,
                            ],
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchGrantPermissions' => [
            'path' => '/api/metastore/auth/permissions/batchgrant',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'GrantRevokeEntries' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/GrantRevokeEntry',
                                    'required' => false,
                                ],
                            ],
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRole' => [
            'path' => '/api/metastore/auth/roles',
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
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RevokeRoleFromUsers' => [
            'path' => '/api/metastore/auth/roles/revokeusers',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'RoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Users' => [
                                '$ref' => '#/components/schemas/Principals',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RevokeRolesFromUser' => [
            'path' => '/api/metastore/auth/roles/revokeroles',
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
                            'RoleNames' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => true,
                            ],
                            'User' => [
                                '$ref' => '#/components/schemas/Principal',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RevokePermissions' => [
            'path' => '/api/metastore/auth/permissions/revoke',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                '$ref' => '#/components/schemas/MetaResource',
                                'required' => true,
                            ],
                            'Accesses' => [
                                '$ref' => '#/components/schemas/Accesses',
                                'required' => true,
                            ],
                            'DelegateAccesses' => [
                                '$ref' => '#/components/schemas/Accesses',
                                'required' => false,
                            ],
                            'Principal' => [
                                '$ref' => '#/components/schemas/Principal',
                                'required' => true,
                            ],
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchRevokePermissions' => [
            'path' => '/api/metastore/auth/permissions/batchrevoke',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'GrantRevokeEntries' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/GrantRevokeEntry',
                                    'required' => false,
                                ],
                            ],
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRole' => [
            'path' => '/api/metastore/auth/roles',
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
                            'RoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RoleInput' => [
                                '$ref' => '#/components/schemas/RoleInput',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRoleUsers' => [
            'path' => '/api/metastore/auth/updateroleusers',
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
                            'RoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Users' => [
                                '$ref' => '#/components/schemas/Principals',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdatePermissions' => [
            'path' => '/api/metastore/auth/permissions/',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                '$ref' => '#/components/schemas/MetaResource',
                                'required' => true,
                            ],
                            'Accesses' => [
                                '$ref' => '#/components/schemas/Accesses',
                                'required' => true,
                            ],
                            'DelegateAccesses' => [
                                '$ref' => '#/components/schemas/Accesses',
                                'required' => true,
                            ],
                            'Principal' => [
                                '$ref' => '#/components/schemas/Principal',
                                'required' => true,
                            ],
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateCatalogSettings' => [
            'path' => '/api/metastore/catalogs/settings',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CatalogSettings' => [
                                '$ref' => '#/components/schemas/CatalogSettings',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRole' => [
            'path' => '/api/metastore/auth/roles',
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
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListRoles' => [
            'path' => '/api/metastore/auth/roles/list',
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
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RoleNamePattern',
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
            ],
        ],
        'ListRoleUsers' => [
            'path' => '/api/metastore/auth/roles/roleusers',
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
                    'name' => 'RoleName',
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
                    'name' => 'UserNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListUserRoles' => [
            'path' => '/api/metastore/auth/roles/userroles',
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
                    'name' => 'PrincipalArn',
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
                    'name' => 'RoleNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextPageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPermissions' => [
            'path' => '/api/metastore/auth/permissions/list',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Principal' => [
                                '$ref' => '#/components/schemas/Principal',
                                'required' => false,
                            ],
                            'NextPageToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'hive',
                                ],
                            ],
                            'MetaResource' => [
                                '$ref' => '#/components/schemas/MetaResource',
                                'required' => false,
                            ],
                            'IsListUserRolePermissions' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'MetaResourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CatalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CheckPermissions' => [
            'path' => '/api/metastore/auth/permissions/check',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/AccessRequest',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCatalogSettings' => [
            'path' => '/api/metastore/catalogs/settings',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetQueryResult' => [
            'path' => '/webapi/query/getQueryResult',
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
                    'name' => 'QueryId',
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
            ],
        ],
        'SubmitQuery' => [
            'path' => '/webapi/query/submitQueryRequestBody',
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
                            'sql' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'workspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'catalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelQuery' => [
            'path' => '/webapi/query/cancelQuery',
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
                    'name' => 'QueryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetRegionStatus' => [
            'path' => '/webapi/service/getRegionStatus',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetServiceStatus' => [
            'path' => '/webapi/service/getServiceStatus',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/webapi/service/describeRegions',
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
        'SearchAcrossCatalog' => [
            'path' => '/api/metastore/catalogs/search/search-across-catalog',
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
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SortCriteria' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/SortCriterion',
                                    'required' => false,
                                ],
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'PageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'CatalogIds' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                            'SearchTypes' => [
                                '$ref' => '#/components/schemas/ListString',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RegisterLocation' => [
            'path' => '/webapi/locations',
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
                            'Location' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RoleName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'InventoryCollectEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'OssLogCollectEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeregisterLocation' => [
            'path' => '/webapi/locations',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'LocationId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateRegisteredLocation' => [
            'path' => '/webapi/locations',
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
                            'LocationId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'InventoryCollectEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'OssLogCollectEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPartitionsByExpr' => [
            'path' => '/api/metastore/catalogs/databases/tables/partitions/listbyexpr',
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
            'parameters' => [],
        ],
        'GetDatabaseProfile' => [
            'path' => '/webapi/metastorehouse/catalog/database/databaseprofile',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
        'GetLifecycleRule' => [
            'path' => '/webapi/metastorehouse/lifecycle/rule/getLifecycleRule',
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
                    'name' => 'ResourceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPartitionsProfile' => [
            'path' => '/webapi/metastorehouse/catalog/database/tableprofile/partitionprofile/listPartitionsProfile',
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
                    'name' => 'CatalogId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                [
                    'name' => 'TableName',
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
                    'name' => 'PartitionNames',
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
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dlf.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dlf.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dlf.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dlf.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dlf.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dlf.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dlf.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dlf.us-east-1.aliyuncs.com',
        ],
    ],
];