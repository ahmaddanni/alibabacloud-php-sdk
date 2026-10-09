<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'tingwu',
        'version' => '2022-09-30',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateMeetingTrans' => [
            'path' => '/openapi/meeting-trans',
            'methods' => [
                'put',
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
                            'AppKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MeetingKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AudioFormat' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'AudioPackage' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AudioSampleRate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [],
                            ],
                            'AudioBitRate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [],
                            ],
                            'AudioLanguage' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'RealtimeResultEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'RealtimeResultLevel' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enum' => [],
                            ],
                            'RealtimeActiveResultLevel' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'enum' => [],
                            ],
                            'AudioOutputEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'AudioOutputOssBucket' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AudioOutputOssPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MeetingResultEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'MeetingResultOssBucket' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MeetingResultOssPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DocResultEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'AudioSegmentsEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'TranslateResultEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'TranslateLanguages' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TranslateResultLevel' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'TranslateActiveResultLevel' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'RealtimeResultWordsEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'RealtimeResultMeetingInfoEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Tags' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AsrParams' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'LabParams' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AbilityParams' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetMeetingTrans' => [
            'path' => '/openapi/meeting-trans/{MeetingId}',
            'methods' => [
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'MeetingId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopMeetingTrans' => [
            'path' => '/openapi/meeting-trans/{MeetingId}/stop',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'MeetingId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MeetingRoleNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'OnlyRoleSplitResult' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFileTrans' => [
            'path' => '/openapi/file-trans',
            'methods' => [
                'put',
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
                            'AppKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TransKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AudioOssBucket' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AudioOssPath' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AudioLanguage' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'AudioRoleNum' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AudioOutputEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'AudioOutputOssBucket' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AudioOutputOssPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VideoOutputEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'VideoOutputOssBucket' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'VideoOutputOssPath' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TransResultOssBucket' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TransResultOssPath' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AudioSegmentsEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Tags' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AsrParams' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'LabParams' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'AbilityParams' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetFileTrans' => [
            'path' => '/openapi/file-trans/{TransId}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TransId',
                    'in' => 'path',
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
            'regionId' => 'cn-beijing',
            'endpoint' => 'tingwu.cn-beijing.aliyuncs.com',
        ],
    ],
];