<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'EduTutor',
        'version' => '2025-07-07',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CutQuestions' => [
            'path' => '/service/cutApi',
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
                    'in' => 'query',
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
                            'image' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'struct' => [
                                        'type' => 'boolean',
                                        'required' => true,
                                    ],
                                    'extract_images' => [
                                        'type' => 'boolean',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AnswerSSE' => [
            'path' => '/service/answerSSE',
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
                    'in' => 'query',
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
                            'messages' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'user',
                                                'assistant',
                                            ],
                                        ],
                                        'content' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'grade' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'stage' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'other',
                                            'pre',
                                            'elementary',
                                            'middle',
                                            'high',
                                            'higher',
                                        ],
                                    ],
                                    'subject' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'other',
                                            'math',
                                            'chinese',
                                            'english',
                                            'physics',
                                            'chemistry',
                                            'biology',
                                            'history',
                                            'geography',
                                            'politics',
                                            'program',
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
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'edututor.cn-hangzhou.aliyuncs.com',
        ],
    ],
];