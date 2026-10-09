<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PAIFlow',
        'version' => '2021-02-02',
    ],
    'components' => [
        'schemas' => [
            'BriefPipelineRun' => [
                'type' => 'object',
                'properties' => [
                    'PipelineRunId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'ParentUserId' => [
                        'type' => 'string',
                    ],
                    'StartedAt' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FinishedAt' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'SourceId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'PipelineId' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FullPipelineRun' => [
                'type' => 'object',
                'properties' => [
                    'PipelineRunId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Manifest' => [
                        'type' => 'string',
                    ],
                    'Arguments' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'ParentUserId' => [
                        'type' => 'string',
                    ],
                    'StartedAt' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'FinishedAt' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'SourceType' => [
                        'type' => 'string',
                    ],
                    'SourceId' => [
                        'type' => 'string',
                    ],
                    'Options' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'PipelineId' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Node' => [
                'type' => 'object',
                'properties' => [
                    'ApiVersion' => [
                        'type' => 'string',
                    ],
                    'Metadata' => [
                        'type' => 'object',
                        'properties' => [
                            'NodeId' => [
                                'type' => 'string',
                            ],
                            'Provider' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'Version' => [
                                'type' => 'string',
                            ],
                            'Identifier' => [
                                'type' => 'string',
                            ],
                            'NodeType' => [
                                'type' => 'string',
                            ],
                            'RelatedNodeIds' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Spec' => [
                        'type' => 'object',
                        'properties' => [
                            'HasPipelines' => [
                                'type' => 'boolean',
                            ],
                            'Dependencies' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Pipelines' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/Node',
                                ],
                            ],
                            'Inputs' => [
                                '$ref' => '#/components/schemas/NodeIO',
                            ],
                            'Outputs' => [
                                '$ref' => '#/components/schemas/NodeIO',
                            ],
                            'When' => [
                                'type' => 'string',
                            ],
                            'WithItems' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'WithParam' => [
                                'type' => 'string',
                            ],
                            'WithSequence' => [
                                'type' => 'object',
                                'properties' => [
                                    'Start' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'End' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Format' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Parallelism' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'StatusInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'FinishedAt' => [
                                'type' => 'string',
                                'format' => 'iso8601',
                            ],
                            'StartedAt' => [
                                'type' => 'string',
                                'format' => 'iso8601',
                            ],
                            'Status' => [
                                'type' => 'string',
                            ],
                            'Conditions' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Progress' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'NodeIO' => [
                'type' => 'object',
                'properties' => [
                    'Artifacts' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                    'Parameters' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
            'Pipeline' => [
                'type' => 'object',
                'properties' => [
                    'PipelineId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Provider' => [
                        'type' => 'string',
                    ],
                    'Identifier' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'Uuid' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Run' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'Accessibility' => [
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Source' => [
                        'type' => 'string',
                    ],
                    'GmtModifiedTime' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ParentUserId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'ExperimentId' => [
                        'type' => 'string',
                    ],
                    'NodeId' => [
                        'type' => 'string',
                    ],
                    'FinishedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StartedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RunId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreatePipelineRun' => [
            'path' => '/api/v1/pipelineruns',
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
                            'PipelineId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineManifest' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Arguments' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NoConfirmRequired' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => true,
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
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeletePipelineRun' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartPipelineRun' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/start',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdatePipelineRun' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}',
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
                    'name' => 'PipelineRunId',
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
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPipelineRun' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}',
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
                    'name' => 'PipelineRunId',
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
                [
                    'name' => 'ManifestType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Raw',
                            'Frozen',
                            'Expanded',
                            'Rendered',
                            'Runtime',
                        ],
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelineRunNodeLogs' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/logs',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Offset',
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
                    'name' => 'FromTimeInSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Keyword',
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
                    'name' => 'ToTimeInSeconds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPipelineRunNode' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelineRunNodeOutputs' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/outputs',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '99999',
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
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelineRunNodeStatus' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/status',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPipelineRunsStatus' => [
            'path' => '/api/v1/pipelineruns',
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
                            'PipelineRuns' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Nodes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'PipelineRunId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'NodeId' => [
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
                            'OutputType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPipelineRuns' => [
            'path' => '/api/v1/pipelineruns',
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
                    'name' => 'SourceId',
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
                    'name' => 'Order',
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
                    'name' => 'Status',
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
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PipelineIds',
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
                    'name' => 'PipelineRunId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TerminatePipelineRun' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/termination',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RerunPipelineRun' => [
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/rerun',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreatePipeline' => [
            'path' => '/api/v1/pipelines',
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
                            'Manifest' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeletePipeline' => [
            'path' => '/api/v1/pipelines/{PipelineId}',
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
                    'name' => 'PipelineId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdatePipeline' => [
            'path' => '/api/v1/pipelines/{PipelineId}',
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
                    'name' => 'PipelineId',
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
                            'Manifest' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPipeline' => [
            'path' => '/api/v1/pipelines/{PipelineId}',
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
                    'name' => 'PipelineId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListPipelines' => [
            'path' => '/api/v1/pipelines',
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
                    'name' => 'PipelineIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PipelineProvider',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PipelineVersion',
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
                    'name' => 'FuzzyMatching',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'paiflow.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paiflow.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paiflow.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paiflow.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'paiflow.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'paiflow.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'paiflow.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'paiflow.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'paiflow.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'paiflow.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'paiflow.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'paiflow.ap-southeast-5.aliyuncs.com',
        ],
    ],
];