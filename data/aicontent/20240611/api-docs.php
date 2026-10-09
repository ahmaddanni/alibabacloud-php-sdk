<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'AiContent',
        'version' => '20240611',
    ],
    'components' => [
        'schemas' => [
            'AliyunConsoleServiceInfoDTO' => [
                'type' => 'object',
                'properties' => [
                    'serviceCode' => [
                        'type' => 'string',
                    ],
                    'serviceName' => [
                        'type' => 'string',
                    ],
                    'freeCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'freeConcurrencyCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'documentUrl' => [
                        'type' => 'string',
                    ],
                    'buyUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OpenApiMultiResponse' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMessage' => [
                        'type' => 'string',
                    ],
                    'httpStatusCode' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'data' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'id' => [
                                    'type' => 'string',
                                ],
                                'modelId' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'objectType' => [
                                    'type' => 'string',
                                ],
                                'imageUrl' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'jobStatus' => [
                                    'type' => 'string',
                                    'enum' => [
                                        'FINISHED',
                                        'TRAINING',
                                        'TRAINING_TERMINATED',
                                        'WRONG_IMAGE_URL',
                                        'OOM',
                                        'FINISHED',
                                        'SUBMITTED',
                                        'WAIT_SCHEDULE',
                                        'TOO_MANY_INFERENCE_REQUESTS',
                                    ],
                                ],
                                'jobTrainProgress' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'inferenceJobList' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'id' => [
                                                'type' => 'string',
                                            ],
                                            'promptId' => [
                                                'type' => 'string',
                                            ],
                                            'modelId' => [
                                                'type' => 'string',
                                            ],
                                            'jobStatus' => [
                                                'type' => 'string',
                                                'enum' => [
                                                    'FINISHED',
                                                    'INFERRING',
                                                    'INFERRING_TERMINATED',
                                                    'OOM',
                                                    'FINISHED',
                                                    'SUBMITTED',
                                                    'WAIT_SCHEDULE',
                                                    'TOO_MANY_INFERENCE_REQUESTS',
                                                ],
                                            ],
                                            'jobTrainProgress' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                            ],
                                            'resultImageUrl' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                            'createTime' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'inferenceImageCount' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'createTime' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'OpenApiSingleResponse' => [
                'type' => 'object',
                'properties' => [
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'success' => [
                        'type' => 'boolean',
                    ],
                    'errCode' => [
                        'type' => 'string',
                    ],
                    'errMessage' => [
                        'type' => 'string',
                    ],
                    'httpStatusCode' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'modelTrainStatus' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'OralEvaluationStatisticsCallsCountRequest' => [
                'type' => 'object',
                'properties' => [
                    'projectId' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'string',
                    ],
                    'endTime' => [
                        'type' => 'string',
                    ],
                    'granularity' => [
                        'type' => 'string',
                    ],
                    'applicationAccessId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OralEvaluationStatisticsCallsCountResponse' => [
                'type' => 'object',
                'properties' => [
                    'projectId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectData' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'applicationInternalId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ApplicationData' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'applicationAccessId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Data' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'count' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
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
            ],
            'OralEvaluationStatisticsConcurrentCountRequest' => [
                'type' => 'object',
                'properties' => [
                    'projectId' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'string',
                    ],
                    'endTime' => [
                        'type' => 'string',
                    ],
                    'granularity' => [
                        'type' => 'string',
                    ],
                    'applicationAccessId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OralEvaluationStatisticsConcurrentCountResponse' => [
                'type' => 'object',
                'properties' => [
                    'projectId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'projectData' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'applicationInternalId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ApplicationData' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'applicationAccessId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Data' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'count' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
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
            ],
            'OralEvaluationStatisticsErrorCountRequest' => [
                'type' => 'object',
                'properties' => [
                    'projectId' => [
                        'type' => 'string',
                    ],
                    'startTime' => [
                        'type' => 'string',
                    ],
                    'endTime' => [
                        'type' => 'string',
                    ],
                    'granularity' => [
                        'type' => 'string',
                    ],
                    'errorCode' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'applicationAccessId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OralEvaluationStatisticsErrorCountResponse' => [
                'type' => 'object',
                'properties' => [
                    'projectId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ProjectData' => [
                        'type' => 'object',
                        'properties' => [
                            'applicationInternalId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ApplicationData' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'applicationAccessId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Data' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ErrorCode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ErrorMessage' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Data' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'name' => [
                                                                    'type' => 'string',
                                                                    'required' => true,
                                                                ],
                                                                'count' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
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
                        ],
                    ],
                ],
            ],
            'PaidResourceDTO' => [
                'type' => 'object',
                'properties' => [
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'resourcePackageCode' => [
                        'type' => 'string',
                    ],
                    'resourcePackageName' => [
                        'type' => 'string',
                    ],
                    'resourceCatalogCode' => [
                        'type' => 'string',
                    ],
                    'resourceCatalogName' => [
                        'type' => 'string',
                    ],
                    'resourceStatus' => [
                        'type' => 'string',
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'remainQuantity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'effectiveTime' => [
                        'type' => 'string',
                    ],
                    'expireTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PaidResourceQry' => [
                'type' => 'object',
                'properties' => [
                    'resourceStatus' => [
                        'type' => 'string',
                    ],
                    'nextToken' => [
                        'type' => 'string',
                    ],
                    'maxResults' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Personalizedtxt2imgAddInferenceJobCmd' => [
                'type' => 'object',
                'properties' => [
                    'modelId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'prompt' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'imageNumber' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'seed' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'Personalizedtxt2imgAddModelTrainJobCmd' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'objectType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'imageUrl' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Personalizedtxt2imgInferenceJobInfoDTO' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'modelId' => [
                        'type' => 'string',
                    ],
                    'jobStatus' => [
                        'type' => 'string',
                    ],
                    'resultImageUrl' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'createUserId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Personalizedtxt2imgModelTrainJobInfoDTO' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'ObjectType' => [
                        'type' => 'string',
                    ],
                    'ImageUrl' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'JobStatus' => [
                        'type' => 'string',
                    ],
                    'InferenceJobList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Personalizedtxt2imgInferenceJobInfoDTO',
                        ],
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'CreateUserId' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateAccessWarrant' => [
            'path' => '/api/v1/aliyunConsole/createAccessWarrant',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'appId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'timestamp' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userClientIp' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'requestSign' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'warrantAvailable' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'QueryApplicationAccessId' => [
            'path' => '/api/v1/aliyunConsole/queryApplicationAccessId',
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
                    'name' => 'applicationAccessId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryProjectList' => [
            'path' => '/api/v1/aliyunConsole/queryProjectList',
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
            'parameters' => [],
        ],
        'QueryProject' => [
            'path' => '/api/v1/aliyunConsole/queryProject',
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
                    'name' => 'projectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateProject' => [
            'path' => '/api/v1/aliyunConsole/createProject',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'projectName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'projectType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProject' => [
            'path' => '/api/v1/aliyunConsole/updateProject',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'projectId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'projectName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'QueryPurchasedService' => [
            'path' => '/api/v1/aliyunConsole/queryPurchasedService',
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
            'parameters' => [],
        ],
        'ExecuteAITeacherChineseCompositionTutoringWorkflowRun' => [
            'path' => '/pop/api/v1/intelligentAgent/chineseCompositionTutoring/workflowRun',
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
            'consumes' => [],
            'produces' => [],
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
                            'essayOutline' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'essayRequirements' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'essayTopic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'essayType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'essay',
                                    'outline',
                                ],
                            ],
                            'essayWordCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'grade' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'responseMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'streaming',
                                ],
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTextbookAssistantToken' => [
            'path' => '/api/v1/textbookAssistant/teachingResource/GetToken',
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
            'consumes' => [],
            'produces' => [],
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
                            'deviceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'model' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTextbookAssistantGradeVolumes' => [
            'path' => '/api/v1/textbookAssistant/teachingResource/ListGradeVolumes',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTextbookAssistantBooks' => [
            'path' => '/api/v1/textbookAssistant/teachingResource/ListBooks',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'bookId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'grade' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'volume' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'version' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'page' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'maxResults' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTextbookAssistantBookDirectories' => [
            'path' => '/api/v1/textbookAssistant/teachingResource/ListBookDirectories',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'bookId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                    'ALL',
                                ],
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTextbookAssistantArticles' => [
            'path' => '/api/v1/textbookAssistant/teachingResource/ListArticles',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'directoryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTextbookAssistantArticleDetails' => [
            'path' => '/api/v1/textbookAssistant/teachingResource/ListArticleDetails',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'articleIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTextbookAssistantSceneDetails' => [
            'path' => '/api/v1/textbookAssistant/teachingResource/ListSceneDetails',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'authToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sceneIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantStartConversation' => [
            'path' => '/api/v1/textbookAssistant/dialogue/StartConversation',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'articleId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantDialogue' => [
            'path' => '/api/v1/textbookAssistant/dialogue/ExecuteDialogue',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userMessage' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantSseDialogue' => [
            'path' => '/api/v1/textbookAssistant/dialogue/ExecuteSseDialogue',
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
            'produces' => [],
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
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userMessage' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantTranslate' => [
            'path' => '/api/v1/textbookAssistant/dialogue/ExecuteTranslate',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'assistant' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantSuggestion' => [
            'path' => '/api/v1/textbookAssistant/dialogue/Suggestion',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'assistant' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantDifficulty' => [
            'path' => '/api/v1/textbookAssistant/dialogue/ExecuteDifficulty',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'assistant' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'action' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'UP',
                                    'DOWN',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantRefineByContext' => [
            'path' => '/api/v1/textbookAssistant/dialogue/RefineByContext',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'user' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantGrammarCheck' => [
            'path' => '/api/v1/textbookAssistant/dialogue/ExecuteGrammarCheck',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'user' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteTextbookAssistantRetryConversation' => [
            'path' => '/api/v1/textbookAssistant/dialogue/RetryConversation',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'scenario' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'SYNC',
                                    'EXPAND',
                                ],
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'assistant' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherEnglishParaphraseChatMessage' => [
            'path' => '/pop/api/v1/intelligentAgent/englishParaphrase/chatMessage',
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
            'produces' => [],
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
                            'questionInfo' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'grade' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'userAnswer' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'questionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'chatId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'responseMode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherEnglishCompositionTutoringWorkflowRun' => [
            'path' => '/pop/api/v1/intelligentAgent/englishCompositionTutoring/workflowRun',
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
                            'essayOutline' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [],
                            ],
                            'essayRequirements' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'essayTopic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'essayType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'essay',
                                    'outline',
                                ],
                            ],
                            'essayWordCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'grade' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'responseMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'streaming',
                                ],
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AITeacherSyncPracticeTaskGenerate' => [
            'path' => '/api/v1/aiteacher/syncPractice/generateTask',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'grade' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'textbook' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'learningObject' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'textContent' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'keySentences' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'keyWords' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherSyncDialogue' => [
            'path' => '/api/v1/aiteacher/syncPractice/executeSyncTraining',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'records' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isOnTopic' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isOffTopicControl' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'dialogueTasks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'assistant' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'assistantTranslate' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'user' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'languageCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherSyncDialogueTranslate' => [
            'path' => '/api/v1/aiteacher/syncPractice/translate',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'records' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isOnTopic' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isOffTopicControl' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'dialogueTasks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'assistant' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'assistantTranslate' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'user' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAITeacherSyncDialogueSuggestion' => [
            'path' => '/api/v1/aiteacher/syncPractice/suggestion',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'records' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isOnTopic' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isOffTopicControl' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'dialogueTasks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'assistant' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'assistantTranslate' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'user' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'languageCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AITeacherExpansionPracticeTaskGenerate' => [
            'path' => '/api/v1/aiteacher/expansionPractice/generateTask',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'grade' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'textbook' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'learningObject' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'textContent' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'keySentences' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'keyWords' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherExpansionDialogue' => [
            'path' => '/api/v1/aiteacher/expansionPractice/executeExpansionTraining',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'records' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isOnTopic' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isOffTopicControl' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'dialogueTasks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'assistant' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'assistantTranslate' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'user' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'languageCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'background' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'roleInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'assistant' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'user' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'startSentence' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherExpansionDialogueTranslate' => [
            'path' => '/api/v1/aiteacher/expansionPractice/translate',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'records' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isOnTopic' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isOffTopicControl' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'dialogueTasks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'assistant' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'assistantTranslate' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'user' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'background' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'roleInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'assistant' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'user' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'startSentence' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAITeacherExpansionDialogueSuggestion' => [
            'path' => '/api/v1/aiteacher/expansionPractice/suggestion',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'records' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isOnTopic' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isOffTopicControl' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'dialogueTasks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'assistant' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'assistantTranslate' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'user' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'languageCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'background' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'roleInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'assistant' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'user' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'startSentence' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherExpansionDialogueRefine' => [
            'path' => '/api/v1/aiteacher/expansionPractice/refineByContext',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'records' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'content' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'role' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isOnTopic' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'isOffTopicControl' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'dialogueTasks' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'assistant' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'assistantTranslate' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'user' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'order' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'background' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'roleInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'assistant' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'user' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'languageCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startSentence' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteAITeacherGrammarCheck' => [
            'path' => '/api/v1/aiteacher/common/grammarChecking',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AliyunConsoleOpenApiQueryAliyunConsoleServiceList' => [
            'path' => '/api/v1/aliyunConsole/queryAliyunConsoleServiceList',
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
            'parameters' => [],
        ],
        'PersonalizedTextToImageQueryPreModelInferenceJobInfo' => [
            'path' => '/api/v1/personalizedtxt2img/queryPreModelInferenceJobInfo',
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
                    'name' => 'inferenceJobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PersonalizedTextToImageAddInferenceJob' => [
            'path' => '/api/v1/personalizedtxt2img/addPreModelInferenceJob',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'imageUrl' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'trainSteps' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'prompt' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'seed' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'strength' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PersonalizedTextToImageQueryImageAsset' => [
            'path' => '/api/v1/personalizedtxt2img/queryImageAssetFromImageId',
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
                    'name' => 'imageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encodeFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'base64',
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgQueryInferenceJobInfo' => [
            'path' => '/api/v1/personalizedtxt2img/queryInferenceJobInfo',
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
                    'name' => 'inferenceJobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgAddInferenceJob' => [
            'path' => '/api/v1/personalizedtxt2img/addInferenceJob',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'modelId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'prompt' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'seed' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgAddModelTrainJob' => [
            'path' => '/api/v1/personalizedtxt2img/addModelTrainJob',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'objectType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'imageUrl' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'trainSteps' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgQueryImageAsset' => [
            'path' => '/api/v1/personalizedtxt2img/queryImageAsset',
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
                    'name' => 'modelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'promptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'imageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encodeFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'base64',
                        ],
                    ],
                ],
            ],
        ],
        'Personalizedtxt2imgQueryModelTrainJobList' => [
            'path' => '/api/v1/personalizedtxt2img/queryModelTrainJobList',
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
            'parameters' => [],
        ],
        'Personalizedtxt2imgQueryModelTrainStatus' => [
            'path' => '/api/v1/personalizedtxt2img/queryModelTrainStatus',
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
                    'name' => 'modelId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AliyunConsoleOpenApiQueryAliyunConsoleServcieList' => [
            'path' => '/api/v1/aliyunconsole/queryAliyunConsoleServcieList',
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
            'parameters' => [],
        ],
        'CountOralEvaluationStatisticsConcurrent' => [
            'path' => '/api/v1/aliyunConsole/countOralEvaluationStatisticsConcurrent',
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
                        '$ref' => '#/components/schemas/OralEvaluationStatisticsConcurrentCountRequest',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CountOralEvaluationStatisticsCalls' => [
            'path' => '/api/v1/aliyunConsole/countOralEvaluationStatisticsCalls',
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
                        '$ref' => '#/components/schemas/OralEvaluationStatisticsCallsCountRequest',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CountOralEvaluationStatisticsError' => [
            'path' => '/api/v1/aliyunConsole/countOralEvaluationStatisticsError',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/OralEvaluationStatisticsErrorCountRequest',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AliyunConsoleOpenApiQueryPaidResource' => [
            'path' => '/api/v1/aliyunConsole/queryPaidResource',
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
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'orderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'orderDirection',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'groupBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'needTotalCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'public',
            'endpoint' => 'aicontent.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'aicontent.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'aicontent.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'aicontent.cn-beijing.aliyuncs.com',
        ],
    ],
];