<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'SpecTest15',
        'version' => '2024-07-31',
    ],
    'components' => [
        'schemas' => [
            'Datedil' => [
                'type' => 'object',
                'properties' => [
                    'mymap' => [
                        'type' => 'object',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'time' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                ],
            ],
            'Ef' => [
                'type' => 'object',
                'properties' => [
                    'Rest' => [
                        'type' => 'string',
                    ],
                    'Test' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FirstStruct' => [
                'type' => 'object',
                'properties' => [
                    'Rest' => [
                        'type' => 'string',
                    ],
                    'Test' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Sc' => [
                'type' => 'object',
                'properties' => [
                    'String' => [
                        'type' => 'string',
                    ],
                    'Obj' => [
                        'type' => 'string',
                    ],
                    'Add' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StructTest' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Age' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TestDemo' => [
                'type' => 'object',
                'properties' => [],
            ],
            'UserInfo' => [
                'type' => 'object',
                'properties' => [
                    'Namew' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Vc' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'GetInstance' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateInstance' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListInstances' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'APP' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateInstance' => [
            'path' => '/，。。',
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
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteInstance' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [],
];