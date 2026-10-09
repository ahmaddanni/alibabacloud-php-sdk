<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'nlp-automl',
        'version' => '2019-07-01',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AddMTInterveneWord' => [
            'methods' => [
                'post',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'SourceText',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TargetText',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PackageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPredictDoc' => [
            'methods' => [
                'head',
                'post',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DocId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Product',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PredictMTModelByDoc' => [
            'methods' => [
                'head',
                'post',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'FileContent',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ModelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NeedXLIFF',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModelVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'nlp-automl.cn-hangzhou.aliyuncs.com',
        ],
    ],
];