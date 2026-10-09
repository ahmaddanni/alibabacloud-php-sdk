<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'ververica',
        'version' => '2022-07-18',
    ],
    'components' => [
        'schemas' => [
            'AiModel' => [
                'type' => 'object',
                'properties' => [
                    'outputSchema' => [
                        '$ref' => '#/components/schemas/Schema',
                    ],
                    'inputSchema' => [
                        '$ref' => '#/components/schemas/Schema',
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                    ],
                ],
            ],
            'Artifact' => [
                'type' => 'object',
                'properties' => [
                    'sqlArtifact' => [
                        '$ref' => '#/components/schemas/SqlArtifact',
                    ],
                    'jarArtifact' => [
                        '$ref' => '#/components/schemas/JarArtifact',
                    ],
                    'pythonArtifact' => [
                        '$ref' => '#/components/schemas/PythonArtifact',
                    ],
                    'kind' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'SQLSCRIPT',
                            'JAR',
                            'PYTHON',
                        ],
                    ],
                ],
            ],
            'AsyncDraftDeployResult' => [
                'type' => 'object',
                'properties' => [
                    'ticketStatus' => [
                        'type' => 'string',
                    ],
                    'artifactValidationDetail' => [
                        '$ref' => '#/components/schemas/ValidateStatementResult',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AsyncDraftValidateResult' => [
                'type' => 'object',
                'properties' => [
                    'ticketStatus' => [
                        'type' => 'string',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'draftValidationDetail' => [
                        '$ref' => '#/components/schemas/DraftValidationDetail',
                    ],
                ],
            ],
            'AsyncResourcePlanOperationResult' => [
                'type' => 'object',
                'properties' => [
                    'ticketStatus' => [
                        'type' => 'string',
                        'enum' => [
                            'INIT',
                            'EXECUTING',
                            'FINISHED',
                            'FAILED',
                        ],
                    ],
                    'plan' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BasicResourceSetting' => [
                'type' => 'object',
                'properties' => [
                    'parallelism' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'jobmanagerResourceSettingSpec' => [
                        '$ref' => '#/components/schemas/BasicResourceSettingSpec',
                    ],
                    'taskmanagerResourceSettingSpec' => [
                        '$ref' => '#/components/schemas/BasicResourceSettingSpec',
                    ],
                ],
            ],
            'BasicResourceSettingSpec' => [
                'type' => 'object',
                'properties' => [
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'memory' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BatchResourceSetting' => [
                'type' => 'object',
                'properties' => [
                    'maxSlot' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'basicResourceSetting' => [
                        '$ref' => '#/components/schemas/BasicResourceSetting',
                    ],
                ],
            ],
            'BriefDeploymentTarget' => [
                'type' => 'object',
                'properties' => [
                    'mode' => [
                        'type' => 'string',
                        'enum' => [
                            'PER_JOB',
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BriefResourceSetting' => [
                'type' => 'object',
                'properties' => [
                    'flinkConf' => [
                        'type' => 'object',
                    ],
                    'batchResourceSetting' => [
                        '$ref' => '#/components/schemas/BatchResourceSetting',
                    ],
                    'streamingResourceSetting' => [
                        '$ref' => '#/components/schemas/StreamingResourceSetting',
                    ],
                ],
            ],
            'Catalog' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'properties' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'extensionConf' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Cell' => [
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Connector' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'source' => [
                        'type' => 'boolean',
                    ],
                    'sink' => [
                        'type' => 'boolean',
                    ],
                    'lookup' => [
                        'type' => 'boolean',
                    ],
                    'properties' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Property',
                        ],
                    ],
                    'supportedFormats' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'dependencies' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'creatorName' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateUdfArtifactResult' => [
                'type' => 'object',
                'properties' => [
                    'createSuccess' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'udfArtifact' => [
                        '$ref' => '#/components/schemas/UdfArtifact',
                    ],
                    'collidingClasses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UdfClass',
                        ],
                    ],
                ],
            ],
            'Database' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'properties' => [
                        'type' => 'object',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeleteUdfArtifactResult' => [
                'type' => 'object',
                'properties' => [
                    'deleteSuccess' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'referencedClasses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UdfClass',
                        ],
                    ],
                ],
            ],
            'Deployment' => [
                'type' => 'object',
                'properties' => [
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'engineVersion' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'creatorName' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                    'deploymentHasChanged' => [
                        'type' => 'boolean',
                    ],
                    'artifact' => [
                        '$ref' => '#/components/schemas/Artifact',
                    ],
                    'flinkConf' => [
                        'type' => 'object',
                    ],
                    'logging' => [
                        '$ref' => '#/components/schemas/Logging',
                    ],
                    'jobSummary' => [
                        '$ref' => '#/components/schemas/JobSummary',
                    ],
                    'deploymentTarget' => [
                        '$ref' => '#/components/schemas/BriefDeploymentTarget',
                    ],
                    'executionMode' => [
                        'type' => 'string',
                        'enum' => [
                            'STREAMING',
                            'BATCH',
                        ],
                    ],
                    'streamingResourceSetting' => [
                        '$ref' => '#/components/schemas/StreamingResourceSetting',
                    ],
                    'batchResourceSetting' => [
                        '$ref' => '#/components/schemas/BatchResourceSetting',
                    ],
                    'labels' => [
                        'type' => 'object',
                    ],
                    'localVariables' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LocalVariable',
                        ],
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'modifiedAt' => [
                        'type' => 'string',
                    ],
                    'referencedDeploymentDraftId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeploymentDraft' => [
                'type' => 'object',
                'properties' => [
                    'deploymentDraftId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'parentId' => [
                        'type' => 'string',
                    ],
                    'referencedDeploymentId' => [
                        'type' => 'string',
                    ],
                    'executionMode' => [
                        'type' => 'string',
                        'enum' => [
                            'STREAMING',
                            'BATCH',
                        ],
                    ],
                    'artifact' => [
                        '$ref' => '#/components/schemas/Artifact',
                    ],
                    'engineVersion' => [
                        'type' => 'string',
                    ],
                    'localVariables' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LocalVariable',
                        ],
                    ],
                    'labels' => [
                        'type' => 'object',
                    ],
                    'lock' => [
                        '$ref' => '#/components/schemas/Lock',
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'creatorName' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modifiedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DeploymentRestoreStrategy' => [
                'type' => 'object',
                'properties' => [
                    'kind' => [
                        'type' => 'string',
                        'enum' => [
                            'NONE',
                            'LATEST_SAVEPOINT',
                            'FROM_SAVEPOINT',
                            'LATEST_STATE',
                        ],
                    ],
                    'allowNonRestoredState' => [
                        'type' => 'boolean',
                    ],
                    'jobStartTimeInMs' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'savepointId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeploymentTarget' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'quota' => [
                        '$ref' => '#/components/schemas/ResourceQuota',
                    ],
                ],
            ],
            'DraftDeployParams' => [
                'type' => 'object',
                'properties' => [
                    'skipValidate' => [
                        'type' => 'boolean',
                    ],
                    'deploymentTarget' => [
                        '$ref' => '#/components/schemas/BriefDeploymentTarget',
                    ],
                    'deploymentDraftId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DraftDeployResult' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'artifactValidationDetail' => [
                        '$ref' => '#/components/schemas/ValidateStatementResult',
                    ],
                ],
            ],
            'DraftMetaInfoErrorDetail' => [
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'type' => 'string',
                    ],
                    'reason' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DraftValidateParams' => [
                'type' => 'object',
                'properties' => [
                    'deploymentDraftId' => [
                        'type' => 'string',
                    ],
                    'deploymentTargetName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DraftValidationDetail' => [
                'type' => 'object',
                'properties' => [
                    'draftMetaInfoErrorDetails' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DraftMetaInfoErrorDetail',
                        ],
                    ],
                    'sqlValidationResult' => [
                        'type' => 'string',
                    ],
                    'sqlErrorDetail' => [
                        '$ref' => '#/components/schemas/ValidationErrorDetails',
                    ],
                ],
            ],
            'Edge' => [
                'type' => 'object',
                'properties' => [
                    'tableLineage' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Relation',
                        ],
                    ],
                    'columnLineage' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Relation',
                        ],
                    ],
                ],
            ],
            'EditableNamespace' => [
                'type' => 'object',
                'properties' => [
                    'Role' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Namespace' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EngineVersionMetadata' => [
                'type' => 'object',
                'properties' => [
                    'engineVersion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'STABLE',
                            'BETA',
                            'DEPRECATED',
                            'EXPIRED',
                        ],
                    ],
                    'features' => [
                        '$ref' => '#/components/schemas/EngineVersionSupportedFeatures',
                    ],
                ],
            ],
            'EngineVersionMetadataIndex' => [
                'type' => 'object',
                'properties' => [
                    'defaultEngineVersion' => [
                        'type' => 'string',
                    ],
                    'engineVersionMetadata' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/EngineVersionMetadata',
                        ],
                    ],
                ],
            ],
            'EngineVersionSupportedFeatures' => [
                'type' => 'object',
                'properties' => [
                    'useForSqlDeployments' => [
                        'type' => 'boolean',
                    ],
                    'supportNativeSavepoint' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ErrorDetails' => [
                'type' => 'object',
                'properties' => [
                    'lineNumber' => [
                        'type' => 'string',
                    ],
                    'columnNumber' => [
                        'type' => 'string',
                    ],
                    'endLineNumber' => [
                        'type' => 'string',
                    ],
                    'endColumnNumber' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'invalidflinkConf' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Event' => [
                'type' => 'object',
                'properties' => [
                    'eventId' => [
                        'type' => 'string',
                    ],
                    'jobId' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'eventName' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ExpertResourceSetting' => [
                'type' => 'object',
                'properties' => [
                    'jobmanagerResourceSettingSpec' => [
                        '$ref' => '#/components/schemas/BasicResourceSettingSpec',
                    ],
                    'resourcePlan' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FetchResult' => [
                'type' => 'object',
                'properties' => [
                    'resultType' => [
                        'type' => 'string',
                    ],
                    'resultMessage' => [
                        'type' => 'string',
                    ],
                    'tableResults' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TableResult',
                        ],
                    ],
                ],
            ],
            'FlinkConf' => [
                'type' => 'object',
            ],
            'Folder' => [
                'type' => 'object',
                'properties' => [
                    'folderId' => [
                        'type' => 'string',
                    ],
                    'parentId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'subFolder' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SubFolder',
                        ],
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modifiedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Function' => [
                'type' => 'object',
                'properties' => [
                    'gmtModified' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'functionLanguage' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'functionType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'GetLineageInfoParams' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'depth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'idType' => [
                        'type' => 'string',
                        'enum' => [
                            'TABLE',
                            'JOB',
                        ],
                    ],
                    'isColumnLevel' => [
                        'type' => 'boolean',
                    ],
                    'direction' => [
                        'type' => 'string',
                        'enum' => [
                            'UPSTREAM',
                            'DOWNSTREAM',
                            'BOTH',
                        ],
                    ],
                    'isTemporary' => [
                        'type' => 'boolean',
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetPreSignedUrlForObjectResult' => [
                'type' => 'object',
                'properties' => [
                    'preSignedUrl' => [
                        'type' => 'string',
                    ],
                    'jarUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HotUpdateJobFailureInfo' => [
                'type' => 'object',
                'properties' => [
                    'reason' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'failureSeverity' => [
                        'type' => 'string',
                        'enum' => [
                            'CRITICAL',
                            'LOW',
                        ],
                    ],
                ],
            ],
            'HotUpdateJobParams' => [
                'type' => 'object',
                'properties' => [
                    'rescaleJobParam' => [
                        '$ref' => '#/components/schemas/RescaleJobParam',
                    ],
                    'updateJobConfigParam' => [
                        '$ref' => '#/components/schemas/UpdateJobConfigParam',
                    ],
                ],
            ],
            'HotUpdateJobResult' => [
                'type' => 'object',
                'properties' => [
                    'jobHotUpdateId' => [
                        'type' => 'string',
                    ],
                    'jobId' => [
                        'type' => 'string',
                    ],
                    'targetResourceSetting' => [
                        '$ref' => '#/components/schemas/BriefResourceSetting',
                    ],
                    'hotUpdateParams' => [
                        '$ref' => '#/components/schemas/HotUpdateJobParams',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/HotUpdateJobStatus',
                    ],
                ],
            ],
            'HotUpdateJobStatus' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'string',
                        'enum' => [
                            'INIT',
                            'HOT_UPDATING',
                            'FAILED',
                            'HOT_UPDATED',
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'failure' => [
                        '$ref' => '#/components/schemas/HotUpdateJobFailureInfo',
                    ],
                ],
            ],
            'JarArtifact' => [
                'type' => 'object',
                'properties' => [
                    'jarUri' => [
                        'type' => 'string',
                    ],
                    'entryClass' => [
                        'type' => 'string',
                    ],
                    'mainArgs' => [
                        'type' => 'string',
                    ],
                    'additionalDependencies' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Job' => [
                'type' => 'object',
                'properties' => [
                    'jobId' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'deploymentName' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'executionMode' => [
                        'type' => 'string',
                        'enum' => [
                            'STREAMING',
                            'BATCH',
                        ],
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'creatorName' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'engineVersion' => [
                        'type' => 'string',
                    ],
                    'flinkConf' => [
                        'type' => 'object',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/JobStatus',
                    ],
                    'metric' => [
                        '$ref' => '#/components/schemas/JobMetric',
                    ],
                    'sessionClusterName' => [
                        'type' => 'string',
                    ],
                    'artifact' => [
                        '$ref' => '#/components/schemas/Artifact',
                    ],
                    'logging' => [
                        '$ref' => '#/components/schemas/Logging',
                    ],
                    'batchResourceSetting' => [
                        '$ref' => '#/components/schemas/BatchResourceSetting',
                    ],
                    'streamingResourceSetting' => [
                        '$ref' => '#/components/schemas/StreamingResourceSetting',
                    ],
                    'restoreStrategy' => [
                        '$ref' => '#/components/schemas/DeploymentRestoreStrategy',
                    ],
                    'userFlinkConf' => [
                        '$ref' => '#/components/schemas/FlinkConf',
                    ],
                    'localVariables' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LocalVariable',
                        ],
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'modifiedAt' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JobDiagnosis' => [
                'type' => 'object',
                'properties' => [
                    'symptoms' => [
                        '$ref' => '#/components/schemas/JobDiagnosisSymptoms',
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'riskLevel' => [
                        'type' => 'string',
                    ],
                    'diagnoseId' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'diagnoseTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'JobDiagnosisSymptom' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'recommendation' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JobDiagnosisSymptoms' => [
                'type' => 'object',
                'properties' => [
                    'autopilot' => [
                        '$ref' => '#/components/schemas/JobDiagnosisSymptom',
                    ],
                    'startup' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobDiagnosisSymptom',
                        ],
                    ],
                    'runtime' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobDiagnosisSymptom',
                        ],
                    ],
                    'troubleshooting' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobDiagnosisSymptom',
                        ],
                    ],
                    'state' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobDiagnosisSymptom',
                        ],
                    ],
                    'others' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobDiagnosisSymptom',
                        ],
                    ],
                ],
            ],
            'JobFailure' => [
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'type' => 'string',
                    ],
                    'reason' => [
                        'type' => 'string',
                    ],
                    'failedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'JobInfo' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'properties' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'JobMetric' => [
                'type' => 'object',
                'properties' => [
                    'totalMemoryByte' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalCpu' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'JobStartParameters' => [
                'type' => 'object',
                'properties' => [
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'restoreStrategy' => [
                        '$ref' => '#/components/schemas/DeploymentRestoreStrategy',
                    ],
                    'resourceQueueName' => [
                        'type' => 'string',
                    ],
                    'localVariables' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LocalVariable',
                        ],
                    ],
                    'jobId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JobStatus' => [
                'type' => 'object',
                'properties' => [
                    'running' => [
                        '$ref' => '#/components/schemas/JobStatusRunning',
                    ],
                    'riskLevel' => [
                        'type' => 'string',
                    ],
                    'failure' => [
                        '$ref' => '#/components/schemas/JobFailure',
                    ],
                    'currentJobStatus' => [
                        'type' => 'string',
                        'enum' => [
                            'STARTING',
                            'RUNNING',
                            'CANCELLING',
                            'FAILED',
                            'CANCELLED',
                            'FINISHED',
                        ],
                    ],
                    'healthScore' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'JobStatusRunning' => [
                'type' => 'object',
                'properties' => [
                    'observedFlinkJobRestarts' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'observedFlinkJobStatus' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JobSummary' => [
                'type' => 'object',
                'properties' => [
                    'starting' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'running' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'cancelling' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'cancelled' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'finished' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'failed' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'LineageColumn' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'columnName' => [
                        'type' => 'string',
                    ],
                    'nullable' => [
                        'type' => 'boolean',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'columnType' => [
                        'type' => 'string',
                    ],
                    'columnNativeType' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modifiedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LineageInfo' => [
                'type' => 'object',
                'properties' => [
                    'nodes' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Node',
                        ],
                    ],
                    'edges' => [
                        '$ref' => '#/components/schemas/Edge',
                    ],
                    'jobInfos' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobInfo',
                        ],
                    ],
                ],
            ],
            'LineageTable' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'with' => [
                        'type' => 'object',
                    ],
                    'properties' => [
                        'type' => 'object',
                    ],
                    'columns' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LineageColumn',
                        ],
                    ],
                ],
            ],
            'LocalVariable' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Lock' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'holderId' => [
                        'type' => 'string',
                    ],
                    'holderName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Log4jLogger' => [
                'type' => 'object',
                'properties' => [
                    'loggerName' => [
                        'type' => 'string',
                    ],
                    'loggerLevel' => [
                        'type' => 'string',
                        'enum' => [
                            'TRACE',
                            'DEBUG',
                            'INFO',
                            'WARN',
                            'ERROR',
                        ],
                    ],
                ],
            ],
            'LogReservePolicy' => [
                'type' => 'object',
                'properties' => [
                    'openHistory' => [
                        'type' => 'boolean',
                    ],
                    'expirationDays' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Logging' => [
                'type' => 'object',
                'properties' => [
                    'loggingProfile' => [
                        'type' => 'string',
                        'enum' => [
                            'default',
                            'oss',
                        ],
                    ],
                    'log4j2ConfigurationTemplate' => [
                        'type' => 'string',
                    ],
                    'log4jLoggers' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Log4jLogger',
                        ],
                    ],
                    'logReservePolicy' => [
                        '$ref' => '#/components/schemas/LogReservePolicy',
                    ],
                ],
            ],
            'Member' => [
                'type' => 'object',
                'properties' => [
                    'member' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetadataInfo' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'virtual' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Node' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'catalogName' => [
                        'type' => 'string',
                    ],
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'isTemporary' => [
                        'type' => 'boolean',
                    ],
                    'connector' => [
                        'type' => 'string',
                    ],
                    'tables' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LineageTable',
                        ],
                    ],
                ],
            ],
            'NodeExecutionContextDTO' => [
                'type' => 'object',
                'properties' => [
                    'context' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'NodeExecutionStatusDTO' => [
                'type' => 'object',
                'properties' => [
                    'executionId' => [
                        'type' => 'string',
                    ],
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'resourceId' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PeriodicSchedulingPolicy' => [
                'type' => 'object',
                'properties' => [
                    'onlyOnceTriggerTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'onlyOnceTriggerTimeIsExpired' => [
                        'type' => 'boolean',
                    ],
                    'periodicTriggerTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'periodicSchedulingLevel' => [
                        'type' => 'string',
                    ],
                    'periodicSchedulingValues' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                    'isFinished' => [
                        'type' => 'boolean',
                    ],
                    'resourceSetting' => [
                        '$ref' => '#/components/schemas/BriefResourceSetting',
                    ],
                ],
            ],
            'PrimaryKey' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'constraintName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'columns' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'constraintType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'enforced' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
            'Property' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'defaultValue' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'required' => [
                        'type' => 'boolean',
                    ],
                    'definesFormat' => [
                        'type' => 'boolean',
                    ],
                    'sensitive' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'PythonArtifact' => [
                'type' => 'object',
                'properties' => [
                    'pythonArtifactUri' => [
                        'type' => 'string',
                    ],
                    'mainArgs' => [
                        'type' => 'string',
                    ],
                    'entryModule' => [
                        'type' => 'string',
                    ],
                    'additionalDependencies' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'additionalPythonLibraries' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'additionalPythonArchives' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Relation' => [
                'type' => 'object',
                'properties' => [
                    'source' => [
                        'type' => 'string',
                    ],
                    'destination' => [
                        'type' => 'string',
                    ],
                    'jobId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RescaleJobParam' => [
                'type' => 'object',
                'properties' => [
                    'jobParallelism' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Resource' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'fixedResource' => [
                        '$ref' => '#/components/schemas/ResourceSpec',
                        'required' => true,
                    ],
                    'elasticResource' => [
                        '$ref' => '#/components/schemas/ResourceSpec',
                    ],
                ],
            ],
            'ResourceQuota' => [
                'type' => 'object',
                'properties' => [
                    'limit' => [
                        '$ref' => '#/components/schemas/ResourceSpec',
                    ],
                    'used' => [
                        '$ref' => '#/components/schemas/ResourceSpec',
                    ],
                    'request' => [
                        '$ref' => '#/components/schemas/ResourceSpec',
                    ],
                ],
            ],
            'ResourceSpec' => [
                'type' => 'object',
                'properties' => [
                    'cpu' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'memory' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Row' => [
                'type' => 'object',
                'properties' => [
                    'cells' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Cell',
                        ],
                    ],
                ],
            ],
            'RowUpdate' => [
                'type' => 'object',
                'properties' => [
                    'rowKind' => [
                        'type' => 'string',
                    ],
                    'row' => [
                        '$ref' => '#/components/schemas/Row',
                    ],
                ],
            ],
            'Savepoint' => [
                'type' => 'object',
                'properties' => [
                    'savepointId' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'jobId' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'savepointOrigin' => [
                        'type' => 'string',
                        'enum' => [
                            'USER_REQUEST',
                            'STOP_WITH_SAVEPOINT',
                            'RETAINED_CHECKPOINT',
                            'AUTO_TRIGGERED',
                        ],
                    ],
                    'nativeFormat' => [
                        'type' => 'boolean',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'stopWithDrainEnabled' => [
                        'type' => 'boolean',
                    ],
                    'savepointLocation' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/SavepointStatus',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modifiedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'SavepointFailure' => [
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'type' => 'string',
                    ],
                    'reason' => [
                        'type' => 'string',
                    ],
                    'failedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'SavepointStatus' => [
                'type' => 'object',
                'properties' => [
                    'state' => [
                        'type' => 'string',
                        'enum' => [
                            'STARTED',
                            'COMPLETED',
                            'FAILED',
                        ],
                    ],
                    'failure' => [
                        '$ref' => '#/components/schemas/SavepointFailure',
                    ],
                ],
            ],
            'ScheduledPlan' => [
                'type' => 'object',
                'properties' => [
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'creatorName' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                    'modifiedAt' => [
                        'type' => 'string',
                    ],
                    'scheduledPlanId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'updatedByUser' => [
                        'type' => 'boolean',
                    ],
                    'origin' => [
                        'type' => 'string',
                    ],
                    'periodicSchedulingPolicies' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PeriodicSchedulingPolicy',
                        ],
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScheduledPlanAppliedInfo' => [
                'type' => 'object',
                'properties' => [
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                    'modifiedAt' => [
                        'type' => 'string',
                    ],
                    'scheduledPlanId' => [
                        'type' => 'string',
                    ],
                    'scheduledPlanName' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'expectedState' => [
                        'type' => 'string',
                    ],
                    'statusState' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScheduledPlanExecutedInfo' => [
                'type' => 'object',
                'properties' => [
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'creatorName' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                    'modifiedAt' => [
                        'type' => 'string',
                    ],
                    'jobResourceUpgradingId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'origin' => [
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'originJobId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/ScheduledPlanExecutedStatus',
                    ],
                ],
            ],
            'ScheduledPlanExecutedStatus' => [
                'type' => 'object',
                'properties' => [
                    'statusState' => [
                        'type' => 'string',
                    ],
                    'restartType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Schema' => [
                'type' => 'object',
                'properties' => [
                    'columns' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TableColumn',
                        ],
                    ],
                    'watermarkSpecs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/WatermarkSpec',
                        ],
                    ],
                    'primaryKey' => [
                        '$ref' => '#/components/schemas/PrimaryKey',
                    ],
                ],
            ],
            'SessionCluster' => [
                'type' => 'object',
                'properties' => [
                    'workspace' => [
                        'type' => 'string',
                    ],
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'creatorName' => [
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'type' => 'string',
                    ],
                    'modifierName' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modifiedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'sessionClusterId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'deploymentTargetName' => [
                        'type' => 'string',
                    ],
                    'engineVersion' => [
                        'type' => 'string',
                    ],
                    'labels' => [
                        'type' => 'object',
                    ],
                    'basicResourceSetting' => [
                        '$ref' => '#/components/schemas/BasicResourceSetting',
                    ],
                    'flinkConf' => [
                        'type' => 'object',
                    ],
                    'logging' => [
                        '$ref' => '#/components/schemas/Logging',
                    ],
                    'status' => [
                        '$ref' => '#/components/schemas/SessionClusterStatus',
                    ],
                ],
            ],
            'SessionClusterFailureInfo' => [
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'type' => 'string',
                    ],
                    'reason' => [
                        'type' => 'string',
                    ],
                    'failedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'SessionClusterRunningInfo' => [
                'type' => 'object',
                'properties' => [
                    'startedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastUpdateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'referenceDeploymentIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'SessionClusterStatus' => [
                'type' => 'object',
                'properties' => [
                    'currentSessionClusterStatus' => [
                        'type' => 'string',
                        'enum' => [
                            'STOPPED',
                            'STARTING',
                            'RUNNING',
                            'UPDATING',
                            'STOPPING',
                            'FAILED',
                        ],
                    ],
                    'failure' => [
                        '$ref' => '#/components/schemas/SessionClusterFailureInfo',
                    ],
                    'running' => [
                        '$ref' => '#/components/schemas/SessionClusterRunningInfo',
                    ],
                ],
            ],
            'SqlArtifact' => [
                'type' => 'object',
                'properties' => [
                    'sqlScript' => [
                        'type' => 'string',
                    ],
                    'additionalDependencies' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'SqlStatementExecuteResult' => [
                'type' => 'object',
                'properties' => [
                    'executeSuccess' => [
                        'type' => 'boolean',
                    ],
                    'errorDetails' => [
                        '$ref' => '#/components/schemas/ErrorDetails',
                    ],
                    'statement' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SqlStatementValidationResult' => [
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'validationResult' => [
                        'type' => 'string',
                        'enum' => [
                            'VALIDATION_RESULT_INVALID',
                            'VALIDATION_RESULT_INVALID_QUERY',
                            'VALIDATION_RESULT_UNSUPPORTED_QUERY',
                            'VALIDATION_RESULT_INVALID_CONNECTOR_CONFIG',
                            'VALIDATION_RESULT_VALID_INSERT_QUERY',
                            'VALIDATION_RESULT_VALID_SELECT_QUERY',
                            'VALIDATION_RESULT_VALID_DDL_STATEMENT',
                            'VALIDATION_RESULT_VALID_COMMAND_STATEMENT',
                            'VALIDATION_RESULT_INVALID_FLINK_CONFIG',
                        ],
                    ],
                    'errorDetails' => [
                        '$ref' => '#/components/schemas/ErrorDetails',
                    ],
                ],
            ],
            'SqlStatementWithContext' => [
                'type' => 'object',
                'properties' => [
                    'statement' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'flinkConfiguration' => [
                        'type' => 'object',
                    ],
                    'batchMode' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'versionName' => [
                        'type' => 'string',
                    ],
                    'additionalDependencies' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'StartJobRequestBody' => [
                'type' => 'object',
                'properties' => [
                    'deploymentId' => [
                        'type' => 'string',
                    ],
                    'resourceSettingSpec' => [
                        '$ref' => '#/components/schemas/BriefResourceSetting',
                    ],
                    'restoreStrategy' => [
                        '$ref' => '#/components/schemas/DeploymentRestoreStrategy',
                    ],
                ],
            ],
            'StopJobRequestBody' => [
                'type' => 'object',
                'properties' => [
                    'stopStrategy' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'NONE',
                            'STOP_WITH_SAVEPOINT',
                            'STOP_WITH_DRAIN',
                        ],
                    ],
                ],
            ],
            'StreamingResourceSetting' => [
                'type' => 'object',
                'properties' => [
                    'resourceSettingMode' => [
                        'type' => 'string',
                        'enum' => [
                            'BASIC',
                            'EXPERT',
                        ],
                    ],
                    'expertResourceSetting' => [
                        '$ref' => '#/components/schemas/ExpertResourceSetting',
                    ],
                    'basicResourceSetting' => [
                        '$ref' => '#/components/schemas/BasicResourceSetting',
                    ],
                ],
            ],
            'SubFolder' => [
                'type' => 'object',
                'properties' => [
                    'folderId' => [
                        'type' => 'string',
                    ],
                    'parentId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SubmitPreview' => [
                'type' => 'object',
                'properties' => [
                    'queryName' => [
                        'type' => 'string',
                    ],
                    'sessionId' => [
                        'type' => 'string',
                    ],
                    'tableSchemas' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TableSchema',
                        ],
                    ],
                ],
            ],
            'SubmitPreviewResult' => [
                'type' => 'object',
                'properties' => [
                    'queryId' => [
                        'type' => 'string',
                    ],
                    'sessionId' => [
                        'type' => 'string',
                    ],
                    'tableSchemas' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TableSchema',
                        ],
                    ],
                ],
            ],
            'Table' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'schema' => [
                        '$ref' => '#/components/schemas/Schema',
                        'required' => false,
                    ],
                    'properties' => [
                        'type' => 'object',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'partitionKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'tableType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'metadata' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'TableColumn' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'metadataInfo' => [
                        '$ref' => '#/components/schemas/MetadataInfo',
                    ],
                    'expression' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'nullable' => [
                        'type' => 'boolean',
                    ],
                    'logicalType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableMeta' => [
                'type' => 'object',
                'properties' => [
                    'catalogName' => [
                        'type' => 'string',
                    ],
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'tableName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableResult' => [
                'type' => 'object',
                'properties' => [
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'rowUpdates' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RowUpdate',
                        ],
                    ],
                ],
            ],
            'TableSchema' => [
                'type' => 'object',
                'properties' => [
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'schema' => [
                        '$ref' => '#/components/schemas/Schema',
                    ],
                ],
            ],
            'UdfArtifact' => [
                'type' => 'object',
                'properties' => [
                    'namespace' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'modifiedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'jarUrl' => [
                        'type' => 'string',
                    ],
                    'dependencyJarUris' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'artifactType' => [
                        'type' => 'string',
                        'enum' => [
                            'ARTIFACT_TYPE_JAVA',
                            'ARTIFACT_TYPE_PYTHON',
                            'ARTIFACT_TYPE_UNKNOWN',
                        ],
                    ],
                    'udfClasses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UdfClass',
                        ],
                    ],
                ],
            ],
            'UdfClass' => [
                'type' => 'object',
                'properties' => [
                    'udfArtifactName' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                    ],
                    'classType' => [
                        'type' => 'string',
                        'enum' => [
                            'UDF_TYPE_INVALID',
                            'UDF_TYPE_SCALAR',
                            'UDF_TYPE_TABLE',
                            'UDF_TYPE_AGGREGATE',
                            'UDF_TYPE_TABLE_AGGREGATE',
                            'UDF_TYPE_OTHER',
                        ],
                    ],
                    'functionNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UdfFunction' => [
                'type' => 'object',
                'properties' => [
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'udfArtifactName' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateJobConfigParam' => [
                'type' => 'object',
                'properties' => [
                    'newFlinkConf' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'UpdateUdfArtifactResult' => [
                'type' => 'object',
                'properties' => [
                    'updateSuccess' => [
                        'type' => 'boolean',
                    ],
                    'udfArtifact' => [
                        '$ref' => '#/components/schemas/UdfArtifact',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'collidingClasses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UdfClass',
                        ],
                    ],
                    'missingClasses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UdfClass',
                        ],
                    ],
                ],
            ],
            'ValidateStatementResult' => [
                'type' => 'object',
                'properties' => [
                    'validationResult' => [
                        'type' => 'string',
                    ],
                    'errorDetails' => [
                        '$ref' => '#/components/schemas/ValidationErrorDetails',
                    ],
                ],
            ],
            'ValidationErrorDetails' => [
                'type' => 'object',
                'properties' => [
                    'lineNumber' => [
                        'type' => 'string',
                    ],
                    'columnNumber' => [
                        'type' => 'string',
                    ],
                    'endLineNumber' => [
                        'type' => 'string',
                    ],
                    'endColumnNumber' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Variable' => [
                'type' => 'object',
                'properties' => [
                    'kind' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'Plain',
                        ],
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[a-zA-Z0-9_-]{1,64}$',
                    ],
                    'value' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WatermarkSpec' => [
                'type' => 'object',
                'properties' => [
                    'column' => [
                        'type' => 'string',
                    ],
                    'watermarkExpression' => [
                        'type' => 'string',
                    ],
                    'watermarkType' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateFolder' => [
            'path' => '/api/v2/namespaces/{namespace}/folder',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/Folder',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateFolder' => [
            'path' => '/api/v2/namespaces/{namespace}/folder/{folderId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
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
                        '$ref' => '#/components/schemas/Folder',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteFolder' => [
            'path' => '/api/v2/namespaces/{namespace}/folder/{folderId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetFolder' => [
            'path' => '/api/v2/namespaces/{namespace}/folder',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ValidateDeploymentDraftAsync' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/async-validate',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/DraftValidateParams',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetValidateDeploymentDraftResult' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/tickets/{ticketId}/async-validate',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ticketId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDeploymentDraft' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/DeploymentDraft',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateDeploymentDraft' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/{deploymentDraftId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentDraftId',
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
                        '$ref' => '#/components/schemas/DeploymentDraft',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDeploymentDraft' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/{deploymentDraftId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentDraftId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDeploymentDraft' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/{deploymentDraftId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentDraftId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDeploymentDrafts' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageSize',
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
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'GetDeploymentDraftLock' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/getLock',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentDraftId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeployDeploymentDraftAsync' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/async-deploy',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/DraftDeployParams',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDeployDeploymentDraftResult' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-drafts/tickets/{ticketId}/async-deploy',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ticketId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateUdfArtifact' => [
            'path' => '/api/v2/namespaces/{namespace}/udfartifacts',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/UdfArtifact',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateUdfArtifact' => [
            'path' => '/api/v2/namespaces/{namespace}/udfartifacts/{udfArtifactName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'udfArtifactName',
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
                        '$ref' => '#/components/schemas/UdfArtifact',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetUdfArtifacts' => [
            'path' => '/api/v2/namespaces/{namespace}/udfartifacts',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'udfArtifactName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteUdfArtifact' => [
            'path' => '/api/v2/namespaces/{namespace}/udfartifacts/{udfArtifactName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'udfArtifactName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteUdfFunction' => [
            'path' => '/api/v2/namespaces/{namespace}/udfartifacts/function/{functionName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'udfArtifactName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'className',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RegisterUdfFunction' => [
            'path' => '/api/v2/namespaces/{namespace}/udfartifacts/function:registerUdfFunction',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'functionName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'udfArtifactName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'className',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCustomConnectors' => [
            'path' => '/api/v2/namespaces/{namespace}/connectors',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RegisterCustomConnector' => [
            'path' => '/api/v2/namespaces/{namespace}/connectors:register',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jarUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteCustomConnector' => [
            'path' => '/api/v2/namespaces/{namespace}/connectors/{connectorName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'connectorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDatabases' => [
            'path' => '/api/v2/namespaces/{namespace}/catalogs/{catalogName}/databases',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'catalogName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'databaseName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTables' => [
            'path' => '/api/v2/namespaces/{namespace}/catalogs/{catalogName}/databases/{databaseName}/tables',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'catalogName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'databaseName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tableName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCatalogs' => [
            'path' => '/api/v2/namespaces/{namespace}/catalogs',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'catalogName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ExecuteSqlStatement' => [
            'path' => '/api/v2/namespaces/{namespace}/sql-statement/execute',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/SqlStatementWithContext',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateSavepoint' => [
            'path' => '/api/v2/namespaces/{namespace}/savepoints',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                            'deploymentId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'nativeFormat' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetSavepoint' => [
            'path' => '/api/v2/namespaces/{namespace}/savepoints/{savepointId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savepointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteSavepoint' => [
            'path' => '/api/v2/namespaces/{namespace}/savepoints/{savepointId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savepointId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListSavepoints' => [
            'path' => '/api/v2/namespaces/{namespace}/savepoints',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobId',
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
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'GetDeploymentsByName' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/name/{deploymentName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ignoreJobSummary',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ignoreResourceSetting',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDeploymentsByLabel' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/getDeployments/byLabel',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'labelKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'labelValue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ignoreJobSummary',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ignoreResourceSetting',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDeploymentsByIp' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/getDeployments/byIp',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'srcIp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'srcPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dstIp',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dstPort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ignoreJobSummary',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ignoreResourceSetting',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDeployment' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/Deployment',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateDeployment' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
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
                        '$ref' => '#/components/schemas/Deployment',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDeployment' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDeployments' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageSize',
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
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
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
                    'name' => 'executionMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'BATCH',
                            'STREAMING',
                        ],
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
                    'name' => 'creator',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'modifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'labelKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'labelValueArray',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sortName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'gmt_create',
                            'gmt_modified',
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDeployment' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetEvents' => [
            'path' => '/api/v2/namespaces/{namespace}/events',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageSize',
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
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetJob' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs/{jobId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListJobs' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
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
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sortName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'gmt_create',
                            'job_id',
                            'status',
                            'gmt_modified',
                        ],
                    ],
                ],
                [
                    'name' => 'sortOrder',
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
            ],
        ],
        'StartJobWithParams' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs:start',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/JobStartParameters',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopJob' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs/{jobId}:stop',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobId',
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
                        '$ref' => '#/components/schemas/StopJobRequestBody',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteJob' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs/{jobId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'HotUpdateJob' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs/{jobId}:hotUpdate',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetHotUpdateJobResult' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs/hot-updates/{jobHotUpdateId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobHotUpdateId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLatestJobStartLog' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}/latest_jobmanager_start_log',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartJob' => [
            'path' => '/api/v2/namespaces/{namespace}/jobs',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/StartJobRequestBody',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateScheduledPlan' => [
            'path' => '/api/v2/namespaces/{namespace}/scheduled-plans',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/ScheduledPlan',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateScheduledPlan' => [
            'path' => '/api/v2/namespaces/{namespace}/scheduled-plans/{scheduledPlanId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledPlanId',
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
                        '$ref' => '#/components/schemas/ScheduledPlan',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteScheduledPlan' => [
            'path' => '/api/v2/namespaces/{namespace}/scheduled-plans/{scheduledPlanId}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledPlanId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListScheduledPlan' => [
            'path' => '/api/v2/namespaces/{namespace}/scheduled-plans',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageSize',
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
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ApplyScheduledPlan' => [
            'path' => '/api/v2/namespaces/{namespace}/scheduled-plans/{scheduledPlanId}:apply',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledPlanId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopApplyScheduledPlan' => [
            'path' => '/api/v2/namespaces/{namespace}/scheduled-plans/{scheduledPlanId}:stop',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledPlanId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAppliedScheduledPlan' => [
            'path' => '/api/v2/namespaces/{namespace}/scheduled-plans:getExecutedScheduledPlan',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListScheduledPlanExecutedHistory' => [
            'path' => '/api/v2/namespaces/{namespace}/job-resource-upgradings',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'origin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'SCHEDULED_PLAN',
                        ],
                    ],
                ],
            ],
        ],
        'CreateSessionCluster' => [
            'path' => '/api/v2/namespaces/{namespace}/sessionclusters',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/SessionCluster',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateSessionCluster' => [
            'path' => '/api/v2/namespaces/{namespace}/sessionclusters/{sessionClusterName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionClusterName',
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
                        '$ref' => '#/components/schemas/SessionCluster',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteSessionCluster' => [
            'path' => '/api/v2/namespaces/{namespace}/sessionclusters/{sessionClusterName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionClusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetSessionCluster' => [
            'path' => '/api/v2/namespaces/{namespace}/sessionclusters/{sessionClusterName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionClusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListSessionClusters' => [
            'path' => '/api/v2/namespaces/{namespace}/sessionclusters',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartSessionCluster' => [
            'path' => '/api/v2/namespaces/{namespace}/sessionclusters/{sessionClusterName}:start',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionClusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopSessionCluster' => [
            'path' => '/api/v2/namespaces/{namespace}/sessionclusters/{sessionClusterName}:stop',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionClusterName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDeploymentTarget' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-targets',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentTargetName',
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
                        '$ref' => '#/components/schemas/ResourceSpec',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateDeploymentTarget' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-targets/{deploymentTargetName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentTargetName',
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
                        '$ref' => '#/components/schemas/ResourceSpec',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteDeploymentTarget' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-targets/{deploymentTargetName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentTargetName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDeploymentTargets' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-targets',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageSize',
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
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'CreateMember' => [
            'path' => '/gateway/v2/namespaces/{namespace}/members',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/Member',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateMember' => [
            'path' => '/gateway/v2/namespaces/{namespace}/members',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/Member',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteMember' => [
            'path' => '/gateway/v2/namespaces/{namespace}/members/{member}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'member',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMember' => [
            'path' => '/gateway/v2/namespaces/{namespace}/members/{member}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'member',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListMembers' => [
            'path' => '/gateway/v2/namespaces/{namespace}/members',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
            ],
        ],
        'UpdateVariable' => [
            'path' => '/api/v2/namespaces/{namespace}/variables/{name}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                    'schema' => [
                        '$ref' => '#/components/schemas/Variable',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateVariable' => [
            'path' => '/api/v2/namespaces/{namespace}/variables',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/Variable',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteVariable' => [
            'path' => '/api/v2/namespaces/{namespace}/variables/{name}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
        'ListVariables' => [
            'path' => '/api/v2/namespaces/{namespace}/variables',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pageSize',
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
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
            ],
        ],
        'GetJobDiagnosis' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}/jobs/{jobId}/job-diagnoses/lite',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListEngineVersionMetadata' => [
            'path' => '/api/v2/engine-version-meta.json',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ValidateSqlStatement' => [
            'path' => '/api/v2/namespaces/{namespace}/sql-statement/validate',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
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
                        '$ref' => '#/components/schemas/SqlStatementWithContext',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GenerateResourcePlanWithFlinkConfAsync' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}/resource-plan:asyncGenerate',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentId',
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
                        '$ref' => '#/components/schemas/FlinkConf',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetGenerateResourcePlanResult' => [
            'path' => '/api/v2/namespaces/{namespace}/deployments/tickets/{ticketId}/resource-plan:asyncGenerate',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ticketId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'FlinkApiProxy' => [
            'path' => '/flink-ui/v2/proxy',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'flinkApiPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLineageInfo' => [
            'path' => '/meta/v2/lineage',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/GetLineageInfoParams',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDeploymentTargetV2' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-targets/support-elastic',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentTargetName',
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
                        '$ref' => '#/components/schemas/Resource',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateDeploymentTargetV2' => [
            'path' => '/api/v2/namespaces/{namespace}/deployment-targets/support-elastic/{deploymentTargetName}',
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
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deploymentTargetName',
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
                        '$ref' => '#/components/schemas/Resource',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ververica.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ververica.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ververica.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ververica.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ververica.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ververica.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ververica.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ververica.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ververica.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ververica.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ververica.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ververica.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'ververica.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'ververica.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'ververica.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ververica.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ververica.ap-northeast-1.aliyuncs.com',
        ],
    ],
];