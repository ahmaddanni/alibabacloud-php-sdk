<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PolardbAI',
        'version' => '2024-08-20',
    ],
    'components' => [
        'schemas' => [
            'OpenApiModelsPredictCmd' => [
                'type' => 'object',
                'properties' => [],
            ],
        ],
    ],
    'apis' => [
        'PredictSse' => [
            'path' => '/v1/openapi/models/predictSse',
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
            'produces' => [
                'application/octet-stream',
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
                            'dbName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'input' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instanceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'modelClass' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Predict' => [
            'path' => '/v1/openapi/models/predict',
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
                            'dbName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'input' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instanceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'modelClass' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [],
];