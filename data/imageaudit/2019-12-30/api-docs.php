<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'imageaudit',
        'version' => '2019-12-30',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ScanImage' => [
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
                    'name' => 'Task',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'ImageTimeMillisecond' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                                'Interval' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'ImageURL' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'MaxFrames' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'DataId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 6,
                    ],
                ],
            ],
        ],
        'ScanText' => [
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
                    'name' => 'Tasks',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Content' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Label' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'maxItems' => 10,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'imageaudit.cn-shanghai.aliyuncs.com',
        ],
    ],
];