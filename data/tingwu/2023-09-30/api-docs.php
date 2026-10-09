<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'tingwu',
        'version' => '2023-09-30',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateTask' => [
            'path' => '/openapi/tingwu/v2/tasks',
            'methods' => [
                'put',
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
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'operation',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'AppKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Input' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SourceLanguage' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'FileUrl' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'TaskKey' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Format' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SampleRate' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'enum' => [
                                            '16000',
                                            '8000',
                                        ],
                                    ],
                                    'ProgressiveCallbacksEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'MultipleStreamsEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'TaskId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OutputPath' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LanguageHints' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'AudioChannelMode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Parameters' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Transcoding' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'TargetAudioFormat' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'mp3',
                                                ],
                                            ],
                                            'TargetVideoFormat' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'mp4',
                                                ],
                                            ],
                                            'VideoThumbnailEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'SpectrumEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Transcription' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'AudioEventDetectionEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'DiarizationEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'Diarization' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'SpeakerCount' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                            'OutputLevel' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'AdditionalStreamOutputLevel' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'PhraseId' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'Model' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'RealtimeDiarizationEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'ProfanityFilterEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Translation' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'TargetLanguages' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                            'OutputLevel' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'AdditionalStreamOutputLevel' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'TranslationEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'AutoChaptersEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'MeetingAssistanceEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'MeetingAssistance' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Types' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'minItems' => 1,
                                            ],
                                        ],
                                    ],
                                    'SummarizationEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'Summarization' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Types' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PptExtractionEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'TextPolishEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'ServiceInspectionEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'ServiceInspection' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'SceneIntroduction' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'InspectionIntroduction' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'InspectionContents' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Title' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Content' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'SpeakerMap' => [
                                                'type' => 'object',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'CustomPromptEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'CustomPrompt' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Contents' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Name' => [
                                                            'type' => 'string',
                                                            'required' => true,
                                                        ],
                                                        'Prompt' => [
                                                            'type' => 'string',
                                                            'required' => true,
                                                        ],
                                                        'Model' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'TransType' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ExtraParams' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'NfixEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'MaxKeywords' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'DomainEducationEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'OcrAuxiliaryEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'TranslateLlmSceneEnabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'FullTextSummaryFormat' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'ContentExtractionEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'ContentExtraction' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'SceneIntroduction' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'ExtractionContents' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Title' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Content' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Identity' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'SpeakerMap' => [
                                                'type' => 'object',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'IdentityRecognitionEnabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'IdentityRecognition' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'SceneIntroduction' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'IdentityContents' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                    'properties' => [
                                                        'Name' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                        'Description' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AutoChapters' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'ChapterGranularity' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'Model' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'LlmOutputLanguage' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTaskInfo' => [
            'path' => '/openapi/tingwu/v2/tasks/{TaskId}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateTranscriptionPhrases' => [
            'path' => '/openapi/tingwu/v2/resources/phrases',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 50,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 250,
                            ],
                            'WordWeights' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTranscriptionPhrases' => [
            'path' => '/openapi/tingwu/v2/resources/phrases/{PhraseId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PhraseId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateTranscriptionPhrases' => [
            'path' => '/openapi/tingwu/v2/resources/phrases/{PhraseId}',
            'methods' => [
                'put',
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
                    'name' => 'PhraseId',
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
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 50,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 250,
                            ],
                            'WordWeights' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTranscriptionPhrases' => [
            'path' => '/openapi/tingwu/v2/resources/phrases/{PhraseId}',
            'methods' => [
                'delete',
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
                    'name' => 'PhraseId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListTranscriptionPhrases' => [
            'path' => '/openapi/tingwu/v2/resources/phrases',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'tingwu.cn-beijing.aliyuncs.com',
        ],
    ],
];