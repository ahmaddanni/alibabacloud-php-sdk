<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'DianJin',
        'version' => '2024-06-28',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'UpdateDocumentChunk' => [
            'path' => '/{workspaceId}/api/library/updateDocumentChunk',
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
                    'name' => 'workspaceId',
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
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'chunks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'chunkId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'chunkText' => [
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
        'GetAppConfig' => [
            'path' => '/{workspaceId}/api/app/config',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateLibrary' => [
            'path' => '/{workspaceId}/api/library/create',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'indexSetting' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'chunkStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'docTreeSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'docTreeSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'enhanceGraph' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enhanceTable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'overlap' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'sentenceSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'sentenceSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'size' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'split' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'modelConfig' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'temperature' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topP' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'promptRoleStyle' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'queryEnhancer' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'enableFollowUp' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableMultiQuery' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableOpenQa' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableQueryRewrite' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableSession' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'localKnowledgeId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'withDocumentReference' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'recallStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'documentRankType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'limit' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'textIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ElasticSearch$',
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'indexAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'searchAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'vectorIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ADB$',
                                            ],
                                            'embeddingType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'libraryName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetLibraryList' => [
            'path' => '/{workspaceId}/api/library/list',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'page',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLibrary' => [
            'path' => '/{workspaceId}/api/library/get',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'libraryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UploadDocument' => [
            'path' => '/{workspaceId}/api/library/document/upload',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'data' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fileName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'fileUrl' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDocumentUrl' => [
            'path' => '/{workspaceId}/api/library/document/url',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'documentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PreviewDocument' => [
            'path' => '/{workspaceId}/api/library/document/preview',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'documentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetFilterDocumentList' => [
            'path' => '/{workspaceId}/api/library/filterDocument',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'and' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'boost' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => false,
                                        ],
                                        'key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'operator' => [
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
                            'docIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'or' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'boost' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => false,
                                        ],
                                        'key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'operator' => [
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
                            'page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'status' => [
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
        'GetDocumentList' => [
            'path' => '/{workspaceId}/api/library/listDocument',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'page',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'libraryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDocument' => [
            'path' => '/{workspaceId}/api/library/document/delete',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'docIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDocument' => [
            'path' => '/{workspaceId}/api/library/document/updateDocument',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'meta' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'title' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePredefinedDocument' => [
            'path' => '/{workspaceId}/api/library/document/createPredefinedDocument',
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
                    'name' => 'workspaceId',
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
                            'chunks' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'chunkMeta' => [
                                            'type' => 'object',
                                            'required' => false,
                                        ],
                                        'chunkOrder' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'chunkText' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'chunkType' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'text',
                                                'table',
                                                'faq',
                                                'graph',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'metadata' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'title' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDocumentChunkList' => [
            'path' => '/{workspaceId}/api/library/getDocumentChunk',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'chunkIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'order' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'orderBy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'searchQuery' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RecallDocument' => [
            'path' => '/{workspaceId}/api/library/recallDocument',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'filters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'and' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'boost' => [
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'required' => false,
                                                    ],
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'operator' => [
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
                                        'chunkType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'docIdList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'libraryId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'or' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'boost' => [
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'required' => false,
                                                    ],
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'operator' => [
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
                                        'status' => [
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
                            'query' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'rearrangement' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'topK' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetParseResult' => [
            'path' => '/{workspaceId}/api/library/document/getParseResult',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'useUrlResult' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ReIndex' => [
            'path' => '/{workspaceId}/api/library/document/reIndex',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'documentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateLibrary' => [
            'path' => '/{workspaceId}/api/library/update',
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
                    'name' => 'workspaceId',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'indexSetting' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'chunkStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'docTreeSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'docTreeSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'enhanceGraph' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enhanceTable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'overlap' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'sentenceSplit' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'sentenceSplitSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'size' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'split' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'modelConfig' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'temperature' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topP' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'promptRoleStyle' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'queryEnhancer' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'enableFollowUp' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableMultiQuery' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableOpenQa' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableQueryRewrite' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'enableSession' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'localKnowledgeId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'withDocumentReference' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'recallStrategy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'documentRankType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'limit' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'textIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ElasticSearch$',
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'indexAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'searchAnalyzer' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'vectorIndexSetting' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'category' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'pattern' => '^ADB$',
                                            ],
                                            'embeddingType' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'enable' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'rankThreshold' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'topK' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteLibrary' => [
            'path' => '/{workspaceId}/api/library/delete',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'libraryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RunLibraryChatGeneration' => [
            'path' => '/{workspaceId}/api/run/library/chat/generation',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'sse',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'docIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'enableFollowUp' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'enableMultiQuery' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'enableOpenQa' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'followUpLlm' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'llmType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'multiQueryLlm' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'queryCriteria' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'and' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'boost' => [
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'required' => false,
                                                ],
                                                'key' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'operator' => [
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
                                    'or' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'boost' => [
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'required' => false,
                                                ],
                                                'key' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'operator' => [
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
                            'rerankType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sessionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'stream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'subQueryList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'textSearchParameter' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'limit' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'searchAnalyzerType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'topK' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'vectorSearchParameter' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'limit' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'withDocumentReference' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetHistoryListByBizType' => [
            'path' => '/{workspaceId}/api/history/list',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'page',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    ],
                ],
                [
                    'name' => 'bizType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'bizId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'InvokePlugin' => [
            'path' => '/{workspaceId}/api/plugin/invoke',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'params' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'pluginId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EndToEndRealTimeDialog' => [
            'path' => '/{workspaceId}/ws/realtime/dialog',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'websocket',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'text/event-stream',
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'asrModelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ttsModelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'inputFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'outputFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sampleRate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'SAMPLE_RATE_16K',
                            'SAMPLE_RATE_8K',
                            'SAMPLE_RATE_24K',
                            'SAMPLE_RATE_48K',
                        ],
                    ],
                ],
                [
                    'name' => 'voiceCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'volume',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'speechRate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pitchRate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RunDialogAnalysis' => [
            'path' => '/{workspaceId}/api/virtualHuman/dialog/stream/analysis',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'sse',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RunAgent' => [
            'path' => '/{workspaceId}/api/bot/thread/run',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'sse',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'modelId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'threadId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'botId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userContent' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'stream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'versionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'useDraft' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'userInputs' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDialog' => [
            'path' => '/{workspaceId}/api/virtualHuman/dialog/create',
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
                    'name' => 'workspaceId',
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
                            'playCode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'channel' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'metaData' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'qaLibraryList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'requestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'enableLibrary' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'selfDirected' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RealTimeDialog' => [
            'path' => '/{workspaceId}/api/realtime/dialog/chat',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'sse',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'text/event-stream',
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'bizType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'analysis' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'recommend' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'metaData' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'stream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'conversationModel' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'role' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'customerServiceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'customerServiceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'customerId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'text',
                                                'audio',
                                                'image',
                                            ],
                                        ],
                                        'beginTime' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'begin' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'end' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'dialogMemoryTurns' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'userVad' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'scriptContentPlayed' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'opType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RealtimeDialogAssist' => [
            'path' => '/{workspaceId}/api/realtime/dialog/assist',
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
                'text/event-stream',
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'requestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'bizType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'analysis' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'metaData' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'conversationModel' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'role' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'customerServiceType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'customerServiceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'customerId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'dialogMemoryTurns' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'hangUpDialog' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDialogDetail' => [
            'path' => '/{workspaceId}/api/virtualHuman/dialog/detail',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'sessionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDialogLog' => [
            'path' => '/{workspaceId}/api/dialog/log',
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
                    'name' => 'workspaceId',
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
                            'id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sessionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDialogAnalysisResult' => [
            'path' => '/{workspaceId}/api/virtualHuman/dialog/analysis',
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
                    'name' => 'workspaceId',
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
                            'sessionIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'useUrl' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'asc' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDialogAnalysisTask' => [
            'path' => '/{workspaceId}/api/virtualHuman/dialog/analysis/submit',
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
                    'name' => 'workspaceId',
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
                            'metaData' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'playCode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'analysisNodes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'requestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'conversationList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'dialogueList' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'content' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'role' => [
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
                ],
            ],
        ],
        'RebuildTask' => [
            'path' => '/{workspaceId}/api/task/rebuild',
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
                    'name' => 'workspaceId',
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
                            'taskIds' => [
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
        'EvictTask' => [
            'path' => '/{workspaceId}/api/task/evict',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskStatus' => [
            'path' => '/{workspaceId}/api/task/status',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDocsSummaryTask' => [
            'path' => '/{workspaceId}/api/task/summary/docs',
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
                    'name' => 'workspaceId',
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
                            'docInfos' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'docId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'endPage' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'libraryId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'startPage' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'enableTable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'instruction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAnnualDocSummaryTask' => [
            'path' => '/{workspaceId}/api/task/summary/doc/annual',
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
                    'name' => 'workspaceId',
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
                            'anaYears' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                            ],
                            'docInfos' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'docId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'docYear' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'endPage' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'libraryId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'startPage' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'enableTable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'instruction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePdfTranslateTask' => [
            'path' => '/{workspaceId}/api/task/pdfTranslate',
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
                    'name' => 'workspaceId',
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
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'knowledge' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'translateTo' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFinReportSummaryTask' => [
            'path' => '/{workspaceId}/api/task/summary',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'enableTable' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'endPage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'instruction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'startPage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'taskType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetSummaryTaskResult' => [
            'path' => '/{workspaceId}/api/task/summary/result',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTaskResult' => [
            'path' => '/{workspaceId}/api/task/result',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateQualityCheckTask' => [
            'path' => '/{workspaceId}/api/qualitycheck/task/submit',
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
            'parameters' => [
                [
                    'name' => 'workspaceId',
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
                            'conversationList' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'callType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'customerId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'customerName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'customerServiceId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'customerServiceName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'dialogueList' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'begin' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'beginTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'content' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'customerId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'customerServiceId' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'customerServiceType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'end' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'role' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'type' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'gmtService' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'gmtService' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'metaData' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'qualityGroup' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'requestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sceneCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetQualityCheckTaskResult' => [
            'path' => '/{workspaceId}/api/qualitycheck/task/query',
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
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RecognizeIntention' => [
            'path' => '/{workspaceId}/api/recog/intent',
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
                    'name' => 'workspaceId',
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
                            'analysis' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'bizType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'conversation' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'globalIntentionList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intention' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intentionCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intentionScript' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'hierarchicalIntentionList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intention' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intentionCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intentionScript' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'intentionList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intention' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intentionCode' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'intentionScript' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'opType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'recommend' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'intentionDomainCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GenDocQaResult' => [
            'path' => '/{workspaceId}/api/virtualHuman/qa/parse',
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
                    'name' => 'workspaceId',
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
                            'docId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'libraryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'requestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateQaLibrary' => [
            'path' => '/{workspaceId}/api/virtualHuman/qa/upload',
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
                    'name' => 'workspaceId',
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
                            'parseQaResults' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'question' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'answer' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'qaLibraryId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'requestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SubmitChatQuestion' => [
            'path' => '/{workspaceId}/api/virtualHuman/chat/submit',
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
                    'name' => 'workspaceId',
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
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'gmtService' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'liveScriptContent' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'openSmallTalk' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'questionList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'sessionId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'userId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'userName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'gmtCreate' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'reply' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetChatQuestionResp' => [
            'path' => '/{workspaceId}/api/virtualHuman/chat/query',
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
                    'name' => 'workspaceId',
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
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'batchId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RunChatResultGeneration' => [
            'path' => '/{workspaceId}/api/run/chat/generation',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'sse',
            ],
            'security' => [
                [
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
                    'name' => 'workspaceId',
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
                            'inferenceParameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'messages' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sessionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'stream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'tools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'function' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'description' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'name' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'parameters' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'properties' => [
                                                            'type' => 'object',
                                                            'required' => false,
                                                        ],
                                                        'type' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                                'required' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'type' => [
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
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dianjin.cn-beijing.aliyuncs.com',
        ],
    ],
];