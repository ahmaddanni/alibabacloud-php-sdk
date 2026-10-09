<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'goodstech',
        'version' => '2019-12-30',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ClassifyCommodity' => [
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
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ImageURL',
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
            'regionId' => 'cn-shanghai',
            'endpoint' => 'goodstech.cn-shanghai.aliyuncs.com',
        ],
    ],
];