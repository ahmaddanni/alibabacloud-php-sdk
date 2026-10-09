<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Vcs',
        'version' => '2020-05-15',
    ],
    'components' => [
        'schemas' => [
            'AiotDevice' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'IPAddr' => [
                        'type' => 'string',
                    ],
                    'Port' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Longitude' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Latitude' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Place' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'AddAiotPersonTableItem' => [
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PersonTableId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PersonTableItem',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PersonTableId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PersonId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'LastChange' => [
                                'type' => 'string',
                            ],
                            'PersonCode' => [
                                'type' => 'string',
                            ],
                            'PersonName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Remarks' => [
                                'type' => 'string',
                            ],
                            'TimeTemplateNum' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'IdentificationNum' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'IdentificationList' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Number' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'ImageNum' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'ImageList' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ImageId' => [
                                            'type' => 'string',
                                        ],
                                        'EventSort' => [
                                            'type' => 'string',
                                        ],
                                        'DeviceId' => [
                                            'type' => 'string',
                                        ],
                                        'StoragePath' => [
                                            'type' => 'string',
                                        ],
                                        'Size' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Type' => [
                                            'type' => 'string',
                                        ],
                                        'FileFormat' => [
                                            'type' => 'string',
                                        ],
                                        'ShotTime' => [
                                            'type' => 'string',
                                        ],
                                        'Width' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Height' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Data' => [
                                            'type' => 'string',
                                        ],
                                        'FeatureInfo' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Vendor' => [
                                                    'type' => 'string',
                                                ],
                                                'AlgorithmVersion' => [
                                                    'type' => 'string',
                                                ],
                                                'AlgorithmType' => [
                                                    'type' => 'string',
                                                ],
                                                'TabId' => [
                                                    'type' => 'string',
                                                ],
                                                'OjectId' => [
                                                    'type' => 'string',
                                                ],
                                                'ImageId' => [
                                                    'type' => 'string',
                                                ],
                                                'FeatureData' => [
                                                    'type' => 'string',
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
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'vcs.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'vcs.cn-shanghai.aliyuncs.com',
        ],
    ],
];