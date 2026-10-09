<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'OpenITag',
        'version' => '2022-06-16',
    ],
    'components' => [
        'schemas' => [
            'CreateTaskDetail' => [
                'type' => 'object',
                'properties' => [
                    'TaskName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'UUID' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AllowAppendData' => [
                        'type' => 'boolean',
                    ],
                    'TaskTemplateConfig' => [
                        '$ref' => '#/components/schemas/TaskTemplateConfig',
                    ],
                    'Exif' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                    'Admins' => [
                        'type' => 'object',
                        'properties' => [
                            'Users' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/SimpleUser',
                                ],
                            ],
                        ],
                    ],
                    'TaskWorkflow' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'NodeName' => [
                                    'type' => 'string',
                                    'enum' => [
                                        'MARK',
                                        'CHECK',
                                        'SAMPLING',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'AssignConfig' => [
                        '$ref' => '#/components/schemas/TaskAssginConfig',
                        'required' => true,
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'VoteConfigs' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/CreateTaskDetailVoteInfo',
                        ],
                    ],
                    'DatasetProxyRelations' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/DatasetProxyConfig',
                        ],
                    ],
                ],
            ],
            'CreateTaskDetailVoteInfo' => [
                'type' => 'object',
                'properties' => [
                    'VoteNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MinVote' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DatasetProxyConfig' => [
                'type' => 'object',
                'properties' => [
                    'Source' => [
                        'type' => 'string',
                        'enum' => [
                            'PAI',
                        ],
                    ],
                    'SourceDatasetId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DatasetType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FlowJobInfo' => [
                'type' => 'object',
                'properties' => [
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'JobType' => [
                        'type' => 'string',
                    ],
                    'ProcessType' => [
                        'type' => 'string',
                    ],
                    'MessageId' => [
                        'type' => 'string',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'Display' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Job' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'JobResult' => [
                        'type' => 'object',
                        'properties' => [
                            'ResultLink' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'JobType' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Creator' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'JobId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MarkResult' => [
                'type' => 'object',
                'properties' => [
                    'MarkResultId' => [
                        'type' => 'string',
                    ],
                    'MarkTitle' => [
                        'type' => 'string',
                    ],
                    'MarkResult' => [
                        'type' => 'string',
                    ],
                    'QuestionId' => [
                        'type' => 'string',
                    ],
                    'ResultType' => [
                        'type' => 'string',
                    ],
                    'Progress' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'MarkTime' => [
                        'type' => 'string',
                    ],
                    'UserMarkResultId' => [
                        'type' => 'string',
                    ],
                    'IsNeedVoteJudge' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'OpenDatasetProxyAppendDataRequest' => [
                'type' => 'object',
                'properties' => [
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'UUID' => [
                        'type' => 'string',
                    ],
                    'DataMeta' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'TraceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'QuestionOption' => [
                'type' => 'object',
                'properties' => [
                    'Label' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Shortcut' => [
                        'type' => 'string',
                    ],
                    'Color' => [
                        'type' => 'string',
                    ],
                    'Remark' => [
                        'type' => 'string',
                    ],
                    'Children' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QuestionOption',
                        ],
                    ],
                ],
            ],
            'QuestionPlugin' => [
                'type' => 'object',
                'properties' => [
                    'MarkTitle' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'MarkTitleAlias' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'MustFill' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'Display' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'Selected' => [
                        'type' => 'boolean',
                    ],
                    'SelectGroup' => [
                        'type' => 'string',
                    ],
                    'DefaultResult' => [
                        'type' => 'string',
                    ],
                    'Rule' => [
                        'type' => 'string',
                    ],
                    'CanSelect' => [
                        'type' => 'boolean',
                    ],
                    'Children' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QuestionPlugin',
                        ],
                    ],
                    'Exif' => [
                        'type' => 'object',
                    ],
                    'PreOptions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Options' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/QuestionOption',
                        ],
                    ],
                    'HotKeyMap' => [
                        'type' => 'string',
                    ],
                    'QuestionId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SimpleSubtask' => [
                'type' => 'object',
                'properties' => [
                    'SubtaskId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Items' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'FeedbackRemark' => [
                                    'type' => 'string',
                                ],
                                'FeedbackFlag' => [
                                    'type' => 'boolean',
                                ],
                                'DataId' => [
                                    'type' => 'string',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'Mine' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'RejectFlag' => [
                                    'type' => 'boolean',
                                ],
                                'FixedFlag' => [
                                    'type' => 'boolean',
                                ],
                                'AbandonFlag' => [
                                    'type' => 'boolean',
                                ],
                                'AbandonRemark' => [
                                    'type' => 'string',
                                ],
                                'Weight' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'ItemId' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'SimpleTask' => [
                'type' => 'object',
                'properties' => [
                    'Creator' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'Modifier' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'TaskName' => [
                        'type' => 'string',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'TaskType' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'Remark' => [
                        'type' => 'string',
                    ],
                    'LabelStyle' => [
                        'type' => 'string',
                    ],
                    'WorkflowNodes' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Archived' => [
                        'type' => 'boolean',
                    ],
                    'Stage' => [
                        'type' => 'string',
                    ],
                    'ArchivedInfos' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'RefTaskId' => [
                        'type' => 'string',
                    ],
                    'UUID' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SimpleTemplate' => [
                'type' => 'object',
                'properties' => [
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'TemplateName' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'SharedMode' => [
                        'type' => 'string',
                    ],
                    'AbandonReasons' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SimpleTenant' => [
                'type' => 'object',
                'properties' => [
                    'Creator' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'TenantName' => [
                        'type' => 'string',
                    ],
                    'UUID' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Role' => [
                        'type' => 'string',
                    ],
                    'Modifier' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                ],
            ],
            'SimpleUser' => [
                'type' => 'object',
                'properties' => [
                    'UserId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AccountType' => [
                        'type' => 'string',
                    ],
                    'AccountNo' => [
                        'type' => 'string',
                    ],
                    'UserName' => [
                        'type' => 'string',
                    ],
                    'Role' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SimpleWorkforce' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'WorkNodeId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'UserIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                ],
            ],
            'SingleTenant' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'TenantName' => [
                        'type' => 'string',
                    ],
                    'UUID' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SubtaskDetail' => [
                'type' => 'object',
                'properties' => [
                    'SubtaskId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Items' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'FeedbackRemark' => [
                                    'type' => 'string',
                                ],
                                'FeedbackFlag' => [
                                    'type' => 'boolean',
                                ],
                                'DataId' => [
                                    'type' => 'string',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'Mine' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'RejectFlag' => [
                                    'type' => 'boolean',
                                ],
                                'FixedFlag' => [
                                    'type' => 'boolean',
                                ],
                                'AbandonFlag' => [
                                    'type' => 'boolean',
                                ],
                                'AbandonRemark' => [
                                    'type' => 'string',
                                ],
                                'Weight' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                            ],
                        ],
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'CurrentWorkNode' => [
                        'type' => 'string',
                    ],
                    'WorkNodeState' => [
                        'type' => 'string',
                    ],
                    'Workforce' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Workforce',
                        ],
                    ],
                    'CanReassign' => [
                        'type' => 'boolean',
                    ],
                    'CanRelease' => [
                        'type' => 'boolean',
                    ],
                    'CanDiscard' => [
                        'type' => 'boolean',
                    ],
                    'Weight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtConfigs' => [
                        'type' => 'string',
                        'deprecated' => false,
                    ],
                ],
            ],
            'SubtaskItemDetail' => [
                'type' => 'object',
                'properties' => [
                    'ItemId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Annotations' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'FeedbackRemark' => [
                                    'type' => 'string',
                                ],
                                'FeedbackFlag' => [
                                    'type' => 'boolean',
                                ],
                                'DataId' => [
                                    'type' => 'string',
                                ],
                                'State' => [
                                    'type' => 'string',
                                ],
                                'Mine' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'RejectFlag' => [
                                    'type' => 'boolean',
                                ],
                                'FixedFlag' => [
                                    'type' => 'boolean',
                                ],
                                'AbandonFlag' => [
                                    'type' => 'boolean',
                                ],
                                'AbandonRemark' => [
                                    'type' => 'string',
                                ],
                                'Weight' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                            ],
                        ],
                    ],
                    'DataSource' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'TaskAssginConfig' => [
                'type' => 'object',
                'properties' => [
                    'AssignType' => [
                        'type' => 'string',
                        'enum' => [
                            'FIXED_SIZE',
                            'AVG_SIZE',
                            'FIELD_BASE',
                        ],
                    ],
                    'AssignCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AssignField' => [
                        'type' => 'string',
                    ],
                    'AssignSubTaskCount' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskDetail' => [
                'type' => 'object',
                'properties' => [
                    'Creator' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'Modifier' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'TaskName' => [
                        'type' => 'string',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'TaskType' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'Remark' => [
                        'type' => 'string',
                    ],
                    'LabelStyle' => [
                        'type' => 'string',
                    ],
                    'WorkflowNodes' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Archived' => [
                        'type' => 'boolean',
                    ],
                    'Stage' => [
                        'type' => 'string',
                    ],
                    'ArchivedInfos' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'RefTaskId' => [
                        'type' => 'string',
                    ],
                    'UUID' => [
                        'type' => 'string',
                    ],
                    'TaskWorkflow' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'NodeName' => [
                                    'type' => 'string',
                                ],
                                'Exif' => [
                                    'type' => 'object',
                                ],
                                'Users' => [
                                    'type' => 'array',
                                    'items' => [
                                        '$ref' => '#/components/schemas/SimpleUser',
                                    ],
                                ],
                                'Groups' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Exif' => [
                        'type' => 'object',
                    ],
                    'Admins' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SimpleUser',
                        ],
                    ],
                    'AssignConfig' => [
                        'type' => 'object',
                    ],
                    'TaskTemplateConfig' => [
                        'type' => 'object',
                        'properties' => [
                            'Exif' => [
                                'type' => 'object',
                            ],
                            'TemplateOptionMap' => [
                                'type' => 'object',
                            ],
                            'SelectQuestions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'RobotConfig' => [
                                'type' => 'object',
                            ],
                            'TemplateRelationId' => [
                                'type' => 'string',
                            ],
                            'ResourceKey' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'TenantName' => [
                        'type' => 'string',
                    ],
                    'DatasetProxyRelations' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'DatasetId' => [
                                    'type' => 'string',
                                ],
                                'Source' => [
                                    'type' => 'string',
                                ],
                                'SourceBizId' => [
                                    'type' => 'string',
                                ],
                                'DatasetType' => [
                                    'type' => 'string',
                                ],
                                'Exif' => [
                                    'type' => 'object',
                                ],
                                'SourceDatasetId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'AllowAppendData' => [
                        'type' => 'boolean',
                    ],
                    'RelateTaskConfig' => [
                        'type' => 'object',
                    ],
                    'PeriodConfig' => [
                        'type' => 'object',
                    ],
                    'MineConfigs' => [
                        'type' => 'object',
                    ],
                    'VoteConfigs' => [
                        'type' => 'object',
                    ],
                    'NoticeConfig' => [
                        'type' => 'object',
                    ],
                    'ResultCallbackConfig' => [
                        'type' => 'object',
                    ],
                    'runMsg' => [
                        'type' => 'string',
                    ],
                    'AlertTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TaskStatistic' => [
                'type' => 'object',
                'properties' => [
                    'TotalItemCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalSubtaskCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'minimum' => '0',
                    ],
                    'FinishedItemCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FinishedSubtaskCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FinalAbandonCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'PreMarkFixedCount' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                    ],
                    'AcceptItemCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'TotalCheckedCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'CheckedError' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'CheckAbandon' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'CheckedAccuracy' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                    ],
                    'CheckedRejectCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'TotalSampledCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'SampledErrorCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'SampledRejectCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'SampledAccuracy' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                    ],
                    'TotalSamplingCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'TotalCheckCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'TotalWorkTime' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'TotalMarkTime' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                    ],
                    'MarkEfficiency' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'TotalCheckTime' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'CheckEfficiency' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                    ],
                    'SamplingAccuracy' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                    ],
                    'CheckAccuracy' => [
                        'type' => 'number',
                        'format' => 'float',
                        'minimum' => '0',
                    ],
                ],
            ],
            'TaskTemplateConfig' => [
                'type' => 'object',
                'properties' => [
                    'Exif' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'TemplateOptionMap' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/TaskTemplateOptionConfig',
                        ],
                    ],
                    'SelectQuestions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'TemplateRelationId' => [
                        'type' => 'string',
                    ],
                    'ResourceKey' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskTemplateOptionConfig' => [
                'type' => 'object',
                'properties' => [
                    'DefaultResult' => [
                        'type' => 'string',
                    ],
                    'Rule' => [
                        'type' => 'string',
                    ],
                    'PreOptions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Options' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QuestionOption',
                        ],
                    ],
                ],
            ],
            'TemplateDTO' => [
                'type' => 'object',
                'properties' => [
                    'TemplateName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Exif' => [
                        'type' => 'object',
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ViewConfigs' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ViewPlugins' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ViewPlugin',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                    'QuestionConfigs' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/QuestionPlugin',
                        ],
                    ],
                    'Classify' => [
                        'type' => 'string',
                    ],
                    'SharedMode' => [
                        'type' => 'string',
                    ],
                    'RobotConfigs' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TemplateDetail' => [
                'type' => 'object',
                'properties' => [
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'TemplateName' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Exif' => [
                        'type' => 'object',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'AbandonReasons' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'QuestionConfigs' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QuestionPlugin',
                        ],
                    ],
                    'Creator' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'Modifier' => [
                        '$ref' => '#/components/schemas/SimpleUser',
                    ],
                    'Classify' => [
                        'type' => 'string',
                    ],
                    'TenantId' => [
                        'type' => 'string',
                    ],
                    'SharedMode' => [
                        'type' => 'string',
                    ],
                    'ViewConfigs' => [
                        'type' => 'object',
                        'properties' => [
                            'ViewPlugins' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/ViewPlugin',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'TemplateQuestion' => [
                'type' => 'object',
                'properties' => [
                    'QuestionId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MarkTitle' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'PreOptions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Options' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/QuestionOption',
                        ],
                    ],
                    'Exif' => [
                        'type' => 'object',
                    ],
                    'Children' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TemplateQuestion',
                        ],
                    ],
                ],
            ],
            'TemplateView' => [
                'type' => 'object',
                'properties' => [
                    'Fields' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Type' => [
                                    'type' => 'string',
                                ],
                                'FieldName' => [
                                    'type' => 'string',
                                ],
                                'DisplayOriImg' => [
                                    'type' => 'boolean',
                                ],
                                'VisitInfo' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OssConf' => [
                                            'type' => 'object',
                                        ],
                                        'AftsConf' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'UpdateTaskDTO' => [
                'type' => 'object',
                'properties' => [
                    'TaskName' => [
                        'type' => 'string',
                    ],
                    'Exif' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Remark' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UserStatistic' => [
                'type' => 'object',
                'properties' => [
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'TotalMarkItemsCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'AcceptedMarkItemsCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'MarkTime' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'MarkEfficiency' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'CheckCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'CheckedAcceptedCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'CheckedAccuracy' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'SamplingAccuracy' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'SamplingCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'SamplingErrorCount' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'ViewPlugin' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'CorsProxy' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'RelationQuestionIds' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Hide' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'VisitInfo' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ossConf' => [
                                'type' => 'object',
                            ],
                            'aftsConf' => [
                                'type' => 'object',
                            ],
                        ],
                    ],
                    'Convertor' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Plugins' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                    'Exif' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                    'BindField' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DisplayOriImg' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
            'Workforce' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'NodeType' => [
                        'type' => 'string',
                    ],
                    'WorkNodeId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Users' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SimpleUser',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListTenants' => [
            'path' => '/openapi/api/v1/tenants',
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
            ],
        ],
        'GetTenant' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateTenant' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}',
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
                'multipart/form-data',
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TenantId',
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
                            'TenantName' => [
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
        'ListTemplates' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/templates',
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
                    'name' => 'TenantId',
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
                        'required' => false,
                        'minimum' => '0',
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
                        'maximum' => '20',
                    ],
                ],
                [
                    'name' => 'SearchKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Types',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'enum' => [
                                'COMMON',
                                'CUSTOM',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateTemplate' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/templates',
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
                    'name' => 'TenantId',
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
                        '$ref' => '#/components/schemas/TemplateDTO',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateTemplate' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
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
                        '$ref' => '#/components/schemas/TemplateDTO',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTemplate' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTemplateView' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}/views',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTemplateQuestions' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}/questions',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTemplate' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/templates/{TemplateId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AppendAllDataToTask' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/appendAllDataToTask',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
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
                        '$ref' => '#/components/schemas/OpenDatasetProxyAppendDataRequest',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTasks' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks',
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
                    'name' => 'TenantId',
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
                        'required' => false,
                        'minimum' => '0',
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
                        'maximum' => '10',
                    ],
                ],
            ],
        ],
        'CreateTask' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks',
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
                    'name' => 'TenantId',
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
                        '$ref' => '#/components/schemas/CreateTaskDetail',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTask' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateTask' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
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
                        '$ref' => '#/components/schemas/UpdateTaskDTO',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteTask' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskTemplateViews' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/template/views',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskTemplateQuestions' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/template/questions',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskTemplate' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/template',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskStatus' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/status',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskStatistics' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/statistics',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StatType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSubtasks' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskID}/subtasks',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskID',
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
                        'required' => false,
                        'minimum' => '0',
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
        'GetSubtask' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskID}/subtasks/{SubtaskId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubtaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListSubtaskItems' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskID}/subtasks/{SubtaskId}/items',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubtaskId',
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
                        'required' => false,
                        'minimum' => '0',
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
                        'maximum' => '20',
                    ],
                ],
            ],
        ],
        'GetSubtaskItem' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/subtasks/{SubtaskId}/items/{ItemId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubtaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ItemId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ExportAnnotations' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/annotations/export',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssPath',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegisterDataset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListJobs' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/jobs',
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
                    'name' => 'TenantId',
                    'in' => 'path',
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
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetJob' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/jobs/{JobId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListUsers' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/users',
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
                    'name' => 'TenantId',
                    'in' => 'path',
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
            ],
        ],
        'GetUser' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/users/{UserId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateUser' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/users',
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
                    'name' => 'TenantId',
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
                            'AccountNo' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AccountType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Role' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateUser' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/users/{UserId}',
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
                'multipart/form-data',
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
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
                            'Role' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUser' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/users/{UserId}',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskWorkforce' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/workforce',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AddWorkNodeWorkforce' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/worknodes/{WorkNodeId}/workforce',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'WorkNodeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                            'UserIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTaskWorkforceStatistic' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/workforce/statistic',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
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
                    'name' => 'StatType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'ITEM',
                            'OPERATORCELL',
                        ],
                    ],
                ],
            ],
        ],
        'UpdateTaskWorkforce' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/workforce',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
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
                            'Workforce' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/SimpleWorkforce',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveWorkNodeWorkforce' => [
            'path' => '/openapi/api/v1/tenants/{TenantId}/tasks/{TaskId}/worknodes/{WorkNodeId}/workforce',
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
                    'name' => 'TenantId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'WorkNodeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '0',
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
                            'UserIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'openitag.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'openitag.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'openitag.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'openitag.cn-shenzhen.aliyuncs.com',
        ],
    ],
];