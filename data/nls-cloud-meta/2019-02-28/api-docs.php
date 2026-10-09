<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'nls-cloud-meta',
        'version' => '2019-02-28',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateToken' => [
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
            'parameters' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'nls-slp.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'nls-meta.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'nls-meta.cn-shanghai.aliyuncs.com	',
        ],
    ],
];