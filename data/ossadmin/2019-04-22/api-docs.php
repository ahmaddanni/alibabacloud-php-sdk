<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'OssAdmin',
        'version' => '2019-04-22',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'OpenOssService' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'public',
            'endpoint' => 'oss-admin.aliyuncs.com',
        ],
    ],
];