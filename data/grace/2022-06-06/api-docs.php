<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'grace',
        'version' => '2022-06-06',
    ],
    'components' => [
        'schemas' => [
            'AnalysisConfig' => [
                'type' => 'object',
                'properties' => [
                    'highHeapUsageThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highHumongousUsageThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'longPauseThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highOldUsageThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highMetaspaceUsageThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highPromotionThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'tooManyOldGCThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'timeRange' => [
                        'type' => 'object',
                        'properties' => [
                            'end' => [
                                'type' => 'number',
                                'format' => 'double',
                            ],
                            'start' => [
                                'type' => 'number',
                                'format' => 'double',
                            ],
                        ],
                    ],
                    'fullGCFrequentIntervalThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'badThroughputThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'smallGenerationThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'oldGCFrequentIntervalThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'youngGCFrequentIntervalThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'longConcurrentThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'lowUsrThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highSysThreshold' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'FileInfo' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'creationTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'analyzeProgress' => [
                        'type' => 'object',
                        'properties' => [
                            'message' => [
                                'type' => 'string',
                            ],
                            'percent' => [
                                'type' => 'number',
                                'format' => 'double',
                            ],
                            'state' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'labels' => [
                        'type' => 'string',
                    ],
                    'shared' => [
                        'type' => 'boolean',
                    ],
                    'transferState' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'transferProgress' => [
                        'type' => 'object',
                        'properties' => [
                            'totalSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'transferredSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PhaseStatisticItem' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'intervalAvg' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'intervalMin' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'durationAvg' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'durationMax' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'durationTotal' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'UploadFileByURL' => [
            'path' => '/UploadFileByURL',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'url',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UploadFileByOSS' => [
            'path' => '/UploadFileByOSS',
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
                    'name' => 'endpoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'bucketName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'objectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AnalyzeFile' => [
            'path' => '/AnalyzeFile',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keepUnreachableObjects',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetFile' => [
            'path' => '/GetFile',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [],
];