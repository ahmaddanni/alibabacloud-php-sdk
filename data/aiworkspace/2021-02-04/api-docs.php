<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'AIWorkSpace',
        'version' => '2021-02-04',
    ],
    'components' => [
        'schemas' => [
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
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'type' => 'string',
                    ],
                    'MountPath' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Collection' => [
                'type' => 'object',
                'properties' => [
                    'CollectionName' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Connection' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'ConnectionType' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'Secrets' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Creator' => [
                        'type' => 'string',
                    ],
                    'ResourceMeta' => [
                        'type' => 'object',
                        'properties' => [
                            'InstanceName' => [
                                'type' => 'string',
                            ],
                            'Extra' => [
                                'type' => 'string',
                            ],
                            'InstanceId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'ConnectionName' => [
                        'type' => 'string',
                    ],
                    'ConnectionId' => [
                        'type' => 'string',
                    ],
                    'Configs' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Models' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ToolCall' => [
                                    'type' => 'boolean',
                                ],
                                'Model' => [
                                    'type' => 'string',
                                ],
                                'DisplayName' => [
                                    'type' => 'string',
                                ],
                                'ModelType' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Dataset' => [
                'type' => 'object',
                'properties' => [
                    'DatasetId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'DataSourceType' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'DataType' => [
                        'type' => 'string',
                    ],
                    'Property' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'SourceId' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Options' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'ProviderType' => [
                        'type' => 'string',
                    ],
                    'SourceDatasetId' => [
                        'type' => 'string',
                    ],
                    'SourceDatasetVersion' => [
                        'type' => 'string',
                    ],
                    'TagTemplateType' => [
                        'type' => 'string',
                    ],
                    'LatestVersion' => [
                        '$ref' => '#/components/schemas/DatasetVersion',
                    ],
                    'MountAccess' => [
                        'type' => 'string',
                    ],
                    'ImportInfo' => [
                        'type' => 'string',
                    ],
                    'Edition' => [
                        'type' => 'string',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Label',
                        ],
                    ],
                    'MountAccessReadWriteRoleIdList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'IsShared' => [
                        'type' => 'boolean',
                    ],
                    'SharedFrom' => [
                        '$ref' => '#/components/schemas/DatasetShareRelationship',
                    ],
                    'SharingConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'SharedTo' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/DatasetShareRelationship',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'DatasetFileMeta' => [
                'type' => 'object',
                'properties' => [
                    'DatasetFileMetaId' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
                        'type' => 'string',
                    ],
                    'FileName' => [
                        'type' => 'string',
                    ],
                    'DownloadUrl' => [
                        'type' => 'string',
                    ],
                    'Score' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'DataSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileFingerPrint' => [
                        'type' => 'string',
                    ],
                    'FileUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'ThumbnailUrl' => [
                        'type' => 'string',
                    ],
                    'MetaAttributes' => [
                        'type' => 'string',
                    ],
                    'SemanticIndexJobId' => [
                        'type' => 'string',
                    ],
                    'SemanticIndexUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FileCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FileType' => [
                        'type' => 'string',
                    ],
                    'ContentType' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                        'enum' => [
                            'ACTIVE',
                            'DELETED',
                        ],
                    ],
                ],
            ],
            'DatasetFileMetaConentUpdate' => [
                'type' => 'object',
                'properties' => [
                    'FileName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Comment' => [
                        'type' => 'string',
                    ],
                    'FileCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FileUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'DataSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'FileType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ContentType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'MetaAttributes' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'DatasetFileMetaId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'SemanticIndexJobId' => [
                        'type' => 'string',
                    ],
                    'SemanticIndexUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FileFingerPrint' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DatasetFileMetaContentCreate' => [
                'type' => 'object',
                'properties' => [
                    'FileName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Uri' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Comment' => [
                        'type' => 'string',
                    ],
                    'FileCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FileUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => true,
                    ],
                    'FileFingerPrint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DataSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'FileType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ContentType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'MetaAttributes' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'string',
                        'deprecated' => false,
                    ],
                ],
            ],
            'DatasetFileMetaContentGet' => [
                'type' => 'object',
                'properties' => [
                    'FileName' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Uri' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Comment' => [
                        'type' => 'string',
                    ],
                    'FileCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FileUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                        'required' => false,
                    ],
                    'FileFingerPrint' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'DataSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'FileType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'ContentType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'MetaAttributes' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'DatasetFileMetaId' => [
                        'type' => 'string',
                    ],
                    'FileDir' => [
                        'type' => 'string',
                    ],
                    'TagUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'SemanticIndexJobId' => [
                        'type' => 'string',
                    ],
                    'SemanticIndexUpdateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'Status' => [
                        'type' => 'string',
                        'enum' => [
                            'ACTIVE',
                            'DELETED',
                        ],
                    ],
                ],
            ],
            'DatasetFileMetaResponse' => [
                'type' => 'object',
                'properties' => [
                    'DatasetFileMetaId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Result' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Uri' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'DatasetFileMetasStat' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Count' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'DatasetJob' => [
                'type' => 'object',
                'properties' => [
                    'DatasetJobId' => [
                        'type' => 'string',
                    ],
                    'JobAction' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'FinishTime' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'JobMode' => [
                        'type' => 'string',
                    ],
                    'JobSpec' => [
                        'type' => 'string',
                    ],
                    'Logs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'TotalFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CompletedFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FailedFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetVersion' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DatasetJobConfig' => [
                'type' => 'object',
                'properties' => [
                    'DatasetJobConfigId' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'ModifyTime' => [
                        'type' => 'string',
                    ],
                    'ConfigType' => [
                        'type' => 'string',
                    ],
                    'Config' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'DatasetVersion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DatasetLabel' => [
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
            'DatasetShareRelationship' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'SourceTenantId' => [
                        'type' => 'string',
                    ],
                    'SourceWorkspaceId' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'IsSecureMode' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'SharedAt' => [
                        'type' => 'string',
                    ],
                    'ExpiresAt' => [
                        'type' => 'string',
                    ],
                    'AllowedMountAccessLevels' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Extra' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DatasetVersion' => [
                'type' => 'object',
                'properties' => [
                    'VersionName' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Property' => [
                        'type' => 'string',
                    ],
                    'DataSourceType' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
                        'type' => 'string',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Label',
                        ],
                    ],
                    'Options' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'SourceId' => [
                        'type' => 'string',
                    ],
                    'DataCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DataSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MountAccess' => [
                        'type' => 'string',
                    ],
                    'ImportInfo' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Experiment' => [
                'type' => 'object',
                'properties' => [
                    'ExperimentId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'ArtifactUri' => [
                        'type' => 'string',
                    ],
                    'TensorboardLogUri' => [
                        'type' => 'string',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ExperimentLabel',
                        ],
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'LatestRun' => [
                        '$ref' => '#/components/schemas/Run',
                    ],
                ],
            ],
            'ExperimentLabel' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'ExperimentId' => [
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
            'LabelInfo' => [
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
            'LineageEntity' => [
                'type' => 'object',
                'properties' => [
                    'Attributes' => [
                        'type' => 'object',
                    ],
                    'EntityType' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'QualifiedName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LineageRelation' => [
                'type' => 'object',
                'properties' => [
                    'DestEntityQualifiedName' => [
                        'type' => 'string',
                    ],
                    'RelationshipGuid' => [
                        'type' => 'string',
                    ],
                    'SrcEntityQualifiedName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Model' => [
                'type' => 'object',
                'properties' => [
                    'ModelId' => [
                        'type' => 'string',
                    ],
                    'ModelName' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ModelDescription' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'LatestVersion' => [
                        '$ref' => '#/components/schemas/ModelVersion',
                    ],
                    'OrderNumber' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Origin' => [
                        'type' => 'string',
                    ],
                    'Domain' => [
                        'type' => 'string',
                    ],
                    'Task' => [
                        'type' => 'string',
                    ],
                    'ModelDoc' => [
                        'type' => 'string',
                    ],
                    'Provider' => [
                        'type' => 'string',
                    ],
                    'ModelType' => [
                        'type' => 'string',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Label',
                        ],
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Label',
                        ],
                    ],
                    'ExtraInfo' => [
                        'type' => 'object',
                    ],
                    'ParameterSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GmtLatestVersionModifiedTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelVersion' => [
                'type' => 'object',
                'properties' => [
                    'VersionName' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'Uri' => [
                        'type' => 'string',
                    ],
                    'VersionDescription' => [
                        'type' => 'string',
                    ],
                    'FormatType' => [
                        'type' => 'string',
                    ],
                    'FrameworkType' => [
                        'type' => 'string',
                    ],
                    'Options' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'SourceId' => [
                        'type' => 'string',
                    ],
                    'ApprovalStatus' => [
                        'type' => 'string',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'type' => 'string',
                                ],
                                'Key' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'Metrics' => [
                        'type' => 'object',
                    ],
                    'TrainingSpec' => [
                        'type' => 'object',
                    ],
                    'InferenceSpec' => [
                        'type' => 'object',
                    ],
                    'EvaluationSpec' => [
                        'type' => 'object',
                    ],
                    'CompressionSpec' => [
                        'type' => 'object',
                    ],
                    'ExtraInfo' => [
                        'type' => 'object',
                    ],
                    'DistillationSpec' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ModulePermissions' => [
                'type' => 'array',
                'items' => [
                    'type' => 'object',
                    'properties' => [
                        'ModuleName' => [
                            'type' => 'string',
                        ],
                        'PermissionType' => [
                            'type' => 'string',
                        ],
                        'Permissions' => [
                            'type' => 'array',
                            'items' => [
                                'type' => 'object',
                                'properties' => [
                                    'PermissionCodes' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'PermissionRules' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Accessibility' => [
                                                    'type' => 'string',
                                                ],
                                                'EntityAccessType' => [
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
            'Prompt' => [
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'ModifyTime' => [
                        'type' => 'string',
                    ],
                    'PromptName' => [
                        'type' => 'string',
                    ],
                    'FrameworkType' => [
                        'type' => 'string',
                    ],
                    'FrameworkContent' => [
                        'type' => 'string',
                    ],
                    'PromptId' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Relation' => [
                'type' => 'object',
                'properties' => [
                    'ErrMsg' => [
                        'type' => 'string',
                    ],
                    'LineageRelation' => [
                        '$ref' => '#/components/schemas/LineageRelation',
                    ],
                    'Result' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Relationship' => [
                'type' => 'object',
                'properties' => [
                    'Attributes' => [
                        'type' => 'object',
                    ],
                    'DataChannel' => [
                        'type' => 'string',
                    ],
                    'RelationshipGuid' => [
                        'type' => 'string',
                    ],
                    'RelationshipType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Run' => [
                'type' => 'object',
                'properties' => [
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'SourceId' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Params' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RunParam',
                        ],
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RunLabel',
                        ],
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Metrics' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RunMetric',
                        ],
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ExperimentId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'RunId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RunLabel' => [
                'type' => 'object',
                'properties' => [
                    'Value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'RunId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'RunMetric' => [
                'type' => 'object',
                'properties' => [
                    'Value' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                    ],
                    'Step' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Timestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'RunParam' => [
                'type' => 'object',
                'properties' => [
                    'Value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'Trial' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'TrialId' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'SourceId' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'ExperimentId' => [
                        'type' => 'string',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TrialLabel' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'TrialId' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateExperiment' => [
            'path' => '/api/v1/experiments',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/LabelInfo',
                                    'required' => false,
                                ],
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ArtifactUri' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PRIVATE',
                                    'PUBLIC',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateExperiment' => [
            'path' => '/api/v1/experiments/{ExperimentId}',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PRIVATE',
                                    'PUBLIC',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetExperiment' => [
            'path' => '/api/v1/experiments/{ExperimentId}',
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
                    'name' => 'ExperimentId',
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
            ],
        ],
        'ListExperiment' => [
            'path' => '/api/v1/experiments',
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
                    'name' => 'Name',
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
                [
                    'name' => 'Labels',
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
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                    'name' => 'Options',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'match_name_exactly' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteExperiment' => [
            'path' => '/api/v1/experiments/{ExperimentId}',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'SetExperimentLabels' => [
            'path' => '/api/v1/experiments/{ExperimentId}/labels',
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
                                    '$ref' => '#/components/schemas/LabelInfo',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteExperimentLabel' => [
            'path' => '/api/v1/experiments/{ExperimentId}/labels/{Key}',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateRun' => [
            'path' => '/api/v1/runs',
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
                            'Name' => [
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
                            'ExperimentId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'Params' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/RunParam',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRun' => [
            'path' => '/api/v1/runs/{RunId}',
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
                    'name' => 'RunId',
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
                            'Name' => [
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
                            'Params' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/RunParam',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRun' => [
            'path' => '/api/v1/runs/{RunId}',
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
                    'name' => 'RunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'ListRuns' => [
            'path' => '/api/v1/runs',
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
                    'name' => 'Name',
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
                [
                    'name' => 'ExperimentId',
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
                    'name' => 'GmtCreateTime',
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
                    'name' => 'PageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
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
        'DeleteRun' => [
            'path' => '/api/v1/runs/{RunId}',
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
                    'name' => 'RunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteRunLabel' => [
            'path' => '/api/v1/runs/{RunId}/labels/{Key}',
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
                    'name' => 'RunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'LogRunMetrics' => [
            'path' => '/api/v1/runs/{RunId}/metrics/action/log',
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
                    'name' => 'RunId',
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
                            'Metrics' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/RunMetric',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRunMetrics' => [
            'path' => '/api/v1/runs/{RunId}/metrics',
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
                    'name' => 'RunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddImage' => [
            'path' => '/api/v1/images',
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
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ImageUri' => [
                                'type' => 'string',
                                'required' => true,
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
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ImageId' => [
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
                        ],
                    ],
                ],
            ],
        ],
        'AddImageLabels' => [
            'path' => '/api/v1/images/{ImageId}/labels',
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
                    'name' => 'ImageId',
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
                            'Labels' => [
                                'type' => 'array',
                                'required' => true,
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
        'GetImage' => [
            'path' => '/api/v1/images/{ImageId}',
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
                    'name' => 'ImageId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'ListImageLabels' => [
            'path' => '/api/v1/image/labels',
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
                    'name' => 'LabelKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LabelFilter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageId',
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
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListImages' => [
            'path' => '/api/v1/images',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Query',
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
                    'name' => 'ImageUri',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RemoveImage' => [
            'path' => '/api/v1/images/{ImageId}',
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
                    'name' => 'ImageId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PublishImage' => [
            'path' => '/api/v1/images/{ImageId}/publish',
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
                    'name' => 'ImageId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveImageLabels' => [
            'path' => '/api/v1/images/{ImageId}/labels/{LabelKey}',
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
                    'name' => 'ImageId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LabelKey',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateImageBuild' => [
            'path' => '/api/v1/imagebuilds',
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
                    'name' => 'ClientToken',
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
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Resource' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'EcsSpec' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ResourceConfig' => [
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
                                        ],
                                    ],
                                    'ResourceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ResourceType' => [
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
                                    'ExtendedCidrs' => [
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
                            'TargetRegistry' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'OverwriteImageTag' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'BuildConfig' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Dockerfile' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'BuildType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'RegistryAuths' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'RegionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ImageBuildJobName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Image' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Uri' => [
                                        'type' => 'string',
                                        'required' => true,
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
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPermissions' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/permissions',
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
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetPermission' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/permissions/{PermissionCode}',
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
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PermissionCode',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'Creator',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Resource',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Option',
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
            ],
        ],
        'DeleteWorkspaceResource' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/resources',
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
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'WorkspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Option',
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
                    'name' => 'Labels',
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
            ],
        ],
        'UpdateWorkspaceResource' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/resources',
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
                    'name' => 'WorkspaceId',
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
                            'IsDefault' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ProductType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'GroupName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => false,
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
                            'ResourceIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Spec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListResources' => [
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
                    'name' => 'ProductTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'ResourceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Option',
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
                    'name' => 'ResourceTypes',
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
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VerboseFields',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateWorkspaceResource' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/resources',
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
                    'name' => 'WorkspaceId',
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
                            'Resources' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ProductType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'EnvType' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'WorkspaceId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'IsDefault' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'Quotas' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Id' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Spec' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                        'GroupName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ResourceType' => [
                                            'type' => 'string',
                                            'required' => false,
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
                                    ],
                                ],
                            ],
                            'Option' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddMemberRole' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/members/{MemberId}/roles/{RoleName}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveMemberRole' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/members/{MemberId}/roles/{RoleName}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteMembers' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/members',
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
                    'name' => 'WorkspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MemberIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMember' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/member',
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
                    'in' => 'path',
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
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMembers' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/members',
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
                    'name' => 'Roles',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MemberName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateMember' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/members',
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
                    'name' => 'WorkspaceId',
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
                            'Members' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Roles' => [
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
                        ],
                    ],
                ],
            ],
        ],
        'UpdateConfigs' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/configs',
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
                    'name' => 'WorkspaceId',
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
                            'Configs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ConfigKey' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ConfigValue' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'CategoryName' => [
                                            'type' => 'string',
                                            'required' => false,
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
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetConfig' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/config',
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
                    'name' => 'WorkspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CategoryName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigKey',
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
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConfigs' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/configs',
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
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CategoryName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConfigKeys',
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
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteConfig' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/configs/{ConfigKey}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ConfigKey',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CategoryName',
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
            ],
        ],
        'UpdateConfig' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/config',
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
                    'name' => 'WorkspaceId',
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
                            'ConfigKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ConfigValue' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CategoryName' => [
                                'type' => 'string',
                                'required' => false,
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
                        ],
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
            'deprecated' => false,
            'parameters' => [
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
                    'name' => 'WorkspaceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModuleList',
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
                    'name' => 'Option',
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
                    'name' => 'Fields',
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
                    'name' => 'ResourceGroupId',
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
                            'WorkspaceName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EnvTypes' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'ResourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetWorkspace' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}',
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
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'DeleteWorkspace' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateWorkspace' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}',
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
                    'name' => 'WorkspaceId',
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
                            'DisplayName' => [
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
            ],
        ],
        'GetDefaultWorkspace' => [
            'path' => '/api/v1/defaultWorkspaces',
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
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateDefaultWorkspace' => [
            'path' => '/api/v1/defaultWorkspaces',
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
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListWorkspaceUsers' => [
            'path' => '/api/v1/workspaces/{WorkspaceId}/users',
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
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListQuotas' => [
            'path' => '/api/v1/quotas',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDatasetFileMetasStatistics' => [
            'path' => '/api/v1/statistics/datasets/{DatasetId}/datasetfilemetas',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetVersion',
                    'in' => 'query',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AggregateBy',
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
        'StopDatasetJob' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobs/{DatasetJobId}/action/stop',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetJobId',
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
                            'DatasetVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDatasetJob' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobs/{DatasetJobId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetVersion',
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
        'CreateDatasetFileMetas' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetfilemetas',
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
                    'name' => 'DatasetId',
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
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DatasetVersion' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DatasetFileMetas' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/DatasetFileMetaContentCreate',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDatasetJob' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobs/{DatasetJobId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetJobId',
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
                            'DatasetVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
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
            ],
        ],
        'ListDatasetJobs' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobs',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetVersion',
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
                [
                    'name' => 'JobAction',
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
                    'name' => 'Status',
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
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteDatasetJobConfig' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobconfigs/{DatasetJobConfigId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetJobConfigId',
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
            ],
        ],
        'DeleteDatasetJob' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobs/{DatasetJobId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetJobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateDatasetJobConfig' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobconfigs/{DatasetJobConfigId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetJobConfigId',
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
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ConfigType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Config' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDatasetFileMetas' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetfilemetas',
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
                    'name' => 'DatasetId',
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
                            'DatasetVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DatasetFileMetas' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/DatasetFileMetaConentUpdate',
                                    'required' => false,
                                ],
                            ],
                            'TagJobId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDatasetJobConfigs' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobconfigs/',
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
                    'name' => 'DatasetId',
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
                    'name' => 'ConfigType',
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
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDatasetFileMetas' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetfilemetas',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetVersion',
                    'in' => 'query',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryText',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TopK',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '5000',
                    ],
                ],
                [
                    'name' => 'ScoreThreshold',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => true,
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
                    'name' => 'EndFileUpdateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartFileUpdateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryImage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ThumbnailMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryTagsIncludeAll',
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
                    'name' => 'QueryTagsIncludeAny',
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
                    'name' => 'QueryTagsExclude',
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
                    'name' => 'QueryFileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryFileDir',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryFileTypeIncludeAny',
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
                    'name' => 'QueryContentTypeIncludeAny',
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
                    'name' => 'StartTagUpdateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTagUpdateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
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
                    'name' => 'QueryExpression',
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
                        'enum' => [
                            'ACTIVE',
                            'ALL',
                            'DELETED',
                        ],
                    ],
                ],
            ],
        ],
        'GetDatasetJobConfig' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobconfigs/{DatasetJobConfigId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetJobConfigId',
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
            ],
        ],
        'GetDatasetFileMeta' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetfilemetas/{DatasetFileMetaId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetFileMetaId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetVersion',
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
        'DeleteDatasetFileMetas' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetfilemetas',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetVersion',
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
                [
                    'name' => 'DatasetFileMetaIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDatasetJobConfig' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobconfigs',
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
                    'name' => 'DatasetId',
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
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ConfigType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Config' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DatasetVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDatasetJob' => [
            'path' => '/api/v1/datasets/{DatasetId}/datasetjobs',
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
                    'name' => 'DatasetId',
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
                            'DatasetVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'JobAction' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'JobMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'JobSpec' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDataset' => [
            'path' => '/api/v1/datasets',
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
                                'required' => true,
                            ],
                            'Property' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DataSourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Uri' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DataType' => [
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
                            'SourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ProviderType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Provider' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SourceDatasetId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SourceDatasetVersion' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VersionDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VersionLabels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'DataSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '999999999999',
                            ],
                            'DataCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '999999999999',
                            ],
                            'MountAccessReadWriteRoleIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'ImportInfo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Edition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDataset' => [
            'path' => '/api/v1/datasets/{DatasetId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateDataset' => [
            'path' => '/api/v1/datasets/{DatasetId}',
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
                    'name' => 'DatasetId',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Edition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MountAccessReadWriteRoleIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SharingConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SharedTo' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/DatasetShareRelationship',
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
        'PublishDataset' => [
            'path' => '/api/v1/datasets/{DatasetId}/publish',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDatasets' => [
            'path' => '/api/v1/datasets',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Properties',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DataSourceTypes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DataTypes',
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
                    'name' => 'SourceTypes',
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
                [
                    'name' => 'Label',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Provider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceDatasetId',
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
                    'name' => 'ShareScope',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Edition',
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
        'DeleteDataset' => [
            'path' => '/api/v1/datasets/{DatasetId}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDatasetLabels' => [
            'path' => '/api/v1/datasets/{DatasetId}/labels',
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
                    'name' => 'DatasetId',
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
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDatasetLabels' => [
            'path' => '/api/v1/datasets/{DatasetId}/labels',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LabelKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDatasetVersion' => [
            'path' => '/api/v1/datasets/{DatasetId}/versions',
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
                    'name' => 'DatasetId',
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
                            'Property' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DataSourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Uri' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'SourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'DataCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ImportInfo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDatasetVersion' => [
            'path' => '/api/v1/datasets/{DatasetId}/versions/{VersionName}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDatasetVersions' => [
            'path' => '/api/v1/datasets/{DatasetId}/versions',
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
                    'name' => 'DatasetId',
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
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LabelKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LabelValues',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Properties',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceTypes',
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
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateDatasetVersion' => [
            'path' => '/api/v1/datasets/{DatasetId}/versions/{VersionName}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
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
                            'Options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'DataCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDatasetVersion' => [
            'path' => '/api/v1/datasets/{DatasetId}/versions/{VersionName}',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDatasetVersionLabels' => [
            'path' => '/api/v1/datasets/{DatasetId}/versions/{VersionName}/labels',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
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
        'CreateDatasetVersionLabels' => [
            'path' => '/api/v1/datasets/{DatasetId}/versions/{VersionName}/labels',
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
                    'name' => 'DatasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
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
                            'Labels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateConnection' => [
            'path' => '/api/v1/connections',
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
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Configs' => [
                                'type' => 'object',
                                'required' => true,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'ConnectionName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ConnectionType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Secrets' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceMeta' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'InstanceName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'InstanceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Extra' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Models' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Model' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DisplayName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ModelType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ToolCall' => [
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
        ],
        'GetConnection' => [
            'path' => '/api/v1/connections/{ConnectionId}',
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
                    'name' => 'ConnectionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EncryptOption',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateConnection' => [
            'path' => '/api/v1/connections/{ConnectionId}',
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
                    'name' => 'ConnectionId',
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
                            'Configs' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Secrets' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Models' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Model' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DisplayName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ModelType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ToolCall' => [
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
        ],
        'ListConnections' => [
            'path' => '/api/v1/connections',
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
                    'name' => 'WorkspaceId',
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
                    'name' => 'MaxResults',
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
                    'name' => 'ConnectionIds',
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
                    'name' => 'ConnectionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConnectionTypes',
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
                    'name' => 'EncryptOption',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Model',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModelTypes',
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
                    'name' => 'ToolCall',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Creator',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteConnection' => [
            'path' => '/api/v1/connections/{ConnectionId}',
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
                    'name' => 'ConnectionId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateCodeSource' => [
            'path' => '/api/v1/codesources',
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
                                'required' => true,
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeRepo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeRepoUserName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeRepoAccessToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeBranch' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MountPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeCommit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteCodeSource' => [
            'path' => '/api/v1/codesources/{CodeSourceId}',
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
                    'name' => 'CodeSourceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PublishCodeSource' => [
            'path' => '/api/v1/codesources/{CodeSourceId}/publish',
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
                    'name' => 'CodeSourceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateCodeSource' => [
            'path' => '/api/v1/codesources/{CodeSourceId}',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'CodeSourceId',
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
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeRepo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeBranch' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeCommit' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeRepoUserName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CodeRepoAccessToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MountPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetCodeSource' => [
            'path' => '/api/v1/codesources/{CodeSourceId}',
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
                    'name' => 'CodeSourceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCodeSources' => [
            'path' => '/api/v1/codesources',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateModel' => [
            'path' => '/api/v1/models',
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
                            'ModelName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'Tag' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'ModelDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Origin' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Task' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ModelDoc' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrderNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ModelType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ExtraInfo' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'ParameterSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateModel' => [
            'path' => '/api/v1/models/{ModelId}',
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
                    'name' => 'ModelId',
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
                            'ModelName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ModelDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Origin' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Task' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ModelDoc' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrderNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ModelType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ExtraInfo' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'ParameterSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetModel' => [
            'path' => '/api/v1/models/{ModelId}',
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
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListModels' => [
            'path' => '/api/v1/models',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModelName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Label',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Provider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Task',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Origin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModelType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Collections',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                [
                    'name' => 'Conditions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Column' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Operator' => [
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
        'DeleteModel' => [
            'path' => '/api/v1/models/{ModelId}',
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
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateModelVersion' => [
            'path' => '/api/v1/models/{ModelId}/versions',
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
                            'VersionName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Uri' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                            'VersionDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FormatType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'FrameworkType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Metrics' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'TrainingSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'InferenceSpec' => [
                                'type' => 'object',
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
                            'ApprovalStatus' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EvaluationSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'CompressionSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'ExtraInfo' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'DistillationSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateModelVersion' => [
            'path' => '/api/v1/models/{ModelId}/versions/{VersionName}',
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
                            'VersionDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Metrics' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'TrainingSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'InferenceSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'Options' => [
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
                            'ApprovalStatus' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'EvaluationSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'CompressionSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'ExtraInfo' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'DistillationSpec' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetModelVersion' => [
            'path' => '/api/v1/models/{ModelId}/versions/{VersionName}',
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
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListModelVersions' => [
            'path' => '/api/v1/models/{ModelId}/versions',
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
                    'name' => 'VersionName',
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
                    'name' => 'FrameworkType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'Label',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApprovalStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteModelVersion' => [
            'path' => '/api/v1/models/{ModelId}/versions/{VersionName}',
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
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateModelLabels' => [
            'path' => '/api/v1/models/{ModelId}/labels',
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
                    'name' => 'ModelId',
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
                            'Labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteModelLabels' => [
            'path' => '/api/v1/models/{ModelId}/labels',
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
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LabelKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateModelVersionLabels' => [
            'path' => '/api/v1/models/{ModelId}/versions/{VersionName}/labels',
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
                                    '$ref' => '#/components/schemas/Label',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteModelVersionLabels' => [
            'path' => '/api/v1/models/{ModelId}/versions/{VersionName}/labels',
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
                    'name' => 'ModelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'LabelKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SetUserConfigs' => [
            'path' => '/api/v1/userconfigs',
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
                            'Configs' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ConfigKey' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ConfigValue' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'CategoryName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Scope' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUserConfig' => [
            'path' => '/api/v1/userconfigs/{CategoryName}',
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
                    'name' => 'ConfigKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CategoryName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListUserConfigs' => [
            'path' => '/api/v1/userconfigs',
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
                    'name' => 'ConfigKeys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CategoryNames',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListProducts' => [
            'path' => '/api/v1/products',
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
                    'name' => 'ProductCodes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceCodes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
        ],
        'CreateProductOrders' => [
            'path' => '/api/v1/productorders',
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
                            'AutoPay' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Products' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'AutoRenew' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'ProductCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ChargeType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'OrderType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'PricingCycle' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Duration' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'InstanceProperties' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Code' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
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
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AcceptDataworksEvent' => [
            'path' => '/api/v1/workspaces/action/acceptdataworksevent',
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
                            'MessageId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Data' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ChangeResourceGroup' => [
            'path' => '/resourcegroups/action/changeresourcegroup',
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
                            'ResourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NewResourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFeatures' => [
            'path' => '/api/v1/features',
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
                    'name' => 'Names',
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
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'aiworkspace.ap-northeast-1.aliyuncs.com	',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'aiworkspace.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'aiworkspace.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'aiworkspace.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'aiworkspace.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'aiworkspace.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'aiworkspace.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'aiworkspace.cn-guangzhou.aliyuncs.com	',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'aiworkspace.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'aiworkspace.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'aiworkspace.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'aiworkspace.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'aiworkspace.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'aiworkspace.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'aiworkspace.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'aiworkspace.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'aiworkspace.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'aiworkspace.ap-northeast-2.aliyuncs.com',
        ],
    ],
];