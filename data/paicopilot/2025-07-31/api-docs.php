<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PAICopilot',
        'version' => '2025-07-31',
    ],
    'components' => [
        'schemas' => [
            'Chat' => [
                'type' => 'object',
                'properties' => [
                    'ChatId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                    'Question' => [
                        '$ref' => '#/components/schemas/ChatDetail',
                    ],
                    'Answer' => [
                        '$ref' => '#/components/schemas/ChatDetail',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'Title' => [
                        'type' => 'string',
                    ],
                    'SessionId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ExtraData' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ChatDetail' => [
                'type' => 'object',
                'properties' => [
                    'UserInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'Role' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                ],
            ],
            'Feedback' => [
                'type' => 'object',
                'properties' => [
                    'FeedbackId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                    'FeedbackAction' => [
                        'type' => 'string',
                    ],
                    'FeedbackMessage' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'SessionId' => [
                        'type' => 'string',
                    ],
                    'ChatId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Label' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Session' => [
                'type' => 'object',
                'properties' => [
                    'SessionId' => [
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                    'GmtModified' => [
                        'type' => 'string',
                        'format' => 'iso8601_normal',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'UserId' => [
                        'type' => 'string',
                    ],
                    'SessionTitle' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'SearchInfo' => [
            'path' => '/api/v1/searches',
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
                            'KnowledgeBaseFilters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'CollectionName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ResultLimit' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'ScoreThreshold' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                        ],
                                        'Query' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'WebFilters' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ResultLimit' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'IncludeSites' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'ScoreThreshold' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                        ],
                                        'Query' => [
                                            'type' => 'string',
                                            'required' => true,
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
            'regionId' => 'cn-beijing',
            'endpoint' => 'paicopilot.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'paicopilot.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paicopilot.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paicopilot.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'paicopilot.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paicopilot.cn-hangzhou.aliyuncs.com',
        ],
    ],
];