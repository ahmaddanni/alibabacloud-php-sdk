<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'MultimodalDialog',
        'version' => '2025-09-03',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'Vocabulary' => [
            'path' => '/openapi/vocabulary/v1',
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
                            'action' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vocabularyName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vocabulary' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'text' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'lang' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'vocabularyId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vocabularyIds' => [
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
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'multimodaldialog.cn-beijing.aliyuncs.com',
        ],
    ],
];